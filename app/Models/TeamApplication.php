<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country',
        'position_interest',
        'experience',
        'why_join',
        'status',
    ];

    protected $casts = [
        'experience' => 'array',
    ];
}