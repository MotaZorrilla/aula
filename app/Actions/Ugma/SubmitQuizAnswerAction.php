<?php

namespace App\Actions\Ugma;

use App\Models\UgmaQuizAnswer;
use App\Models\UgmaQuizQuestion;
use App\Models\UgmaStudent;

class SubmitQuizAnswerAction
{
    /**
     * Procesa y califica la respuesta de un estudiante en tiempo real.
     */
    public function execute(int $questionId, int $chosenIndex, ?string $studentName = null, ?string $studentEmail = null, int $responseTimeMs = 0): array
    {
        $question = UgmaQuizQuestion::findOrFail($questionId);

        $student = null;
        if ($studentEmail) {
            $student = UgmaStudent::where('email', strtolower(trim($studentEmail)))->first();
        }

        // Evitar duplicados por estudiante en la misma pregunta
        $existing = UgmaQuizAnswer::where('question_id', $questionId)
            ->where(function ($q) use ($student, $studentName) {
                if ($student) {
                    $q->where('student_id', $student->id);
                } else {
                    $q->where('student_name', $studentName);
                }
            })->first();

        if ($existing) {
            return [
                'success' => true,
                'already_answered' => true,
                'is_correct' => (bool) $existing->is_correct,
                'score' => $existing->score,
                'correct_index' => $question->correct_index,
                'explanation' => $question->explanation,
                'message' => 'Ya habías enviado tu respuesta para esta pregunta.',
            ];
        }

        $isCorrect = ($chosenIndex === $question->correct_index);

        // Algoritmo Mentimeter/Kahoot: 1000 base + hasta 500 por velocidad
        $score = 0;
        if ($isCorrect) {
            $speedBonus = max(0, 500 - intdiv($responseTimeMs, 60));
            $score = 1000 + $speedBonus;
        }

        $answer = UgmaQuizAnswer::create([
            'question_id' => $questionId,
            'student_id' => $student?->id,
            'student_name' => $student?->nombre ?? ($studentName ?: 'Participante Anónimo'),
            'chosen_index' => $chosenIndex,
            'is_correct' => $isCorrect,
            'response_time_ms' => $responseTimeMs,
            'score' => $score,
        ]);

        return [
            'success' => true,
            'already_answered' => false,
            'is_correct' => $isCorrect,
            'score' => $score,
            'correct_index' => $question->correct_index,
            'explanation' => $question->explanation,
            'message' => $isCorrect ? "¡Excelente! Respuesta correcta (+{$score} pts)." : 'Respuesta incorrecta. Revisa el fundamento técnico.',
        ];
    }
}
