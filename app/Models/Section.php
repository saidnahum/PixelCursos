<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relaccion uno a muchos inversa Sectio -> Course
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    //Relacion uno a muchos Section -> Lesson
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }


}
