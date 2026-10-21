<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UgmaGrade extends Model
{
    use HasFactory;

    protected $table = 'ugma_grades';

    protected $fillable = [
        'student_id',
        'phase1_bim',
        'phase2_clash',
        'phase3_evm',
        'phase4_defense',
        'total_grade',
        'status',
        'observations',
    ];

    protected $casts = [
        'phase1_bim' => 'float',
        'phase2_clash' => 'float',
        'phase3_evm' => 'float',
        'phase4_defense' => 'float',
        'total_grade' => 'float',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(UgmaStudent::class, 'student_id');
    }
}
