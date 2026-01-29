<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    protected $fillable = [
        'profile_id',
        'role',
        'company',
        'company_logo',
        'location',
        'start_date',
        'end_date',
        'description',
        'is_active',
        'order',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
