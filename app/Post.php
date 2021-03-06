<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
