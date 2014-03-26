@extends('layout.profile_layout')

@section('profile')

	@if(Auth::check())
		{{ Form::open(array('action' => 'UsersController@PostProfile', 'files' => true, 'role' => 'form' ))}}
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email" id="email" />
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" name="username" id="username" />
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" id="password" />
		</div>
		<div class="form-group">
			<label for="avatar">Avatar</label>
			<input type="file" class="form-control" name="avatar" id="avatar" />
		</div>
		<input type="submit" class="btn btn-primary" name="submit" value="Register" />
	{{Form::close()}}
	@else
		@Redirect::to('/')
	@endif
@stop