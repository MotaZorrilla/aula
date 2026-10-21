<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UgmaLivePresence extends Model
{
    use HasFactory;

    protected $table = 'ugma_live_presence';

    protected $fillable = [
        'student_id',
        'session_token',
        'student_name',
        'student_email',
        'ip_address',
        'is_admitted',
        'last_ping',
    ];

    protected $casts = [
        'is_admitted' => 'boolean',
        'last_ping' => 'datetime',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(UgmaStudent::class, 'student_id');
    }

    public function scopeActive($query, int $seconds = 20)
    {
        return $query->where('last_ping', '>=', now()->subSeconds($seconds));
    }
}
