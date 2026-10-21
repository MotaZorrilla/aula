<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UgmaStudent extends Model
{
    use HasFactory;

    protected $table = 'ugma_students';

    protected $fillable = [
        'cedula',
        'nombre',
        'email',
        'telefono',
        'specialty',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function warRoomDecisions(): HasMany
    {
        return $this->hasMany(UgmaWarRoomDecision::class, 'student_id');
    }

    public function grade(): HasOne
    {
        return $this->hasOne(UgmaGrade::class, 'student_id');
    }
}
