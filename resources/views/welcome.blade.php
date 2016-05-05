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

        {!! Form::model($entry, 
        ['id'=>'entryForm'],
        ['action' => 'EntriesController@store']) !!}

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
                  'id'=>'email',
                  'name'=>'email',
                  'class'=>'form-control', 
                  'placeholder'=>'Your e-mail address')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your Phone Number') !!}
            {!! Form::text('phone', null, 
                array('required', 
                  'id'=>'phone',
                  'name'=>'phone',
                  'class'=>'form-control', 
                  'placeholder'=>'Your phone number')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit >>', 
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}

        <script>
          $("#entryForm").validate({
            rules: {
              email: {
                email: true
              },
              phone: {
                digits: true,
                minlength: [10],
                maxlength: [10]
              }
            }
          });

        </script>

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
          <li><a href="https://anderson-portfolio.herokuapp.com/" target="_blank">Portfolio</a></li>
          <li><a href="https://drive.google.com/file/d/0B2QzEXlTkhI7SHRETnJkXzBhT2M/view?usp=sharing" target="_blank">Resume</a></li>
          <li><a href="https://github.com/Patchx" target="_blank">GitHub</a></li>
          <li><a href="https://www.linkedin.com/in/robertandersonlink" target="_blank">LinkedIn</a></li>
          <li><a href="https://twitter.com/randerTw?lang=en" target="_blank">Twitter</a></li>
        </ol>
      </div>
    </div><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</div><!-- /.container -->

@endsection