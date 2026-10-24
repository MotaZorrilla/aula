<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgmaEvaluation extends Model
{
    use HasFactory;

    protected $table = 'ugma_evaluations';

    protected $fillable = [
        'student_name',
        'student_email',
        'session_token',
        'evaluation_code',
        'score_day1',
        'score_day2',
        'total_score',
        'answers_payload',
        'bcf_ticket_code',
        'time_spent_seconds',
        'status',
        'instructor_feedback',
        'graded_at',
    ];

    protected $casts = [
        'score_day1' => 'float',
        'score_day2' => 'float',
        'total_score' => 'float',
        'answers_payload' => 'array',
        'time_spent_seconds' => 'integer',
        'graded_at' => 'datetime',
    ];
}
