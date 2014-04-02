@extends('layout.documents_layout')



@section('documents_content')
<script  src="{{asset('js/review_add.js')}}" ></script>
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
		<input type="hidden" name="docID" value="{{$document->_id}}">	
		<input type="hidden" name="docName" value="{{$document->title}}">	
		<div class="form-group">
        <p class="alert alert-info" id="mark_label">Va rugam alegeti un rating de la 1 la 100</p>
		<input type="range" min=1 max=100 value=50 class="form-control" name="mark" id="mark">
		</div>
		
		<div class="form-group"> 	
			<label for="descriere">Rezumat</label>
			<textarea  name="rezumat" class="form-control" rows="10" id="rezumat"></textarea>
		</div>
		
		<div class="form-group">
			<label for="descriere">Motivatie Utilitate</label>
			<textarea name="utilitate" class="form-control" rows="10" id="utilitate"></textarea>
		</div>
		
		<input type="submit" class="btn btn-primary" name="submit" value="Trimite Review" disabled/>
{{Form::close()}}
<br>

	<script>
        tinymce.init({selector:'textarea',
					setup : function(editor) {
						editor.on("keyup", function(){
						
						
						var length1,length2;

						length1=tinyMCE.get('rezumat').getContent().length;
						length2=tinyMCE.get('utilitate').getContent().length;
						
						if(length1>50&&length2>50)
						  $("input[type=submit]").removeAttr('disabled');
						else
						  $("input[type=submit]").attr('disabled','disabled');
						
						});
					
					
					}
					
			});

	</script>

@stop