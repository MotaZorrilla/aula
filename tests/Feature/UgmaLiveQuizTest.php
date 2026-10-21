<?php

namespace Tests\Feature;

use App\Models\UgmaQuizQuestion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UgmaLiveQuizTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Crear preguntas de prueba
        UgmaQuizQuestion::create([
            'unit_number' => 1,
            'question' => '¿Cuál es la diferencia técnica entre CAD y BIM?',
            'options' => ['Opción A falsa', 'Opción B paramétrica correcta', 'Opción C falsa'],
            'correct_index' => 1,
            'explanation' => 'BIM estructura datos orientados a objetos paramétricos.',
            'time_limit_sec' => 30,
            'is_active' => false,
        ]);

        UgmaQuizQuestion::create([
            'unit_number' => 2,
            'question' => '¿Qué define una colisión tipo Soft Clash?',
            'options' => ['Intersección física directa', 'Invasión de distancias de mantenimiento y gálibos', 'Error tipográfico'],
            'correct_index' => 1,
            'explanation' => 'Las colisiones soft resguardan tolerancias operativas y de mantenimiento.',
            'time_limit_sec' => 30,
            'is_active' => false,
        ]);
    }

    public function test_student_presence_ping_registers_live_student_and_defaults_to_unadmitted(): void
    {
        $payload = [
            'session_token' => 'tok_test_session_123',
            'name' => 'Ing. Francisco Rivas',
            'email' => 'f.rivas@ugma.edu.ve',
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/live-presence/ping', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'is_admitted' => false,
            'student_name' => 'Ing. Francisco Rivas',
        ]);

        $this->assertDatabaseHas('ugma_live_presence', [
            'session_token' => 'tok_test_session_123',
            'is_admitted' => false,
        ]);
    }

    public function test_teacher_can_admit_single_student_or_all_students_in_live_presence(): void
    {
        // Registro previo de presencia
        $this->postJson('/ugma-gerencia-obras/api/live-presence/ping', [
            'session_token' => 'tok_1',
            'name' => 'Ing. Pedro Almodóvar',
            'email' => 'p.almodovar@ugma.edu.ve',
        ]);

        // Admitir a todos
        $admitResponse = $this->postJson('/ugma-gerencia-obras/api/live-presence/admit', [
            'admit_all' => true,
            'status' => true,
        ]);

        $admitResponse->assertStatus(200);
        $admitResponse->assertJson(['success' => true]);

        $this->assertDatabaseHas('ugma_live_presence', [
            'session_token' => 'tok_1',
            'is_admitted' => true,
        ]);
    }

    public function test_teacher_can_trigger_live_quiz_question_and_students_fetch_active_state_without_exposing_correct_answer(): void
    {
        $question = UgmaQuizQuestion::first();

        // Docente lanza la pregunta
        $triggerResponse = $this->postJson('/ugma-gerencia-obras/api/live-quiz/trigger', [
            'question_id' => $question->id,
        ]);

        $triggerResponse->assertStatus(200);
        $triggerResponse->assertJson(['success' => true]);

        // Alumno consulta el estado síncrono
        $stateResponse = $this->getJson('/ugma-gerencia-obras/api/live-quiz/state?email=alumno@ugma.edu.ve');

        $stateResponse->assertStatus(200);
        $stateResponse->assertJson([
            'has_active_question' => true,
            'question' => [
                'id' => $question->id,
                'question' => '¿Cuál es la diferencia técnica entre CAD y BIM?',
            ],
            'has_answered' => false,
        ]);

        // SEGURIDAD: Comprobar que correct_index NO se filtra al estudiante
        $this->assertArrayNotHasKey('correct_index', $stateResponse->json('question'));
    }

    public function test_student_submitting_correct_answer_receives_score_and_speed_bonus(): void
    {
        $question = UgmaQuizQuestion::first();

        $payload = [
            'question_id' => $question->id,
            'chosen_index' => 1, // Opción correcta
            'name' => 'Ing. Carlos Mendoza',
            'email' => 'c.mendoza@ugma.edu.ve',
            'response_time_ms' => 4500, // 4.5 segundos
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/live-quiz/answer', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'is_correct' => true,
            'already_answered' => false,
        ]);

        $score = $response->json('score');
        $this->assertGreaterThan(1000, $score, 'El puntaje debe incluir bono de velocidad por encima de 1000 base');

        $this->assertDatabaseHas('ugma_quiz_answers', [
            'question_id' => $question->id,
            'student_name' => 'Ing. Carlos Mendoza',
            'is_correct' => true,
        ]);
    }

    public function test_student_submitting_incorrect_answer_receives_zero_score(): void
    {
        $question = UgmaQuizQuestion::first();

        $payload = [
            'question_id' => $question->id,
            'chosen_index' => 0, // Opción errónea
            'name' => 'Ing. Roberto Silva',
            'email' => 'r.silva@ugma.edu.ve',
            'response_time_ms' => 6000,
        ];

        $response = $this->postJson('/ugma-gerencia-obras/api/live-quiz/answer', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'is_correct' => false,
            'score' => 0,
        ]);
    }

    public function test_duplicate_answer_submission_is_prevented(): void
    {
        $question = UgmaQuizQuestion::first();

        $payload = [
            'question_id' => $question->id,
            'chosen_index' => 1,
            'name' => 'Ing. Diana Mendoza',
            'email' => 'd.mendoza@ugma.edu.ve',
        ];

        // Primer envío
        $this->postJson('/ugma-gerencia-obras/api/live-quiz/answer', $payload);

        // Segundo intento
        $duplicateResponse = $this->postJson('/ugma-gerencia-obras/api/live-quiz/answer', $payload);

        $duplicateResponse->assertStatus(200);
        $duplicateResponse->assertJson([
            'success' => true,
            'already_answered' => true,
        ]);
    }

    public function test_leaderboard_ranks_participants_by_total_score(): void
    {
        $question = UgmaQuizQuestion::first();

        // Participante 1 (rápido)
        $this->postJson('/ugma-gerencia-obras/api/live-quiz/answer', [
            'question_id' => $question->id,
            'chosen_index' => 1,
            'name' => 'Ing. Ganador Oro',
            'email' => 'oro@ugma.edu.ve',
            'response_time_ms' => 2000,
        ]);

        // Participante 2 (más lento)
        $this->postJson('/ugma-gerencia-obras/api/live-quiz/answer', [
            'question_id' => $question->id,
            'chosen_index' => 1,
            'name' => 'Ing. Ganador Plata',
            'email' => 'plata@ugma.edu.ve',
            'response_time_ms' => 12000,
        ]);

        $response = $this->getJson('/ugma-gerencia-obras/api/live-quiz/leaderboard');

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'top_winner' => [
                'name' => 'Ing. Ganador Oro',
            ],
        ]);
    }
}
