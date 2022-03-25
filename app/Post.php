<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*This means that a post has a relationship with a user and it belongs to a user. We could also say that a single post belongs to a user.*/
     public function user(){
         return $this->belongsTo('App\User');
     }
}
