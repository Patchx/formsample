<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
	public static function validate($data)
	{
		$validator = Validator::make(
	    [
	        'firstname' => $data->firstname,
	        'lastname' => $data->lastname,
	        'email' => $data->email,
	        'phone' => $data->phone
	    ],
	    [
	        'firstname' => 'required',
	        'lastname' => 'required',
	        'email' => 'required|email|unique:entries',
	        'phone' => 'required|min:8'
	    ]
		);
	}

  // Database table association
	protected $table = 'entries';
}
