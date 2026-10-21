<?php

namespace App\Actions\Ugma;

use App\Models\UgmaModuleLock;

class ToggleModuleLockAction
{
    public function execute(string $moduleKey, ?bool $isLocked = null): UgmaModuleLock
    {
        $lock = UgmaModuleLock::firstOrNew(['module_key' => $moduleKey]);

        if ($isLocked !== null) {
            $lock->is_locked = $isLocked;
        } else {
            $lock->is_locked = ! $lock->is_locked;
        }

        $lock->save();

        return $lock;
    }
}
