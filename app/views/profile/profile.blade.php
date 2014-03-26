@extends('layout.profile_layout')

@section('profile')

	@if(Auth::check())
		{{ Form::open(array('action' => 'UsersController@PostProfile', 'files' => true, 'role' => 'form' ))}}
		<div class="form-group">
			<label for="email">Email</label>
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default" tabindex="-1" disabled>Save</button>
				</div>
				<input type="text" class="form-control" name="email" id="email" value="{{Auth::user()->email}}"/>
			</div>
		</div>
		
		<div class="form-group">
			<label for="username">Username</label>
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default" tabindex="-1" disabled>Save</button>
				</div>
				<input type="text" class="form-control" name="username" id="username" value="{{Auth::user()->username}}"/>
			</div>	
		</div>
		
		<div class="form-group">
			<label for="password">Password</label>
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default" tabindex="-1" disabled>Save</button>
				</div>
				<input type="password" class="form-control" name="password" id="password" value="{{Auth::user()->password}}"/>
			</div>
		</div>
		
		
			 <div class="col-md-4">
				<div class="thumbnail">
				  <img src="{{URL::to(Auth::user()->avatar)}}" alt="Avatarul tau">
				  <div class="caption">
					<div class="form-group">
						<label for="avatar">Avatar</label>
						<p><input type="file" class="form-control" name="avatar" id="avatar" /></p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		
		
	{{Form::close()}}
	@else
		@Redirect::to('/')
	@endif
@stop