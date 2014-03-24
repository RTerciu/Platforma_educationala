<!doctype html>
<html>
<head>
	<title>Login Platforma</title>
<link href="css/style_login.css" rel="stylesheet" media="screen,projection" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.showPassword.min.js"></script>


	</head>
<body>

	{{ Form::open(array('url' => 'login')) }}
		<ol class="forms">

		<!-- if there are login errors, show them here -->
		<li>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</li>

		<li>
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</li>

		<li >
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password','',array('class'=>'password', 'id'=>'password')) }}
		</li>

		<li class="buttons" >{{ Form::submit('Submit!') }}</li>
		
		</ol>
	{{ Form::close() }}

</body>
</html>