<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }

    // Relacion uno a muchos inversa Lesson -> Section
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    // Relacion inversa uno a muchos Lesson -> Platform
    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }

    // Relacion uno a uno Lesson -> Description
    public function description(){
        return $this->hasOne('App\Models\Description');
    }

    // Relacion muchos a muchos Lesson -> User
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    // Relacion uno a uno polimórfica Lesson -> Resource
    public function resource(){
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    // Relacion uno a muchos polimórfica Lesson -> Comment
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    // Relacion uno a muchos polimórfica Lesson -> Reaction
    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
