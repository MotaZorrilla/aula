<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgmaModuleLock extends Model
{
    use HasFactory;

    protected $table = 'ugma_module_locks';

    protected $fillable = [
        'module_key',
        'is_locked',
    ];

    protected $casts = [
        'is_locked' => 'boolean',
    ];

    public static function isLocked(string $key): bool
    {
        return (bool) static::where('module_key', $key)->value('is_locked');
    }
}
