@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

<div class="container">

  <div class="blog-header">
    <h1 class="blog-title">Sample Form</h1>
    <br>
  </div>

  <div class="row">

    <div class="col-sm-8 blog-main">

      <div class="blog-post">

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::model($entry, ['action' => 'EntriesController@store']) !!}

        <div class="form-group">
            {!! Form::label('First Name') !!}
            {!! Form::text('firstname', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'first name')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Last Name') !!}
            {!! Form::text('lastname', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'last name')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your E-mail Address') !!}
            {!! Form::text('email', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'Your e-mail address')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your Phone Number') !!}
            {!! Form::text('phone', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'Your phone number')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit >>', 
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}

      </div><!-- /.blog-post -->

    </div><!-- /.blog-main -->

    <div class="col-sm-4 blog-sidebar hidden-xs">
      <div class="sidebar-module sidebar-module-inset">
        <h4>Who built this anyways?</h4>
        <p>Hi! My name is Robert, and I built this site. If you would like to talk, feel free to contact me at robert.anderson.fl@gmail.com or find me on the social links below:</p>
      </div>
      <div class="sidebar-module">
        <h4>Social Links</h4>
        <ol class="list-unstyled">
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Resume</a></li>
          <li><a href="#">GitHub</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#">Twitter</a></li>
        </ol>
      </div>
    </div><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</div><!-- /.container -->

@endsection