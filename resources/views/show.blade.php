@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

<div class="container">

  <div class="blog-header">
    <h2 class="blog-title">Sample Form</h2>
    <br>
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
						echo $entry->phone;
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

