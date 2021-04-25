<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'user_1d', 'avater','about','facebook','twitter','github'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }//end function user
}
