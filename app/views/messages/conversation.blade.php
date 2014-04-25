@extends('layout.messages_layout')



@section('messages_content')
<link  rel="stylesheet" href="{{asset('css/stil_mesaje.css')}}"/>
<script  src="{{asset('js/user_profile.js')}}" ></script>

<h2>Mesaje</h2><hr>

<div class="row">
	<div class="col-md-8">
<?php

$userLogged=Auth::user()->id;
foreach($mesaje as $mesaj)
	if($mesaj->userTo==$userLogged)	
		echo '<div class="mesaj_trimis"><strong>Subiect</strong> '.$mesaj->subject.'<hr> <strong>Mesaj </strong>'.$mesaj->mesaj.'</div>';
	else
		echo '<div class="mesaj_primit"><strong>Subiect</strong> '.$mesaj->subject.'<hr> <strong>Mesaj </strong>'.$mesaj->mesaj.'</div>';



?>
	
	
	
	</div>
	<div class="col-md-4">

		<p id="form_errors"></p>
		
		{{Form::open(array('action' => 'MessageController@PostMessage', 'role' => 'form' ))}}
		<input type="hidden" id="userTo" name="userTo" value="{{$userID}}" >	
		<input type="hidden" id="userFrom" name="userFrom" value="{{Auth::user()->id}}" >
		
		
		<div class="form-group">
			
			<input type="text" class="form-control" name="subiect" id="subiect" placeholder="Subiectul Mesajului">
		</div>
		
		<div class="form-group">
		
			<textarea name="mesaj" class="form-control" rows="10" id="mesaj" placeholder="Scrie aici mesajul tau..."></textarea>
		</div>
		
		<div class="btn btn-primary" id="send_message" >Trimite Mesajul</div>
		{{Form::close()}}
	</div>
</div>		
@stop