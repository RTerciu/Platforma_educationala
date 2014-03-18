<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Platform</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
	
			<style>
		div.left {float:left;
				width:20%;
					}
		div.right{float:right;
				width:70%;}
		</style>

	
	<script type="text/javascript" href="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<a href="{{url('/')}}" class="navbar-brand">Home</a>
			</div>
			<div class="navbar-header">
				<a href="{{action('UsersController@ShowSignUp')}}" class="navbar-brand">Sign-Up</a>
			</div>
			<div class="navbar-header">
				<a href="{{action('JobsController@ShowJobsPage')}}" class="navbar-brand">Jobs</a>
			</div>
		</nav>
		
		@yield('content')
	</div>
</body>
</html>
