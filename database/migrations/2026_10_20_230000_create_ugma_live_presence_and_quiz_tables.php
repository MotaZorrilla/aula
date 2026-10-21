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
        Schema::create('ugma_live_presence', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->nullable()->constrained('ugma_students')->nullOnDelete();
            $table->string('session_token')->index();
            $table->string('student_name');
            $table->string('student_email');
            $table->string('ip_address')->nullable();
            $table->boolean('is_admitted')->default(false); // Validated by instructor
            $table->timestamp('last_ping')->useCurrent();
            $table->timestamps();
        });

        Schema::create('ugma_quiz_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('unit_number'); // 1 to 6
            $table->string('question');
            $table->json('options'); // JSON array of options
            $table->unsignedTinyInteger('correct_index'); // 0, 1, 2, 3
            $table->text('explanation')->nullable();
            $table->unsignedSmallInteger('time_limit_sec')->default(30);
            $table->boolean('is_active')->default(false);
            $table->timestamp('activated_at')->nullable();
            $table->timestamps();
        });

        Schema::create('ugma_quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('ugma_quiz_questions')->cascadeOnDelete();
            $table->foreignId('student_id')->nullable()->constrained('ugma_students')->nullOnDelete();
            $table->string('student_name')->nullable();
            $table->unsignedTinyInteger('chosen_index');
            $table->boolean('is_correct');
            $table->unsignedInteger('response_time_ms')->default(0);
            $table->unsignedInteger('score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugma_quiz_answers');
        Schema::dropIfExists('ugma_quiz_questions');
        Schema::dropIfExists('ugma_live_presence');
    }
};
