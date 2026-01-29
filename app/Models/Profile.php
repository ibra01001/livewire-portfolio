<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'image',
        'title',
        'bio',
        'email',
        'github',
        'linkedin',
        'twitter',
    ];

    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class)->orderBy('order');
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class)->orderBy('order');
    }

    public function certifications(): HasMany
    {
        return $this->hasMany(Certification::class)->orderBy('order');
    }

    public function languages(): HasMany
    {
        return $this->hasMany(Language::class)->orderBy('order');
    }
}

