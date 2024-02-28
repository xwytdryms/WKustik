<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    protected $guarded =['id'];
    protected $casts = [
        'latest_payload' => 'array',
    ];

    public function devices()
    { 
        return $this->belongsTo(Devices::class);
    }
}