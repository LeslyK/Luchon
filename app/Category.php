<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['title']

    public fuction posts(){
    	return $this->belongsToMany('App\Post');
    }

		public fuction actions(){
    	return $this->belongsToMany('App\Action');
    }
}
