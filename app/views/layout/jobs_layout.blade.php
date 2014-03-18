@extends('layout.layout')



@section('content')
	<div class="page-header">
		<h1>Jobs <small>For everyone....</small></h1>
	</div>
	
	<div>
	<div  class="left">
	<h2><small>La treaba!</small></h2>
	
	<nav>
	  <ul class="nav nav-pills nav-stacked span2">
		<li><a href="{{action('JobsController@ShowJobsPage')	  }}">De ce Jobs ?</a></li>
		<li><a href="{{action('JobsController@ShowCreateJobsPage')}}">Creaza Job 	</a></li>
		<li><a href="{{action('JobsController@ShowJobsTable')	  }}">Cauta Job	</a></li>
		<li><a href="{{url('jobs/category/categorie1')	  }}">Job-categ.	</a></li>

	  </ul>
	</nav>
	
	</div>
	<div  class="right">

	@yield('jobs_content')
	
	</div>
	</div>
@stop