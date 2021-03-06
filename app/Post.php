<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{	
	protected $fillable = ['title', 'description', 'image', 'content'];

	public function user(){
		return $this->belongsToMany('App\User');
	}

    // public fonction categories(){
    // 	return $this->belongsToMany('App\Category');
    // }
}
