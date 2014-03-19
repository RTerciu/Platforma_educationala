@extends('layout.layout')

@section('content')
	<div class="page-header">
		<h1>Upload <small>and share!</small></h1>
	</div>
	
	{{ Form::open(array('action' => 'DocumentsController@PostCreate', 'files' => true, 'role' => 'form' ))}}
		<div class="form-group">
		
			@if(Session::has('create_errors'))
				<p class="alert alert-danger">{{Session::get('create_errors')}}</p>
			@endif
		
			<label for="email">Title</label>
			<input type="text" class="form-control" name="title" id="title" />
		</div>
		<div class="form-group">
			<label for="document">Document</label>
			<input type="file" class="form-control" name="document" id="document" />
		</div>
		<div class="form-group">
			<label for="email">Category</label>
			<textarea class="form-control" name="category" id="category"></textarea>
		</div>
		<input type="submit" class="btn btn-primary" name="submit" value="Upload" />
	{{Form::close()}}
@stop