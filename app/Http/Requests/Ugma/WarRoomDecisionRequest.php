<?php

namespace App\Http\Requests\Ugma;

use Illuminate\Foundation\Http\FormRequest;

class WarRoomDecisionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'option_selected' => ['required', 'integer', 'in:1,2,3'],
            'student_id' => ['nullable', 'integer', 'exists:ugma_students,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'option_selected.required' => 'Debe seleccionar una de las 3 alternativas técnicas disponibles.',
            'option_selected.in' => 'La opción elegida debe ser 1, 2 o 3.',
        ];
    }
}
