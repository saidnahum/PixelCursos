<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relación polimórfica
    public function commentable(){
        return $this->morphTo();
    }

    // Relacion uno a muchos polimórfica Comment
    public function comments(){
        return $this->morphMany('App\Models\Comments', 'commentable');
    }

    // Relacion uno a muchos polimórfica Reaction
    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }

    // Relacion uno amuchos inversa Comment -> User
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
