<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UgmaQuizQuestion extends Model
{
    use HasFactory;

    protected $table = 'ugma_quiz_questions';

    protected $fillable = [
        'unit_number',
        'question',
        'options',
        'correct_index',
        'explanation',
        'time_limit_sec',
        'is_active',
        'activated_at',
    ];

    protected $casts = [
        'unit_number' => 'integer',
        'options' => 'array',
        'correct_index' => 'integer',
        'time_limit_sec' => 'integer',
        'is_active' => 'boolean',
        'activated_at' => 'datetime',
    ];

    public function answers(): HasMany
    {
        return $this->hasMany(UgmaQuizAnswer::class, 'question_id');
    }
}
