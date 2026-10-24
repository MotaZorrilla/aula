<?php

namespace Tests\Feature;

use App\Models\UgmaEvaluation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UgmaEvaluationFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_evaluacion_view_renders_successfully_200(): void
    {
        $routes = [
            '/ugma-gerencia-obras/evaluacion-dia-1-2',
            '/ugma-gerencia-obras/evaluacion-dia-1-2.html',
            '/evaluacion-dia-1-2',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
            $response->assertSee('Evaluación Práctica Integrada: Semana 1 (Día 1 y Día 2)');
            $response->assertSee('Curva de MacLeamy');
            $response->assertSee('BCF 3.0');
            $response->assertSee('ISO 19650');
        }
    }

    public function test_student_can_submit_day_evaluation_and_scores_are_persisted(): void
    {
        $payload = [
            'student_name' => 'Ing. Francisco Rivas',
            'student_email' => 'f.rivas@ugma.edu.ve',
            'session_token' => 'tok_test_session_123',
            'time_spent_seconds' => 360,
            'answers' => [
                'day1_q1_cde_state' => 'wip_to_shared_ifc',
                'day1_q2_cost_ratio' => '36.0',
                'day1_q3_ccv_protocol' => 'registro_inmutable_cde',
                'day2_q4_clash1' => 'hard_clash',
                'day2_q4_clash2' => 'soft_clash',
                'day2_q6_lean_plan' => 'lookahead_3_semanas',
            ],
            'bcf_ticket_code' => '<bcf:Topic Guid="c2e3-test"><bcf:Title>Colisión Severa D-04</bcf:Title></bcf:Topic>',
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/evaluacion/submit', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'student_name' => 'Ing. Francisco Rivas',
            'score_day1' => 10.0,
            'score_day2' => 10.0,
            'total_score' => 20.0,
            'status' => 'aprobado',
            'verdict' => 'Sobresaliente',
        ]);

        $this->assertDatabaseHas('ugma_evaluations', [
            'student_email' => 'f.rivas@ugma.edu.ve',
            'total_score' => 20.0,
            'status' => 'aprobado',
        ]);
    }

    public function test_automated_scoring_logic_awards_partial_marks_for_mixed_answers(): void
    {
        $payload = [
            'student_name' => 'Ing. Carlos Medina',
            'student_email' => 'c.medina@ugma.edu.ve',
            'session_token' => 'tok_medina_456',
            'answers' => [
                'day1_q1_cde_state' => 'wip_to_shared_ifc', // +3.5
                'day1_q2_cost_ratio' => '5.0', // ratio > 0 pero no en [30, 40] => +2.0
                'day1_q3_ccv_protocol' => 'registro_inmutable_cde', // +3.0 => day1: 8.5
                'day2_q4_clash1' => 'hard_clash', // parcial +2.0
                'day2_q4_clash2' => 'hard_clash',
                'day2_q6_lean_plan' => 'lookahead_3_semanas', // +3.0
            ],
            'bcf_ticket_code' => '<bcf:Topic Guid="test-bcf"></bcf:Topic>', // +3.5 => day2: 8.5
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/evaluacion/submit', $payload);

        $response->assertStatus(200);
        $eval = UgmaEvaluation::where('student_email', 'c.medina@ugma.edu.ve')->first();
        $this->assertNotNull($eval);
        $this->assertEquals(8.5, $eval->score_day1);
        $this->assertEquals(8.5, $eval->score_day2);
        $this->assertEquals(17.0, $eval->total_score);
        $this->assertEquals('aprobado', $eval->status);
    }

    public function test_teacher_can_fetch_evaluation_submissions_list_and_metrics(): void
    {
        UgmaEvaluation::create([
            'student_name' => 'Alumno 1',
            'student_email' => 'alumno1@ugma.edu.ve',
            'score_day1' => 10.0,
            'score_day2' => 10.0,
            'total_score' => 20.0,
            'status' => 'aprobado',
            'answers_payload' => ['test' => true],
        ]);

        UgmaEvaluation::create([
            'student_name' => 'Alumno 2',
            'student_email' => 'alumno2@ugma.edu.ve',
            'score_day1' => 6.0,
            'score_day2' => 8.0,
            'total_score' => 14.0,
            'status' => 'aprobado',
            'answers_payload' => ['test' => true],
        ]);

        $response = $this->getJson('/ugma-gerencia-obras/api/evaluacion/submissions');

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'metrics' => [
                'total_submissions' => 2,
                'average_score' => 17,
                'passed_count' => 2,
                'pass_rate_percentage' => 100,
                'highest_score' => 20,
            ],
        ]);
        $response->assertJsonCount(2, 'submissions');
    }

    public function test_teacher_can_grade_and_feedback_evaluation_submission(): void
    {
        $eval = UgmaEvaluation::create([
            'student_name' => 'Ing. Jonathan Gómez',
            'student_email' => 'j.gomez@ugma.edu.ve',
            'score_day1' => 8.0,
            'score_day2' => 8.0,
            'total_score' => 16.0,
            'status' => 'aprobado',
            'answers_payload' => ['test' => true],
        ]);

        $payload = [
            'id' => $eval->id,
            'total_score' => 18.5,
            'status' => 'revisado',
            'feedback' => 'Excelente formulación de BCF y comprensión de la curva MacLeamy.',
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/evaluacion/grade', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'message' => 'Calificación y observaciones actualizadas exitosamente.',
            'id' => $eval->id,
            'total_score' => 18.5,
            'status' => 'revisado',
            'instructor_feedback' => 'Excelente formulación de BCF y comprensión de la curva MacLeamy.',
        ]);

        $this->assertDatabaseHas('ugma_evaluations', [
            'id' => $eval->id,
            'total_score' => 18.5,
            'status' => 'revisado',
            'instructor_feedback' => 'Excelente formulación de BCF y comprensión de la curva MacLeamy.',
        ]);
    }

    public function test_evaluation_validation_fails_on_missing_required_fields(): void
    {
        // Unhappy path: falta student_name y student_email
        $response = $this->postJson('/ugma-gerencia-obras/api/evaluacion/submit', [
            'session_token' => 'tok_missing_fields',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['student_name', 'student_email', 'answers']);
    }
}
