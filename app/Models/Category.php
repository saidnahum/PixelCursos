<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relación uno a muchos Category -> Coruse
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
