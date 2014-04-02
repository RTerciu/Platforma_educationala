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
				<input type="password" class="form-control" name="password" id="password" value=""/>
			</div>
		</div>
		
		
			 <div class="col-md-4">
				<div class="thumbnail">
				  <img src="{{URL::to(Auth::user()->avatar)}}" alt="Avatarul tau">
				  <div class="caption">
					<div class="form-group">
						<label for="avatar">Avatar</label>
						<p><input type="file" class="form-control" name="avatar" id="avatar" /></p>
						<input type="hidden" name="avatar_check" id="avatar_check">
					</div>
				  </div>
				</div>
			  </div>
			</div>
			
		
		
	{{Form::close()}}
	@else
		@Redirect::to('/')
	@endif
	
	<script>
		$(document).ready(function()
		{
		
			var number_inputs = $('input').length;
			var number_buttons = $('button').length;
			
			console.log('Butoane: ' + number_inputs + ' Inputs: ' + number_buttons );
		
			$('input').each(function(index_input)
			{
				var original_value = $(this).val();
				
				$(this).keydown(function()
				{
					console.log('Inputul ' + index_input + ' schimbat: ' + $(this));
					
					$('button').each(function(index_button)
					{
						if(index_input - 1 == index_button)
						{
							console.log('Butonul ' + index_button + ' schimbat: ' + $(this));
							$(this).removeAttr('disabled');
						}
					});
				});
			});
			
			$('button').click(function(data)
			{
				var inputs = new Object();
			
				$('input').each(function(index)
				{
					if($(this).attr('type') == 'file')
					{
						alert('File check');
						$($(this).attr('class') + '_check').val('1');
					}
					
					inputs[$(this).attr('name')] = $(this).val();
					
					console.log(inputs);
				});
				
				var url = "{{URL::to('/users/'.Auth::user()->username)}}";
				$.post(url,inputs);
			});
		});
	</script>
	
@stop

