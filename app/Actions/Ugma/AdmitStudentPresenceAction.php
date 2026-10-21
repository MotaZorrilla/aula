<?php

namespace App\Actions\Ugma;

use App\Models\UgmaLivePresence;

class AdmitStudentPresenceAction
{
    /**
     * Valida o revoca la admisión de uno o todos los estudiantes en la sala de espera.
     */
    public function execute(?int $presenceId = null, bool $admitAll = false, bool $status = true): array
    {
        if ($admitAll) {
            $updated = UgmaLivePresence::where('last_ping', '>=', now()->subSeconds(60))
                ->update(['is_admitted' => $status]);

            return [
                'success' => true,
                'count' => $updated,
                'message' => $status ? "Se admitieron {$updated} participantes a la clase en vivo." : "Se revocó la admisión de {$updated} participantes.",
            ];
        }

        if ($presenceId) {
            $presence = UgmaLivePresence::findOrFail($presenceId);
            $presence->is_admitted = $status;
            $presence->save();

            return [
                'success' => true,
                'presence' => $presence,
                'message' => $status ? "Participante {$presence->student_name} admitido a la clase." : "Acceso revocado para {$presence->student_name}.",
            ];
        }

        return ['success' => false, 'message' => 'Parámetros insuficientes.'];
    }
}
