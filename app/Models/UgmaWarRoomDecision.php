<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UgmaWarRoomDecision extends Model
{
    use HasFactory;

    protected $table = 'ugma_war_room_decisions';

    protected $fillable = [
        'student_id',
        'option_selected',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'option_selected' => 'integer',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(UgmaStudent::class, 'student_id');
    }
}
