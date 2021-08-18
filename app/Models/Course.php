<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];

    // Conteo de estudiantes inscritos en el curso
    protected $withCount = ['students', 'reviews'];

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    // Agregando nuevo atributo al modelo
    public function getRatingAttribute(){

        if($this->reviews_count){
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }

    public function scopeCategory($query, $category_id){
        if($category_id){
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeLevel($query, $level_id){
        if($level_id){
            return $query->where('level_id', $level_id);
        }
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    // Relación uno a muchos inversa
    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    // Relacion muchos a muchos
    public function students(){
        return $this->belongsToMany('App\Models\User');
    }

    // Relación uno a muchos Course -> Review
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }

    // Relacion uno a muchos inversa Course -> Price
    public function price(){
        return $this->belongsTo('App\Models\Price');
    }

    // Relacion uno a muchos inversa Course -> Category
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    // Relacion uno a muchos inversa Course -> Level
    public function level(){
        return $this->belongsTo('App\Models\Level');
    }

    // Relacion uno a muchos Course -> Requirement
    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
    }

    // Relacion uno a muchos Course -> Goal
    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }

    // Relacion uno a muchos Course -> Audience
    public function audiences(){
        return $this->hasMany('App\Models\Audience');
    }

    // Relacion uno a muchos Course -> Section
    public function sections(){
        return $this->hasMany('App\Models\Section');
    }

    // Relacion uno a uno polomórfica Course -> Image
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    // Relacion intermedia entre Course -> Lesson
    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }

    // Relacion 1 a 1 con observation
    public function observation(){
        return $this->hasOne('App\Models\Observation');
    }
}
