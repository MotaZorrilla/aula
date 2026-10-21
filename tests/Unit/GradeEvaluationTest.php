<?php

namespace Tests\Unit;

use App\Domain\Ugma\GradeEvaluation;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class GradeEvaluationTest extends TestCase
{
    public function test_grade_evaluation_computes_exact_sum_and_assigns_status_sobresaliente(): void
    {
        $eval = new GradeEvaluation(5.0, 4.5, 4.5, 5.0);

        $this->assertEquals(19.0, $eval->totalGrade);
        $this->assertEquals('Sobresaliente', $eval->status);
        $this->assertIsArray($eval->toArray());
    }

    public function test_grade_evaluation_assigns_aprobado_for_passing_threshold(): void
    {
        $eval = new GradeEvaluation(2.5, 2.5, 2.5, 2.5);

        $this->assertEquals(10.0, $eval->totalGrade);
        $this->assertEquals('Aprobado', $eval->status);
    }

    public function test_grade_evaluation_assigns_reprobado_for_below_threshold(): void
    {
        $eval = new GradeEvaluation(2.0, 2.0, 2.0, 2.0);

        $this->assertEquals(8.0, $eval->totalGrade);
        $this->assertEquals('Reprobado', $eval->status);
    }

    public function test_grade_evaluation_throws_exception_when_phase_exceeds_max_score(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new GradeEvaluation(5.5, 4.0, 4.0, 4.0);
    }

    public function test_grade_evaluation_throws_exception_when_phase_is_negative(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new GradeEvaluation(-1.0, 4.0, 4.0, 4.0);
    }
}
