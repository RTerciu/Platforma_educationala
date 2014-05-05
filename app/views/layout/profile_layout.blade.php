@extends('layout.layout')



@section('content')
	<div class="page-header">
		<h1> Datele tale<small>, daca ai uitat ...</small></h1>
	</div>
	
	<div class="row">
	
	<div  class="col-md-2">
		<nav>
		  <ul class="nav nav-pills nav-stacked">
		  
			<li><a href="{{URL::to('/users/'.Auth::user()->username)}}">Profil</a></li>
			<li><a href="{{action('JobsController@ShowMyJobsApplied')}}">Job-uri licitate</a></li>
			<li><a href="{{action('JobsController@ShowMyJobsCreated')}}">Job-uri create</a></li>
			<li><a href="{{action('DocumentsController@DocumentsDownloaded')}}">Docs Down</a></li>
			<li><a href="{{action('DocumentsController@DocumentsUploaded')}}">Docs Up</a></li>
			<li><a href="{{URL::to('mysignins')}}">Evidenta Logarilor</a></li>
		 
		  </ul>
		</nav>
	</div>
	<div  class="col-md-10">
		@yield('profile')
	</div>
	</div>
@stop