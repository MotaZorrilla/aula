<?php

namespace App\Actions\Ugma;

use App\Domain\Ugma\GradeEvaluation;
use App\Models\UgmaGrade;
use App\Models\UgmaStudent;

class EvaluateStudentAction
{
    public function execute(int $studentId, float $phase1, float $phase2, float $phase3, float $phase4, ?string $obs = null): UgmaGrade
    {
        $student = UgmaStudent::findOrFail($studentId);

        $evaluation = new GradeEvaluation($phase1, $phase2, $phase3, $phase4);

        return UgmaGrade::updateOrCreate(
            ['student_id' => $student->id],
            [
                'phase1_bim' => $evaluation->phase1Bim,
                'phase2_clash' => $evaluation->phase2Clash,
                'phase3_evm' => $evaluation->phase3Evm,
                'phase4_defense' => $evaluation->phase4Defense,
                'total_grade' => $evaluation->totalGrade,
                'status' => $evaluation->status,
                'observations' => $obs,
            ]
        );
    }
}
