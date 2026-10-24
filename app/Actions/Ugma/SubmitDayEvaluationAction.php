<?php

namespace App\Actions\Ugma;

use App\Models\UgmaEvaluation;
use Carbon\Carbon;

class SubmitDayEvaluationAction
{
    public function execute(array $data): array
    {
        $name = trim($data['student_name'] ?? 'Participante');
        $email = strtolower(trim($data['student_email'] ?? ''));
        $token = trim($data['session_token'] ?? '');
        $timeSpent = (int) ($data['time_spent_seconds'] ?? 0);
        $answers = $data['answers'] ?? [];
        $bcfTicket = $data['bcf_ticket_code'] ?? null;

        // 1. Evaluación Día 1 (Máx 10 Pts)
        $scoreDay1 = 0.0;
        $scoreDay2 = 0.0;

        $isNewFormat = isset($answers['d1_q1_bim_def']) 
            || isset($answers['d1_q7_atlantis_governance']) 
            || isset($answers['d2_q1_cde_states']);

        if ($isNewFormat) {
            // ==========================================================
            // NUEVO FORMATO SIMPLIFICADO: 14 PREGUNTAS (ESCALA 0-20 PTS)
            // ==========================================================

            // --- BLOQUE A: 6 PREGUNTAS PRESENTACIÓN BIM CIV (1 pt c/u = 6 pts) ---
            if (($answers['d1_q1_bim_def'] ?? '') === 'colaborativa_parametrica_3d') {
                $scoreDay1 += 1.0;
            }
            if (($answers['d1_q2_bim_dimensions'] ?? '') === '3d_geom_4d_tiempo_5d_costo') {
                $scoreDay1 += 1.0;
            }
            if (($answers['d1_q3_bim_metrics'] ?? '') === 'costos_33_plazos_50_prod_20') {
                $scoreDay1 += 1.0;
            }
            if (($answers['d1_q4_bim_roles'] ?? '') === 'manager_coordinador_modelador') {
                $scoreDay1 += 1.0;
            }
            if (($answers['d1_q5_bim_uses'] ?? '') === 'coordinacion_fases_costes') {
                $scoreDay1 += 1.0;
            }
            if (($answers['d1_q6_bim_cim'] ?? '') === 'cim_gemelos_digitales') {
                $scoreDay1 += 1.0;
            }

            // --- BLOQUE B: 4 PREGUNTAS METODOLOGÍA PROYECTO ATLANTIS (1 pt c/u = 4 pts) ---
            if (($answers['d1_q7_atlantis_governance'] ?? '') === 'gobernanza_financiera_5d') {
                $scoreDay1 += 1.0;
            }
            if (($answers['d1_q8_atlantis_scope'] ?? '') === 'exclusion_expresa_contrato') {
                $scoreDay1 += 1.0;
            }
            if (($answers['d1_q9_atlantis_labor'] ?? '') === 'programacion_cuadrillas_cascada') {
                $scoreDay1 += 1.0;
            }
            if (($answers['d1_q10_atlantis_changes'] ?? '') === 'protocolo_cambios_modelo') {
                $scoreDay1 += 1.0;
            }

            // --- BLOQUE C: 4 PREGUNTAS DÍA 2 - CLASH & CDE ISO 19650 (2.5 pts c/u = 10 pts) ---
            if (($answers['d2_q1_cde_states'] ?? '') === 'wip_shared_published_archive') {
                $scoreDay2 += 2.5;
            }
            if (($answers['d2_q2_clash_types'] ?? '') === 'hard_solidos_soft_galibos') {
                $scoreDay2 += 2.5;
            }
            if (($answers['d2_q3_bcf_standard'] ?? '') === 'bcf_tickets_neutros_guid') {
                $scoreDay2 += 2.5;
            }
            if (($answers['d2_q4_macleamy_decision'] ?? '') === 'resolucion_temprana_diseno') {
                $scoreDay2 += 2.5;
            }
        } else {
            // ==========================================================
            // RETROCOMPATIBILIDAD CON EVALUACIONES PREVIAS
            // ==========================================================
            // Reto 1: Contenedor CDE ISO 19650
            if (($answers['day1_q1_cde_state'] ?? '') === 'wip_to_shared_ifc') {
                $scoreDay1 += 3.5;
            }

            // Reto 2: MacLeamy Cost Ratio & Ahorro
            $ratio = (float) ($answers['day1_q2_cost_ratio'] ?? 0);
            if ($ratio >= 30.0 && $ratio <= 40.0) {
                $scoreDay1 += 3.5;
            } elseif ($ratio > 0) {
                $scoreDay1 += 2.0;
            }

            // Reto 3: Blindaje Art. 1637 CCV
            if (($answers['day1_q3_ccv_protocol'] ?? '') === 'registro_inmutable_cde') {
                $scoreDay1 += 3.0;
            }

            // Reto 4: Clasificación Clash (Hard vs Soft)
            $clashType1 = $answers['day2_q4_clash1'] ?? '';
            $clashType2 = $answers['day2_q4_clash2'] ?? '';
            if ($clashType1 === 'hard_clash' && $clashType2 === 'soft_clash') {
                $scoreDay2 += 3.5;
            } elseif ($clashType1 === 'hard_clash' || $clashType2 === 'soft_clash') {
                $scoreDay2 += 2.0;
            }

            // Reto 5: Formato BCF 3.0 & Ticket
            if (! empty($bcfTicket) && (str_contains($bcfTicket, 'Topic') || str_contains($bcfTicket, 'bcf') || str_contains($bcfTicket, 'guid'))) {
                $scoreDay2 += 3.5;
            } elseif (! empty($bcfTicket)) {
                $scoreDay2 += 2.0;
            }

            // Reto 6: Coordinación y Lookahead Lean
            if (($answers['day2_q6_lean_plan'] ?? '') === 'lookahead_3_semanas') {
                $scoreDay2 += 3.0;
            }
        }

        $totalScore = round($scoreDay1 + $scoreDay2, 1);
        $status = $totalScore >= 10.0 ? 'aprobado' : 'entregado';

        $evaluation = UgmaEvaluation::updateOrCreate(
            [
                'student_email' => $email,
                'evaluation_code' => 'EVAL-DIA-1-2',
            ],
            [
                'student_name' => $name,
                'session_token' => $token ?: 'tok_'.bin2hex(random_bytes(8)),
                'score_day1' => $scoreDay1,
                'score_day2' => $scoreDay2,
                'total_score' => $totalScore,
                'answers_payload' => $answers,
                'bcf_ticket_code' => $bcfTicket,
                'time_spent_seconds' => $timeSpent,
                'status' => $status,
                'graded_at' => Carbon::now(),
            ]
        );

        return [
            'success' => true,
            'id' => $evaluation->id,
            'student_name' => $evaluation->student_name,
            'score_day1' => $evaluation->score_day1,
            'score_day2' => $evaluation->score_day2,
            'total_score' => $evaluation->total_score,
            'status' => $evaluation->status,
            'verdict' => $totalScore >= 16 ? 'Sobresaliente' : ($totalScore >= 10 ? 'Aprobado' : 'Por Mejorar'),
            'submitted_at' => $evaluation->updated_at->toIso8601String(),
        ];
    }
}
