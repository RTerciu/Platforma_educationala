<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Platform</title>
	
	<link rel="stylesheet" type="text/css" href="css/style_register.css" media="all" />
	
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.inputfocus-0.9.min.js"></script>
    <script type="text/javascript" src="js/jquery.main.js"></script>
	
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>

	
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
								<a href="{{URL::to('/documents')}}" class="navbar-brand">Documente</a>
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
							
								<li ><a href="{{url('messages')}}" ><span class="glyphicon glyphicon-envelope"></span><span class="badge badge-info">0</span></a></li>
								<li class="dropdown">

									<a href="javascript:$('.dropdown-menu').toggle();"  class="dropdown-toggle" data-toggle="dropdown"><img src="{{URL::to(Auth::user()->avatar)}}" class="img-thumbnail" width="50" height="50">{{Auth::user()->email}} <b class="caret"></b></a>


									<ul class="dropdown-menu">
										<li>
											<a href="{{URL::to('/users/'.Auth::user()->username)}}">Settings</a>
										</li>
										<li>
											<a href="{{URL::to('/profile/'.Auth::user()->username)}}">Public Profile</a>
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
			
		<div id="container">
				<form action="#" method="post">
			
					<!-- #first_step -->
					<div id="first_step">
						<h1>Inscrie-te pe <span>Platforma!</span> Aceasta este identitatea ta!</h1>

						<div class="form">
							<input type="text" name="username" id="username" value="username" />
							<label for="username">Cel putin 4 caractere, cifre sau litere.</label>
							
							<input type="password" name="password" id="password" value="password" />
							<label for="password">Parola, cu litere si cifre</label>
							
							<input type="password" name="cpassword" id="cpassword" value="password" />
							<label for="cpassword">Parola din nou!Trebuie sa completezi acest camp identic cu cel de mai sus pentru a putea continua!</label>
						</div>      <!-- clearfix --><!-- /clearfix -->
						<input class="submit" type="submit" name="submit_first" id="submit_first" value="" />
					</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


					<!-- #second_step -->
					<div id="second_step">
						<h1>Acum spune-ne <span>Cine </span> esti!</h1>

						<div class="form">
							<input type="text" name="firstname" id="firstname" value="first name" />
							<label for="firstname">Preumele dumneavoastra? </label>
							<input type="text" name="lastname" id="lastname" value="last name" />
							<label for="lastname">Prenumele dumneavoastra? </label>
							<input type="text" name="email" id="email" value="email address" />
							<label for="email">Adresa de email? Asa va putem contacta mai usor! </label>                    
						</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
						<input class="submit" type="submit" name="submit_second" id="submit_second" value="" />
					</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


					<!-- #third_step -->
					<div id="third_step">
						<h1>Daca nu e cu suparare <span>Detalii </span> mai precise...</h1>

						<div class="form">
							<select id="age" name="age">
								<option> 0 - 17</option>
								<option>18 - 25</option>
								<option>26 - 40</option>
								<option>40+</option>
							</select>
							<label for="age">Varsta dumneavoastra? </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->

							<select id="gender" name="gender">
								<option>Masculin</option>
								<option>Feminin</option>
							</select>
							<label for="gender">Genul dumneavoastra? </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
							
							<select id="country" name="country">
								<option>Romania</option>
								<option>UE</option>
								<option>America</option>
								
							</select>
							<label for="country">Unde va putem gasi? </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
							
						</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
						<input class="submit" type="submit" name="submit_third" id="submit_third" value="" />
						
					</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
					
					
					<!-- #fourth_step -->
					<div id="fourth_step">
						<h1>Sunt informatiile <span>corecte?</span> Daca da apasa Send!</h1>

						<div class="form">
							
							<table>
								<tr><td>Username</td><td></td></tr>								
								<tr><td>Email</td><td></td></tr>
								<tr><td>Nume</td><td></td></tr>
								<tr><td>Varsta</td><td></td></tr>
								<tr><td>Gen</td><td></td></tr>
								<tr><td>Zona</td><td></td></tr>
							</table>
						</div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
						<input class="send submit" type="submit" name="submit_fourth" id="submit_fourth" value="" />            
					</div>
					
				</form>
		</div>
			<div id="progress_bar">
				<div id="progress"></div>
				<div id="progress_text">0% Complete</div>
			</div>
	</div>
</body>
</html>