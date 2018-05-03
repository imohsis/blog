<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
    	return $this->belongsToMany('App\Model\User\Post', 'post_tags')->orderBy('created_at', 'DESC')->paginate(5);
    }

    public function getRoutekeyName()
    {
    	return 'slug';
    }


}

