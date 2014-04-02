@extends('layout.documents_layout')

@section('documents_content')
	<div class="page-header">
		<h1>Upload <small>and share!</small></h1>
	</div>
	
	{{ Form::open(array('action' => 'DocumentsController@PostCreate', 'files' => true, 'role' => 'form' ))}}
		<div class="form-group">
		
			@if(Session::has('create_errors'))
				<p class="alert alert-info">{{Session::get('create_errors')}}</p>
			@endif
		
			<label for="email">Title</label>
			<input type="text" class="form-control" name="title" id="title" />
		</div>
		<div class="form-group">
			<label for="document">Document</label>
			<input type="file" class="form-control" name="document" id="document" />
		</div>
		<div class="form-group">
			<label for="tags">Tags</label>
			<div rows="1" class="form-control" contenteditable="true" id="inserted_tags"></div>
			<input type="text" class="form-control" id="tags" name="tags" placeholder="Type here to insert tags ...">
			<div id="results"></div>
		</div>
		
		<div class="form-group">
			<label for="descriere">Descriere</label>
			<textarea name="descriere" class="form-control" rows="10" id="descriere_job" ></textarea>
		</div>
		
		<input type="submit" class="btn btn-primary" name="submit" value="Upload" />
	{{Form::close()}}
	<script>
		var availableTags = [];
		
		$.getJSON("{{action('TagsController@GetAllTags')}}", function(data)
		{			
			$.each(data, function(key,val)
			{
				availableTags[key] = new Object();
				availableTags[key].descriere = data[key].descriere;
				availableTags[key].label = data[key].name;
			});
		}).done(function()
		{
			console.log(availableTags);
		});;
	
		$('#tags').autocomplete({
			appendTo: '#results',
			source:availableTags,
			select: function(event,ui)
			{
				selected_value = ui.item.value;
				console.log(selected_value);
				message = "<span class='label label-info'>" + selected_value + "<span class='close-button'> &times; </span></span>";
				
				console.log(message);
				
				$('#inserted_tags').append(message);
				$('#tags').val('');
				
				return false;
			}
		});
	</script>
	
@stop