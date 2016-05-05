<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

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

		if ($validator->fails())
		{
			return $validator->messages();
		}
		// If no errors, return true
		return "valid";
	}

  // Database table association
	protected $table = 'entries';
}
