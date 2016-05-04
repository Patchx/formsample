<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Entry;

class EntriesController extends Controller
{
  public function create()
  {
    $entry = new Entry;
    return view('welcome', ['entry' => $entry]);  
  }

 public function store(Request $request) {
    $entry = new \App\Entry;

    // populate the model with the form data
    $entry->firstname = $request->firstname;
    $entry->lastname = $request->lastname;
    $entry->email = $request->email;
    $entry->phone = $request->phone;

		// save the model to create a new object in the database
		  if (!$entry->save()) {
		    return redirect()
		          ->action('EntriesController@create')
		      ->withInput();
		  }

		  // success!
		  return redirect()
		    ->action('EntriesController@create')
		    ->with('message', 'Your '. $entry->firstname . ' ' . $entry->lastname . ' has been created!');
		}
}
