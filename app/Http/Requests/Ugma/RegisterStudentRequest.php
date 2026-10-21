<?php

namespace App\Http\Requests\Ugma;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cedula' => ['required', 'string', 'max:20'],
            'nombre' => ['required', 'string', 'min:3', 'max:150'],
            'email' => ['required', 'email:rfc,dns', 'max:150'],
            'telefono' => ['nullable', 'string', 'max:30'],
            'specialty' => ['nullable', 'string', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'cedula.required' => 'La cédula de identidad es obligatoria para el registro oficial.',
            'nombre.required' => 'El nombre y apellido son obligatorios.',
            'email.required' => 'El correo electrónico es indispensable para emitir las credenciales.',
            'email.email' => 'El formato del correo electrónico no es válido.',
        ];
    }
}
