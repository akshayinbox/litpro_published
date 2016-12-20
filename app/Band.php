<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    public function albums() {
        return $this->hasMany('App\Album');
    }

    protected static function boot() {
    	parent::boot();

    	/*
    	* this event handler is called when band model is being deleted...
    	*/
    	static::deleting(function ($band) {
    			$band->albums()->delete();
    	});
    }
}
