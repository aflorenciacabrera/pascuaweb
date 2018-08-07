<?php

namespace pascuaweb;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    public function users()
	{
   		return $this
        	->belongsToMany('pascuaweb\User')
        	->withTimestamps();
	}
}
