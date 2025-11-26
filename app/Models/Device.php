<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'codename', 
        'manufacturer',
        'model',
        'release_date',
        'status',
        'image_url',
        'specs'
    ];

    protected $casts = [
        'specs' => 'array',
    ];
}