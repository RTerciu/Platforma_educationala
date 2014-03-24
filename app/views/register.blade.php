	<!doctype html>
<html>
<head>
	<title>Inregistrare pe Platforma</title>
</head>
<body>

	{{ Form::open(array('url' => 'register')) }}
		<h1>Completati datele de inregistrare pe platforma!</h1>
<hr>
		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>
		
		
		<p>
			{{ Form::label('name', 'Nume Real') }}
			{{ Form::text('name', Input::old('name')) }}
		</p>

		<p>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', Input::old('username')) }}
		</p>
		<p>
			{{ Form::label('email', 'Adresa E-Mail') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</p>

		<p>
			{{ Form::label('password', 'Parola') }}
			{{ Form::password('password') }}
		</p>

				<p>
			{{ Form::label('password1', 'Parola din nou:') }}
			{{ Form::password('password2') }}
		</p>

		
		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}

</body>
</html>