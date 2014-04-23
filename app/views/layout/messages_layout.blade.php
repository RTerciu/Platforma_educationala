@extends('layout.layout')



@section('content')
	<div class="page-header">
		<h1>Mesaje <small>Varu` te rezolva...</small></h1>
	</div>
	
	<div class="row">
	
	<div  class="col-md-2">
	<h2><small>Amicii de betie!</small></h2>
	
	<nav>
	  <ul class="nav nav-pills nav-stacked span2">
		<li class="active"><a href="{{action('MessageController@GetMessagesPage')}}" >Mesaj nou</a></li>
		
		{{
		
		Message::GetListOfPeople(Auth::user()->id);
		
		}}	


		
		

	  </ul>
	</nav>
	
	</div>
	<div  class="col-md-10">

	@yield('messages_content')
	
	</div>
	</div>
@stop