<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = "skills";
    protected $fillable = [
        'name',
        'image',
        'description',
        'level',
        'category',
        'show_level',
    ];

    protected $casts = [
        'show_level' => 'boolean',
    ];
}
