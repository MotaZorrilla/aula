<?php

namespace App\Actions\Ugma;

use App\Models\UgmaStudent;
use Illuminate\Support\Str;

class RegisterStudentAction
{
    /**
     * Registra o actualiza los datos de un estudiante del diplomado.
     */
    public function execute(array $data): array
    {
        $cedula = strtoupper(trim($data['cedula']));
        $email = strtolower(trim($data['email']));
        $nombre = trim($data['nombre']);
        $telefono = isset($data['telefono']) ? trim($data['telefono']) : null;
        $specialty = isset($data['specialty']) ? trim($data['specialty']) : 'Ingeniería Civil';

        $student = UgmaStudent::updateOrCreate(
            ['cedula' => $cedula],
            [
                'nombre' => $nombre,
                'email' => $email,
                'telefono' => $telefono,
                'specialty' => $specialty,
                'is_active' => true,
            ]
        );

        $token = 'ugma_tok_'.Str::random(32);

        return [
            'success' => true,
            'student' => $student,
            'token' => $token,
            'message' => "Registro verificado exitosamente para el Ing. {$student->nombre}.",
        ];
    }
}
