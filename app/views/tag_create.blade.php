
	<div class="page-header">
		<h1>Creaza Tag<small> Daca esti Tare!</small></h1>
	</div>
	
	{{ Form::open(array('action' => 'TagsController@CreateTagForm', 'role' => 'form' ))}}
		<div class="form-group">
		

		
			<label for="name">Nume Tag</label>
			<input type="text" class="form-control" name="name" id="name" />
		</div>
		<div class="form-group">
			<label for="password">Descriere</label>
			<textarea rows="10" class="form-control" name="descriere" id="descriere" ></textarea>
		</div>
		<input type="submit" class="btn btn-primary" name="submit" value="Creeaza" />
	{{Form::close()}}

