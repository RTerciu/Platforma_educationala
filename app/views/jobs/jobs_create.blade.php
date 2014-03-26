@extends('layout.jobs_layout')



@section('jobs_content')
<h2>Creaza Job</h2><hr>

	{{ Form::open(array('action' => 'JobsController@ProcessCreateJob', 'files' => true, 'role' => 'form' ))}}
		<div class="form-group">
			<label for="titlu">Titlu</label>
			<input type="text" class="form-control" name="titlu" id="titlu" />
		</div>
		<div class="form-group">
			<label for="categorie">Categorie</label>
			<input type="text" class="form-control" name="categorie" id="categorie" />
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
@stop