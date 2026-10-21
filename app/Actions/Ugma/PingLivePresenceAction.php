<?php

namespace App\Actions\Ugma;

use App\Models\UgmaLivePresence;
use App\Models\UgmaStudent;

class PingLivePresenceAction
{
    /**
     * Registra o actualiza el latido (heartbeat) de presencia de un participante en vivo.
     */
    public function execute(string $sessionToken, string $name, string $email, ?string $ip = null): array
    {
        $student = UgmaStudent::where('email', strtolower(trim($email)))
            ->orWhere('nombre', trim($name))
            ->first();

        $presence = UgmaLivePresence::updateOrCreate(
            ['session_token' => $sessionToken],
            [
                'student_id' => $student?->id,
                'student_name' => trim($name),
                'student_email' => strtolower(trim($email)),
                'ip_address' => $ip,
                'last_ping' => now(),
            ]
        );

        return [
            'success' => true,
            'is_admitted' => (bool) $presence->is_admitted,
            'student_name' => $presence->student_name,
            'session_token' => $presence->session_token,
        ];
    }
}
