<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relación uno a muchos Level -> Coruse
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}