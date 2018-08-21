<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
	protected $fillable = 
	[
		'title',
		'code',
		'description'
	];

	public function user()
    {
        return $this -> belongsTo('App\User');
    }

}
