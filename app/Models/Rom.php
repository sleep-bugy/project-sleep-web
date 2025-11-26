<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rom extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_id',
        'name',
        'version',
        'type',
        'maintainer',
        'file_size',
        'changelog',
        'notes',
        'download_url',
        'status'
    ];

    protected $casts = [
        'changelog' => 'array',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}