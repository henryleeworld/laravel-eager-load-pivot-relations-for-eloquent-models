<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserCar extends Pivot
{
    /**
     * Get the color that owns the user car.
     */
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
