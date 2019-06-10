<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }

    public function category(){
        $this->belongsTo('App\Category');
    }
}
