<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relación uno a muchos Price -> Coruse
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
