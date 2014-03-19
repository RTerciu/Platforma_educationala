<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Platform</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" href="{{asset('js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
	
	
				<style>
		div.left {float:left;
				width:15%;
					}
		div.right{float:right;
				width:80%;}
		</style>
	
	
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="{{URL::to('/')}}" class="navbar-brand">Platform Educationala</a>
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a href="{{URL::to('/documents/create')}}" class="navbar-brand">Upload document</a>
					</li>
					
					<li>
						<a href="{{URL::to('/jobs')}}" class="navbar-brand">Joburi</a>
					</li>
					
					<li>
						<a href="#" class="navbar-brand">Contact</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->email}} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Profile</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="{{action('UsersController@SignOut')}}">Sign out</a>
								</li>
							</ul>
						</li>
					@else
						<li>
							<a href="{{action('UsersController@ShowSignUp')}}">Sign up</a>
						</li>
						<li>
							<a href="{{action('UsersController@ShowSignIn')}}">Sign in</a>
						</li>
					@endif
				</ul>
			</div>
		</nav>
		
		@yield('content')
	</div>
</body>
</html>
