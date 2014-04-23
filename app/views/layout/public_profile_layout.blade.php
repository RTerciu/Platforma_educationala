@extends('layout.layout')



@section('content')
<script  src="{{asset('js/user_profile.js')}}" ></script>
	<div class="page-header">
		<h1> Profilul Public<small> sa-l cunosti pe om ...</small></h1>
	</div>
	
	<div class="row">
	
	<div  class="col-md-2">
		<h3>{{$user['username']}}</h3>
		<img width="100%" src="{{URL::to($user->avatar)}}"/>
		<p>S-a alaturat comunitatii la
		<strong>{{$user->created_at}}</strong>
		</p>
	
		<h3>Sa fim prieteni!</h3>
		@if(Auth::check())
		    
		<p id="form_errors"></p>
		
		{{Form::open(array('action' => 'MessageController@PostMessage', 'role' => 'form' ))}}
		<input type="hidden" id="userTo" name="userTo" value="{{$user->_id}}" >	
		<input type="hidden" id="userFrom" name="userFrom" value="{{Auth::user()->id}}" >
		
		
		<div class="form-group">
			<label for="subiect">Subiectul mesajului</label>
			<input type="text" class="form-control" name="subiect" id="subiect">
		</div>
		
		<div class="form-group">
			<label for="mesaj">Ce vrei sa ii spui ?</label>
			<textarea name="mesaj" class="form-control" rows="10" id="mesaj" ></textarea>
		</div>
		
		<div class="btn btn-primary" id="send_message" >Trimite Mesajul</div>
		{{Form::close()}}
			
			
			
			
		@else
			Sign-In pentru a putea trimite mesaje
		@endif		
	</div>
	<div  class="col-md-10">
		<nav>
				<ul class="nav nav-pills nav-justified">
				  <li><a href="{{URL::to('profile/'.$user->username)}}">Despre EL Hombre</a></li>
				  <li><a href="{{URL::to('profile/docsStats/'.$user->username)}}">Doc Stats</a></li>
				  <li><a href="{{URL::to('profile/jobsStats/'.$user->username)}}">Job Stats</a></li>
				  <li><a href="{{URL::to('profile/communityStats/'.$user->username)}}">Community Stats</a></li>
				</ul>
		</nav>	
	<hr>
		@yield('profile')
	</div>
	</div>
@stop