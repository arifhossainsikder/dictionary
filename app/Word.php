<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
    	'title',
		'synonyms',
		'quotes',
		'definition',
		'bmeaning',
	];

    public function likes() {
    	return $this->hasMany('App\Like');
	}
}
