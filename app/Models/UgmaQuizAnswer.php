<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UgmaQuizAnswer extends Model
{
    use HasFactory;

    protected $table = 'ugma_quiz_answers';

    protected $fillable = [
        'question_id',
        'student_id',
        'student_name',
        'chosen_index',
        'is_correct',
        'response_time_ms',
        'score',
    ];

    protected $casts = [
        'chosen_index' => 'integer',
        'is_correct' => 'boolean',
        'response_time_ms' => 'integer',
        'score' => 'integer',
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(UgmaQuizQuestion::class, 'question_id');
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(UgmaStudent::class, 'student_id');
    }
}
