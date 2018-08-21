<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['description','content','image','count','user_id' ];

    public function user()
    {
        return $this->belongsTo('App\User');

    }
    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'posttags');
    }
}
