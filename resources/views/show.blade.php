@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

<div class="container">

  <div class="blog-header">
    <h3>Entry Data</h3>
  </div>

  <div class="row">

    <div class="col-xs-2 blog-main">
      <div class="blog-post">
      	<p style="text-align: right">
      		Name:  <br>
      		Email:  <br>
      		Phone:  
      	</p>
      </div>
    </div> <!-- col-sm blog-main -->

    <div class="col-xs-10 blog-main">

      <div class="blog-post">

        <p>
					<?php
						echo $entry->firstname . " " . $entry->lastname . "<br>";
						echo $entry->email . "<br>";
						echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $entry->phone); //Format as phone number

					?>
				</p>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

      </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

  </div><!-- /.row -->

</div><!-- /.container -->

@endsection

