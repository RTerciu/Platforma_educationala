@extends('layout.documents_layout')



@section('documents_content')

<?php
$m=Session::get('mesaj');

?>
@if(isset($m))
<div class="alert alert-info">  
	<a href="javascript:$('.alert-info').toggle();" class="close" data-dismiss="alert">×</a>  
	<strong>Info!</strong>{{Session::get('mesaj')}}  
</div> 
@endif



<h2>Review pentru documentul <strong>{{$document->title}} </strong>
</h2>

<hr>



<?php 

$user=DB::table('users')->where('_id',$document->userID)->first();
$userEmail=$user['email'];

?>
<small><p class="text-right">Adaugat de <strong>{{$userEmail}} </strong> la data de <strong>{{$document->created_at}}</strong><br>
Categorii <strong>{{$document->category}}</strong>
</p></small>
<hr>


<h3>Descriere utilizatorului:</h3><p>{{$document->descriere}}</p><hr>
<h3>Va rugam completati review-ul</h3>
<br>
{{ Form::open(array('action' => 'DocumentsController@PostReview', 'role' => 'form' ))}}
		<div class="form-group">
        <label for="mark">Va rugam alegeti un rating de la 1 la 100</label>
		<input type=range min=1 max=100 value=50 class="form-control" id="mark">
		</div>
		
		<div class="form-group">
			<label for="descriere">Rezumat</label>
			<textarea  name="rezumat" class="form-control" rows="10" id="rezumat"></textarea>
		</div>
		
		<div class="form-group">
			<label for="descriere">Motivatie Utilitate</label>
			<textarea name="utilitate" class="form-control" rows="10" id="utilitate"></textarea>
		</div>
		
		<input type="submit" class="btn btn-primary" name="submit" value="Upload" />
{{Form::close()}}
<br>

	<script>
        tinymce.init({selector:'textarea'});

	</script>

@stop