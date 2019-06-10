<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        $this->belongsTo('App\Post');
    }

    public function user(){
        $this->belongsTo('App\User');
    }

    public function reply(){
        $this->hasMany('App\Reply');
    }
}
