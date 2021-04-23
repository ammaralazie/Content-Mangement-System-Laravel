<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'content', 'category_id', 'featured', 'slug'
    ];
    protected $dates = [
        'deleted_at'
    ];
    public function category()
    {
        $this->belongsTo('App/Category');
    } //end function categor

    public function tags(){
        return $this->belongsToMany('App/Tag');
    }//end function tags

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    } //end getFeaturedAttribut
}
