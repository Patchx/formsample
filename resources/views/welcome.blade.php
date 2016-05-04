<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="{{ asset('favicon.ico') }}">
	
		<title>formsample - RAnderson2016</title>

    <!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap-ie10-viewport-bug-workaround.css') }}">

		<!-- Stylesheet -->
		<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

	</head>

	<body>

		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">Home</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Contact</a></li>
		        <li><a href="#">About</a></li>
		        <li><a href="#">Terms</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

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

    <footer class="blog-footer">
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="{{ asset('js/bootstrap-ie10-viewport-bug-workaround.js') }}"></script>

	</body>
</html>
