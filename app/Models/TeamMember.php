<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'country',
        'bio',
        'avatar_url',
        'social_links',
        'status'
    ];

    protected $casts = [
        'social_links' => 'array',
    ];
}