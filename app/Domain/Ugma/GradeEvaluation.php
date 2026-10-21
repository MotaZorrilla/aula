<?php

namespace App\Domain\Ugma;

use InvalidArgumentException;

class GradeEvaluation
{
    public float $phase1Bim;

    public float $phase2Clash;

    public float $phase3Evm;

    public float $phase4Defense;

    public float $totalGrade;

    public string $status;

    public function __construct(
        float $phase1Bim,
        float $phase2Clash,
        float $phase3Evm,
        float $phase4Defense
    ) {
        $this->validatePhase('Fase 1 (BIM & ISO 19650)', $phase1Bim);
        $this->validatePhase('Fase 2 (Clash Detection & BCF)', $phase2Clash);
        $this->validatePhase('Fase 3 (Simulación 4D/5D & EVM)', $phase3Evm);
        $this->validatePhase('Fase 4 (Defensa Oral War Room)', $phase4Defense);

        $this->phase1Bim = round($phase1Bim, 2);
        $this->phase2Clash = round($phase2Clash, 2);
        $this->phase3Evm = round($phase3Evm, 2);
        $this->phase4Defense = round($phase4Defense, 2);

        $this->totalGrade = round($this->phase1Bim + $this->phase2Clash + $this->phase3Evm + $this->phase4Defense, 2);

        if ($this->totalGrade > 20.0) {
            throw new InvalidArgumentException('La nota total no puede exceder 20 puntos.');
        }

        $this->status = $this->calculateStatus($this->totalGrade);
    }

    private function validatePhase(string $name, float $score): void
    {
        if ($score < 0.0 || $score > 5.0) {
            throw new InvalidArgumentException("La calificación de {$name} debe estar entre 0.0 y 5.0 puntos.");
        }
    }

    private function calculateStatus(float $total): string
    {
        if ($total >= 18.0) {
            return 'Sobresaliente';
        }
        if ($total >= 10.0) {
            return 'Aprobado';
        }

        return 'Reprobado';
    }

    public function toArray(): array
    {
        return [
            'phase1_bim' => $this->phase1Bim,
            'phase2_clash' => $this->phase2Clash,
            'phase3_evm' => $this->phase3Evm,
            'phase4_defense' => $this->phase4Defense,
            'total_grade' => $this->totalGrade,
            'status' => $this->status,
        ];
    }
}
