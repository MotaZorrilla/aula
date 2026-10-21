<?php

namespace App\Actions\Ugma;

use App\Models\UgmaWarRoomDecision;

class RecordWarRoomDecisionAction
{
    public function execute(int $option, ?int $studentId = null, ?string $ip = null, ?string $userAgent = null): array
    {
        UgmaWarRoomDecision::create([
            'student_id' => $studentId,
            'option_selected' => $option,
            'ip_address' => $ip,
            'user_agent' => $userAgent,
        ]);

        $totalVotes = UgmaWarRoomDecision::count();
        $votes1 = UgmaWarRoomDecision::where('option_selected', 1)->count();
        $votes2 = UgmaWarRoomDecision::where('option_selected', 2)->count();
        $votes3 = UgmaWarRoomDecision::where('option_selected', 3)->count();

        $pct1 = $totalVotes > 0 ? round(($votes1 / $totalVotes) * 100, 1) : 0;
        $pct2 = $totalVotes > 0 ? round(($votes2 / $totalVotes) * 100, 1) : 0;
        $pct3 = $totalVotes > 0 ? round(($votes3 / $totalVotes) * 100, 1) : 0;

        $dictamen = match ($option) {
            1 => [
                'type' => 'warning',
                'title' => 'Decisión Riesgosa: Desviación Post-Fraguado',
                'description' => 'Priorizar el vaciado inmediato evita reclamos de la concretera, pero compromete el gálibo vertical y expone al consorcio a costos de rediseño de cielo raso.',
            ],
            2 => [
                'type' => 'danger',
                'title' => 'Violación Estructural Severa: Perforación No Calculada',
                'description' => 'Perforar el alma de una viga de transferencia cargada a corte sin recálculo estructural anula la póliza decenal y activa responsabilidad personal del residente (Art. 1637 CCV).',
            ],
            3 => [
                'type' => 'success',
                'title' => 'Decisión de Ingeniería de Élite (openBIM ISO 19650)',
                'description' => 'Paralizar el vaciado, emitir ticket BCF federado y relocalizar ductos garantiza la indemnidad estructural, preserva el Art. 1637 CCV y justifica legalmente la prórroga de obra.',
            ],
            default => [
                'type' => 'info',
                'title' => 'Decisión Registrada',
                'description' => 'Su voto ha sido ponderado en la bitácora del comité técnico.',
            ]
        };

        return [
            'success' => true,
            'total_votes' => $totalVotes,
            'statistics' => [
                'opt1' => ['votes' => $votes1, 'pct' => $pct1],
                'opt2' => ['votes' => $votes2, 'pct' => $pct2],
                'opt3' => ['votes' => $votes3, 'pct' => $pct3],
            ],
            'dictamen' => $dictamen,
        ];
    }
}
