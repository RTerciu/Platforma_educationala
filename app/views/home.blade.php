@extends('layout.layout')

@section('content')

	@if(Session::has('signout_notice'))
	
		<p class="alert alert-success">{{Session::get('signout_notice')}}</p>
	
	@else
	
		<p class="alert alert-info"> Welcome to our <i>Platform</i></p>
	
	@endif
	
	



<div id="menu">
	
	<div id="buttons">
		<div id="b1" ></div>
		<div id="b2" ></div> 
		<div id="b3" ></div>
	</div>
	
	<div id="bannere">&nbsp;</div>


	

	<div id="dot">
		<div id="dot1"></div>
		<div id="dot2"></div>
		<div id="dot3"></div>
	</div>

</div>
	

	
@stop