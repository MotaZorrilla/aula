<?php

namespace App\Actions\Ugma;

use App\Models\UgmaEvaluation;
use Carbon\Carbon;
use InvalidArgumentException;

class GradeEvaluationSubmissionAction
{
    public function execute(int $id, array $data): array
    {
        $evaluation = UgmaEvaluation::findOrFail($id);

        if (isset($data['total_score']) && ! isset($data['score_day1']) && ! isset($data['score_day2'])) {
            $half = round(((float) $data['total_score']) / 2, 1);
            $scoreDay1 = $half;
            $scoreDay2 = round((float) $data['total_score'] - $half, 1);
        } else {
            $scoreDay1 = isset($data['score_day1']) ? (float) $data['score_day1'] : $evaluation->score_day1;
            $scoreDay2 = isset($data['score_day2']) ? (float) $data['score_day2'] : $evaluation->score_day2;
        }

        if ($scoreDay1 < 0 || $scoreDay1 > 10 || $scoreDay2 < 0 || $scoreDay2 > 10) {
            throw new InvalidArgumentException('Las notas de cada día deben estar comprendidas entre 0 y 10 puntos.');
        }

        $totalScore = round($scoreDay1 + $scoreDay2, 1);
        $status = $data['status'] ?? ($totalScore >= 10.0 ? 'aprobado' : 'reprobado');
        $feedback = trim($data['instructor_feedback'] ?? ($data['feedback'] ?? ($evaluation->instructor_feedback ?? '')));

        $evaluation->update([
            'score_day1' => $scoreDay1,
            'score_day2' => $scoreDay2,
            'total_score' => $totalScore,
            'status' => $status,
            'instructor_feedback' => $feedback,
            'graded_at' => Carbon::now(),
        ]);

        return [
            'success' => true,
            'message' => 'Calificación y observaciones actualizadas exitosamente.',
            'id' => $evaluation->id,
            'student_name' => $evaluation->student_name,
            'score_day1' => $evaluation->score_day1,
            'score_day2' => $evaluation->score_day2,
            'total_score' => $evaluation->total_score,
            'status' => $evaluation->status,
            'instructor_feedback' => $evaluation->instructor_feedback,
            'graded_at' => $evaluation->graded_at->toDateTimeString(),
        ];
    }
}
