<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ugma_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_email');
            $table->string('session_token')->nullable()->index();
            $table->string('evaluation_code')->default('EVAL-DIA-1-2');
            $table->float('score_day1')->default(0);
            $table->float('score_day2')->default(0);
            $table->float('total_score')->default(0);
            $table->json('answers_payload')->nullable();
            $table->text('bcf_ticket_code')->nullable();
            $table->integer('time_spent_seconds')->default(0);
            $table->string('status')->default('entregado'); // entregado, revisado, aprobado, reprobado
            $table->text('instructor_feedback')->nullable();
            $table->timestamp('graded_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugma_evaluations');
    }
};
