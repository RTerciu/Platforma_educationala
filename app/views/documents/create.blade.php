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
			<input class="form-control" name="tags" id="tags">
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
			source:availableTags
		});
	</script>
	
@stop