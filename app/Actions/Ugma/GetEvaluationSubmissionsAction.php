<?php

namespace App\Actions\Ugma;

use App\Models\UgmaEvaluation;

class GetEvaluationSubmissionsAction
{
    public function execute(string $code = 'EVAL-DIA-1-2'): array
    {
        $evaluations = UgmaEvaluation::where('evaluation_code', $code)
            ->orderBy('total_score', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        $totalSubmissions = $evaluations->count();
        $averageScore = $totalSubmissions > 0 ? round($evaluations->avg('total_score'), 1) : 0.0;
        $passedCount = $evaluations->where('total_score', '>=', 10.0)->count();
        $passRate = $totalSubmissions > 0 ? round(($passedCount / $totalSubmissions) * 100, 1) : 0.0;
        $highestScore = $totalSubmissions > 0 ? $evaluations->max('total_score') : 0.0;

        return [
            'success' => true,
            'metrics' => [
                'total_submissions' => $totalSubmissions,
                'average_score' => $averageScore,
                'passed_count' => $passedCount,
                'pass_rate_percentage' => $passRate,
                'highest_score' => $highestScore,
            ],
            'submissions' => $evaluations->map(function ($e) {
                return [
                    'id' => $e->id,
                    'student_name' => $e->student_name,
                    'student_email' => $e->student_email,
                    'score_day1' => $e->score_day1,
                    'score_day2' => $e->score_day2,
                    'total_score' => $e->total_score,
                    'time_spent_seconds' => $e->time_spent_seconds,
                    'status' => $e->status,
                    'bcf_ticket_code' => $e->bcf_ticket_code,
                    'answers' => $e->answers_payload,
                    'instructor_feedback' => $e->instructor_feedback,
                    'graded_at' => $e->graded_at ? $e->graded_at->toDateTimeString() : null,
                    'updated_at' => $e->updated_at->toDateTimeString(),
                ];
            }),
        ];
    }
}
