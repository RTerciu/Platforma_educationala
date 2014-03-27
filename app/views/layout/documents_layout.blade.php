@extends('layout.layout')



@section('content')
	<div class="page-header">
		<h1>Carti <small>Te fac neprost...</small></h1>
	</div>
	
	<div class="row">
	
	<div  class="col-md-2">
	<h2><small>Hai sa cautam!</small></h2>
	
	<nav>
	  <ul class="nav nav-pills nav-stacked span2">
		<li><a href="{{action('DocumentsController@ShowMainPage')	  }}">Ce documente?</a></li>
		<li><a href="{{action('DocumentsController@GetCreate')}}">Upload Documente	</a></li>
		<li><a href="{{action('DocumentsController@GetList')}}">Lista Documente</a></li>		

	  </ul>
	</nav>
	
	</div>
	<div  class="col-md-10">

	@yield('documents_content')
	
	</div>
	</div>
@stop