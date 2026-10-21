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
        Schema::create('ugma_students', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->unique();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('specialty')->nullable()->default('Ingeniería Civil');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('ugma_war_room_decisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->nullable()->constrained('ugma_students')->nullOnDelete();
            $table->unsignedTinyInteger('option_selected'); // 1, 2, or 3
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });

        Schema::create('ugma_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('ugma_students')->cascadeOnDelete();
            $table->decimal('phase1_bim', 4, 2)->default(0);      // max 5.0
            $table->decimal('phase2_clash', 4, 2)->default(0);    // max 5.0
            $table->decimal('phase3_evm', 4, 2)->default(0);      // max 5.0
            $table->decimal('phase4_defense', 4, 2)->default(0);  // max 5.0
            $table->decimal('total_grade', 4, 2)->default(0);     // max 20.0
            $table->string('status')->default('Cursando');        // Aprobado, Sobresaliente, Reprobado
            $table->text('observations')->nullable();
            $table->timestamps();
        });

        Schema::create('ugma_module_locks', function (Blueprint $table) {
            $table->id();
            $table->string('module_key')->unique();
            $table->boolean('is_locked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugma_module_locks');
        Schema::dropIfExists('ugma_grades');
        Schema::dropIfExists('ugma_war_room_decisions');
        Schema::dropIfExists('ugma_students');
    }
};
