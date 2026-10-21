<?php

namespace App\Actions\Ugma;

use App\Models\UgmaQuizAnswer;
use Illuminate\Support\Facades\DB;

class GetLiveLeaderboardAction
{
    /**
     * Retorna el ranking y podio de participantes ordenados por puntuación acumulada y velocidad.
     */
    public function execute(int $limit = 10): array
    {
        $leaderboard = UgmaQuizAnswer::select(
            'student_name',
            DB::raw('SUM(score) as total_score'),
            DB::raw('COUNT(*) as answers_count'),
            DB::raw('SUM(CASE WHEN is_correct = 1 THEN 1 ELSE 0 END) as correct_count'),
            DB::raw('AVG(response_time_ms) as avg_time_ms')
        )
            ->groupBy('student_name')
            ->orderByDesc('total_score')
            ->orderBy('avg_time_ms')
            ->limit($limit)
            ->get()
            ->map(function ($row, $index) {
                return [
                    'rank' => $index + 1,
                    'name' => $row->student_name,
                    'total_score' => (int) $row->total_score,
                    'correct_count' => (int) $row->correct_count,
                    'answers_count' => (int) $row->answers_count,
                    'avg_time_ms' => round($row->avg_time_ms, 0),
                ];
            });

        return [
            'success' => true,
            'leaderboard' => $leaderboard,
            'top_winner' => $leaderboard->first(),
        ];
    }
}
