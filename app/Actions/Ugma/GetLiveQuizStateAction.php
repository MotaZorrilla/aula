<?php

namespace App\Actions\Ugma;

use App\Models\UgmaQuizAnswer;
use App\Models\UgmaQuizQuestion;
use App\Models\UgmaStudent;

class GetLiveQuizStateAction
{
    /**
     * Retorna el estado síncrono del aula en vivo para el estudiante (sin exponer la respuesta correcta).
     */
    public function execute(?string $studentEmail = null, ?string $studentName = null): array
    {
        $activeQuestion = UgmaQuizQuestion::where('is_active', true)->first();

        if (! $activeQuestion) {
            return [
                'has_active_question' => false,
                'question' => null,
            ];
        }

        $student = null;
        if ($studentEmail) {
            $student = UgmaStudent::where('email', strtolower(trim($studentEmail)))->first();
        }

        $hasAnswered = UgmaQuizAnswer::where('question_id', $activeQuestion->id)
            ->where(function ($q) use ($student, $studentName) {
                if ($student) {
                    $q->where('student_id', $student->id);
                } else {
                    $q->where('student_name', $studentName);
                }
            })->exists();

        $answersCount = UgmaQuizAnswer::where('question_id', $activeQuestion->id)->count();

        return [
            'has_active_question' => true,
            'question' => [
                'id' => $activeQuestion->id,
                'unit_number' => $activeQuestion->unit_number,
                'question' => $activeQuestion->question,
                'options' => $activeQuestion->options,
                'time_limit_sec' => $activeQuestion->time_limit_sec,
                'activated_at' => $activeQuestion->activated_at?->toIso8601String(),
            ],
            'has_answered' => $hasAnswered,
            'total_answers' => $answersCount,
        ];
    }
}
