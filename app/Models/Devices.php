<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    use HasFactory;
    protected $guarded = ['id'] ;

    public function values(){
        return $this->hasMany(Values::class);
    }

    public function create()
    {
        
    }
}