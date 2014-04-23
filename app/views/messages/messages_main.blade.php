@extends('layout.messages_layout')



@section('messages_content')
<script  src="{{asset('js/user_profile.js')}}" ></script>
<h2>Scrie un mesaj nou</h2><hr>

		<p id="form_errors"></p>
		
		{{Form::open(array('action' => 'MessageController@PostMessage', 'role' => 'form' ))}}
		<div class="form-group">
			<label for="subiect">Cui vrei sa ii scrii</label>
			<input type="text" class="form-control" name="catre" id="catre">
		</div>
		<div id="contacte"></div>
		<input type="hidden" id="userTo" name="userTo">	
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

		
		
	
		
@stop