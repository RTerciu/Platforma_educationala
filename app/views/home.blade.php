@extends('layout.layout')

@section('content')

	@if(Session::has('signout_notice'))
	
		<p class="alert alert-success">{{Session::get('signout_notice')}}</p>
	
	@else
	
		<p class="alert alert-info"> Welcome to our <i>Platform</i></p>
	
	@endif
	
@stop