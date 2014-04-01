<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Platform</title>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" href="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home_buttons.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.slides.min.js')}}"></script>
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	
	
	
	<script>
        tinymce.init({selector:'textarea#descriere_job'});
		
		$(document).ready(function(data)
		{
			$('.button-1').hover(function(data)
			{
				$(this).children('img').fadeOut(100,function()
				{
					$(this).attr('src',"{{asset('img/buton_hover/bulina_banner_1.png')}}");
					$(this).fadeIn(50);
				});
			},
			function(data)
			{
				$(this).children('img').attr('src',"{{asset('img/buton_inactiv/bulina_banner_1.png')}}");
			}
			);
			
			$('.button-1').click(function()
			{
				$('a[data-slidesjs-item=0]').trigger('click');
				$(this).children('img').fadeOut(100,function()
				{
					$(this).attr('src',"{{asset('img/buton_activ/bulina_banner_1.png')}}");
					$(this).fadeIn(50);
				});
			});
			
			$('.button-2').hover(function(data)
			{
				$(this).children('img').fadeOut(100,function()
				{
					$(this).attr('src',"{{asset('img/buton_hover/bulina_banner_2.png')}}");
					$(this).fadeIn(50);
				});
			},
			function(data)
			{
				$(this).children('img').attr('src',"{{asset('img/buton_inactiv/bulina_banner_2.png')}}");
			}
			);
			
			$('.button-2').click(function()
			{
				$('a[data-slidesjs-item=1]').trigger('click');
				$(this).children('img').fadeOut(100,function()
				{
					$(this).attr('src',"{{asset('img/buton_activ/bulina_banner_2.png')}}");
					$(this).fadeIn(50);
				});
			});
			
			$('.button-3').hover(function(data)
			{
				$(this).children('img').fadeOut(100,function()
				{
					$(this).attr('src',"{{asset('img/buton_hover/bulina_banner_3.png')}}");
					$(this).fadeIn(50);
				});
			},
			function(data)
			{
				$(this).children('img').attr('src',"{{asset('img/buton_inactiv/bulina_banner_3.png')}}");
			});
			
			$('.button-3').click(function()
			{
				$('a[data-slidesjs-item=2]').trigger('click');
				$(this).children('img').fadeOut(100,function()
				{
					$(this).attr('src',"{{asset('img/buton_activ/bulina_banner_3.png')}}");
					$(this).fadeIn(50);
				});
			});
		});
		
		$(function(){
		  $("#slides").slidesjs({
			width: 1920,
			height: 620,
			start: 2,
			navigation: 
			{
			  effect: "fade"
			},
			pagination: 
			{
			  effect: "fade"
			},
			effect: 
			{
			  fade: 
			  {
			  	speed: 400
			  }
			}
		  });
		});
	</script>
	
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css" media="screen"/>
	<link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css" media="screen">
	<link rel="stylesheet" href="{{ asset('css/style_radu.css')}}" type="text/css" media="screen">
	
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="{{URL::to('/')}}" class="navbar-brand">Platform Educationala</a>
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a href="{{URL::to('/documents/create')}}" class="navbar-brand">Docs</a>
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

							<a href="javascript:$('.dropdown-menu').toggle();"  class="dropdown-toggle" data-toggle="dropdown"><img src="{{URL::to(Auth::user()->avatar)}}" class="img-thumbnail" width="50" height="50">{{Auth::user()->email}} <b class="caret"></b></a>


							<ul class="dropdown-menu">
								<li>
									<a href="{{URL::to('/users/'.Auth::user()->username)}}">Profile</a>
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
		</div>		
		
		<div class="row">
			<div class="col-md-12">
				<div class="main-buttons">
					<div class="button button-1">
						<img src="{{asset('img/buton_inactiv/bulina_banner_1.png')}}">
					</div>
					
					<div class="button button-2">
						<img src="{{asset('img/buton_inactiv/bulina_banner_2.png')}}">
					</div>
					
					<div class="button button-3">
						<img src="{{asset('img/buton_inactiv/bulina_banner_3.png')}}">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div id="slides" class="col-md-12" style="padding:0px">
				<img src="{{asset('img/banner_st.jpg')}}">
				<img src="{{asset('img/banner_principal.jpg')}}">
				<img src="{{asset('img/banner_dr.jpg')}}">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3" style="margin-top: -23%;z-index:666;">
				<div class="search1">
					 <input type="text" class="input1" id="search1" placeholder="Cauta ce iti doresti..."/>
					 <div class="post_job" id="post_job"></div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-2" id="doc_recent">Docuri recente</div>
			<div class="col-md-2" id="doc_recommended">Docuri recomandate</div>
			<div class="col-md-2" id="doc_results">O vrajeala ieftina</div>
			<div class="col-md-2" id="job_results">O alta vrajeala ieftina</div>
			<div class="col-md-2" id="job_recommended">Joburi recomandate</div>
			<div class="col-md-2" id="job_recent">Joburi recente</div>
		</div>
			
		
		@yield('content')

</div>
</body>
</html>
