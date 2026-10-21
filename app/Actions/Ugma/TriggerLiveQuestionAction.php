<?php

namespace App\Actions\Ugma;

use App\Models\UgmaQuizQuestion;

class TriggerLiveQuestionAction
{
    /**
     * Activa una pregunta del banco interactivo en las pantallas de los cursantes o cierra la activa.
     */
    public function execute(?int $questionId = null): array
    {
        // Desactivar preguntas previas
        UgmaQuizQuestion::where('is_active', true)->update(['is_active' => false]);

        if ($questionId && $questionId > 0) {
            $question = UgmaQuizQuestion::findOrFail($questionId);
            $question->is_active = true;
            $question->activated_at = now();
            $question->save();

            return [
                'success' => true,
                'active_question' => [
                    'id' => $question->id,
                    'unit_number' => $question->unit_number,
                    'question' => $question->question,
                    'options' => $question->options,
                    'time_limit_sec' => $question->time_limit_sec,
                ],
                'message' => "Pregunta #{$question->id} lanzada en vivo al aula.",
            ];
        }

        return [
            'success' => true,
            'active_question' => null,
            'message' => 'Ronda de preguntas cerrada.',
        ];
    }
}
