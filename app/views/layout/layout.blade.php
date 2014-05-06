<!doctype html>
<html ng-app lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Platform</title>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" href="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/home_buttons.js')}}"></script>
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	<script src="{{asset('js/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{asset('js/d3.min.js')}}"></script>
	<script src="{{asset('js/d3.chart.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js">
	<script>
        tinymce.init({selector:'textarea'});
	</script>
	
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/style_home.css')}}" type="text/css" media="screen">
	<link rel="stylesheet" href="{{ asset('css/style_document.css')}}" type="text/css" media="screen">
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
					<li>
							<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
							  <input id="main_search" type="text" class="form-control" placeholder="Search">
							</div>
							<div style="position:absolute;width:86%;margin:0 auto;z-index:999;" id="results_main_search">
								<div id="docs" style="clear:both;display:none;">
									<div style="height:100%;display:block;background:whitesmoke;" class="category">
										<span style="display:block;float:left;padding:5px;color:grey;font-weight:bold;">Docs</span>
										<ul id="docs_list" style="margin:0;width:70%;margin-left:30%;" class="list-group">
										</ul>
									</div>
								</div>
								<div id="jobs" style="clear:both;display:none;">
									<div style="height:100%;display:block;background:whitesmoke;" class="category">
										<span style="display:block;float:left;padding:5px;color:grey;font-weight:bold;">Jobs</span>
										<ul id="jobs_list" style="margin:0;width:70%;margin-left:30%;" class="list-group">
										</ul>
									</div>
								</div>
							</div>
							</form>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
					
						<li><a href="{{url('messages')}}" ><span class="glyphicon glyphicon-envelope"></span><span class="badge badge-info">0</span></a></li>
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
		
		@yield('content')
	</div>
	<script>
		$('#main_search').keyup(function()
		{		
			availableDocs = [];
			availableJobs = [];
			
			searchString = $('#main_search').val();
			
			if(searchString)
			{
				search("{{URL::to('search/documents')}}/" + searchString).done(function(returnData)
				{
					availableDocs = returnData.data;
					
					if(availableDocs.length != 0)
					{
						$("#docs").css("display","block");
						
						$("#docs_list").html('');
						
						$.each(availableDocs,function(index,value)
						{
							var url_location = '{{url("documents/'+value.title+'")}}';
							$("#docs_list").append('<li style="font-size:12px;" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;<a href="'+url_location+'">' + value.title + '</a></li>');						
						});
					}
					else
					{
						$("#docs").css("display","block");
						$("#docs_list").html('<li style="font-size:12px;" class="list-group-item">Nici un rezultat.</li>');
					}
				});
				
				
				search("{{URL::to('search/joburi')}}/" + searchString).done(function(returnData)
				{
					availableJobs = returnData.data;
					
					if(availableJobs.length != 0)
					{
						$("#jobs").css("display","block");
						
						$("#jobs_list").html('');
						
						$.each(availableJobs,function(index,value)
						{
							var url_location = '{{url("jobs/'+value.titlu+'")}}';
							$("#jobs_list").append('<li style="font-size:12px;" class="list-group-item"><span class="glyphicon glyphicon-wrench"></span>&nbsp;<a href="'+url_location+'">' + value.titlu + '</a></li>');						
						});
					}
					else
					{
						$("#jobs").css("display","block");
						$("#jobs_list").html('<li style="font-size:12px;" class="list-group-item">Nici un rezultat.</li>');
					}
				});
			}
			else
			{
				$("#jobs").css("display","none");
				$("#docs").css("display","none");
			}
		});
		
	</script>
</body>
</html>
