<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = false ;
    protected $fillable = ['url','shortened'];

    public static function getUniqueShortUrl(){
		$shortened= str_random(5);
		if (Url::where('shortened', $shortened)->count()> 0){

			return static ::getUniqueShortUrl();
		}

		return $shortened;

	}

}
