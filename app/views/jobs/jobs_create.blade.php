@extends('layout.jobs_layout')

@section('jobs_content')


<h2 class="text-left">Creaza Job</h2>


<?php
$m=Session::get('mesaj');

?>
@if(isset($m))
<div class="alert alert-warning">  
	<a href="javascript:$('.alert-warning').toggle();" class="close" data-dismiss="alert">×</a>  
	<strong>Info!</strong>{{Session::get('mesaj')}}  
</div> 
@endif

	{{ Form::open(array('action' => 'JobsController@ProcessCreateJob', 'files' => true, 'role' => 'form' ,'id'=>'jobs' ))}}
		<div class="form-group">
			<label for="titlu">Titlu</label>
			<input type="text" class="form-control" name="titlu" id="titlu" />
		</div>
		<div class="form-group">
			<label for="tags">Tags</label>
			<div class="form-control" id="inserted_tags"></div>
			<input type="text" class="form-control" id="tags" name="tags" placeholder="Type here to insert tags ...">
			<input type="hidden" name="tags" id="tags_input">
			<div id="results"></div>
		</div>
		
		
		<div class="form-group">
			<label for="pret">Pret</label>
			<input type="number"  class="form-control" name="pret" id="pret" min="0" max="100"/>
		</div>
		
		
		
		<div class="form-group">
			<label for="pret">Data Deadline</label>
			<input type="date" class="form-control" name="deadline" id="deadline">
		</div>
		
		<div class="form-group">
			<label for="descriere">Descriere</label>
			<textarea name="descriere" class="form-control" rows="10" id="descriere_job" ></textarea>
		</div>
		
		
		<input type="submit" class="btn btn-primary" name="submit" value="Creeaza" />
	{{Form::close() }}
	
	<script>
		autoCompleteTags('#jobs','{{action('TagsController@GetAllTags')}}');
	</script>
	
	
@stop