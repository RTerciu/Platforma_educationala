@extends('layout.layout')



@section('content')
	<div class="page-header">
		<h1> Datele tale<small>, daca ai uitat ...</small></h1>
	</div>
	
	<div class="row">
	
	<div  class="col-md-2">
		<nav>
		  <ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="{{action('JobsController@ShowJobsPage')	  }}">Profil</a></li>
			<li><a href="{{action('JobsController@ShowCreateJobsPage')}}">Job-uri curente</a></li>
			<li><a href="{{action('JobsController@ShowJobsTable')	  }}">Job-urile tale</a></li>
		  </ul>
		</nav>
	</div>
	<div  class="col-md-10">
		@yield('profile')
	</div>
	</div>
@stop