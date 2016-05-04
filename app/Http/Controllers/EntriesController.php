<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Entry;

class EntriesController extends Controller
{
	public function home()
	  {
	  	$entry = new Entry;
      return view('welcome')->with('entry');
	  }	
}
