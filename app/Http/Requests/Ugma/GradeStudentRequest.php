<?php

namespace App\Http\Requests\Ugma;

use Illuminate\Foundation\Http\FormRequest;

class GradeStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:ugma_students,id'],
            'phase1_bim' => ['required', 'numeric', 'min:0', 'max:5'],
            'phase2_clash' => ['required', 'numeric', 'min:0', 'max:5'],
            'phase3_evm' => ['required', 'numeric', 'min:0', 'max:5'],
            'phase4_defense' => ['required', 'numeric', 'min:0', 'max:5'],
            'observations' => ['nullable', 'string', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'student_id.required' => 'Debe especificar el estudiante a calificar.',
            'phase1_bim.max' => 'La Fase 1 (BIM) no puede exceder 5.0 puntos.',
            'phase2_clash.max' => 'La Fase 2 (Clash) no puede exceder 5.0 puntos.',
            'phase3_evm.max' => 'La Fase 3 (EVM) no puede exceder 5.0 puntos.',
            'phase4_defense.max' => 'La Fase 4 (Defensa) no puede exceder 5.0 puntos.',
        ];
    }
}
