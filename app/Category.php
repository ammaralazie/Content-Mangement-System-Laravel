<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post(){
        $this->hasMany('App/Post');
    }//end function post
}
