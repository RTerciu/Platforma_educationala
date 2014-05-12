@extends('layout.documents_layout')



@section('documents_content')

<script  src="{{asset('js/documents_detail.js')}}" ></script>
<link rel="stylesheet" href="{{ asset('css/style_radu.css')}}" type="text/css" media="screen">

<?php
$m=Session::get('mesaj');

?>
@if(isset($m))
<div class="alert alert-info">  
	<a href="javascript:$('.alert-info').toggle();" class="close" data-dismiss="alert">×</a>  
	<strong>Info!</strong>{{Session::get('mesaj')}}  
</div> 
@endif



<h2>{{$document->title}}

<?php $url='/download/document/'.$document->title;
	  $url2='/documents/review/'.$document->id;


 ?>
<a href="{{URL::to($url)}}" class="btn btn-primary">Downloadeaza acest document!</a>  <a href="{{URL::to($url2)}}" class="btn btn-primary">Review pentru document!</a></h2>

<hr>



<?php 

$user=DB::table('users')->where('_id',$document->userID)->first();
$userEmail=$user['email'];

?>
<small><p class="text-right">Adaugat de <strong>{{$userEmail}} </strong> la data de <strong>{{$document->created_at}}</strong><br>
Tag-uri 
@foreach($document->tags as $tag)
<strong>
<?php
$t=Tag::find($tag);
echo $t->getHTMLTag();
?>
</strong>
@endforeach
<br>
Pret: 
@if(isset($document->pret))
    <strong>{{$document->pret}}</strong>
@else 
	<strong>gratuit</strong>
@endif

</p></small>
<hr>


<h3>Cum isi prezinta Creatorul Marfa</h3>
<div class="row">
<div class="col-md-9">{{$document->descriere}}</div>
<div class="col-md-3"><h3>Stats</h3>
Downloads:
<strong>{{$document->nrDownloads}}</strong> persoane <br>
Media evaluatorilor:
<strong>
<?php 
$i=0;
if(!isset($reviews[0]))
		  $mark1=0;
else $mark1=$reviews[$i++]['mark'];
		   	
		 

if(!isset($reviews[1]))
		  $mark2=0;
else $mark2=$reviews[$i++]['mark'];



if(!isset($reviews[2]))		 
			$mark3=0;
else $mark3=$reviews[$i++]['mark'];


if(!$i)
	echo 'N/A';
else 
	echo ($mark1+$mark2+$mark3)/$i;
?>

</strong>

</div>


</div>
<hr>

<h3>Ce zic BO$$i!</h3><br>
<div class="row">
<div class="col-md-4">
@if(isset($reviews[0]))
	<strong>Nota {{$reviews[0]['mark']}}</strong><br>
	<h3>Rezumat</h3>
	{{$reviews[0]['rezumat']}}
	<h3>La ce ajuta </h3>
	{{$reviews[0]['utilitate']}}
	
@else
	Nimic inca!
@endif



</div>
<div class="col-md-4">
@if(isset($reviews[1]))
	<strong>Nota {{$reviews[1]['mark']}}</strong><br>
	<h3>Rezumat</h3>
	{{$reviews[1]['rezumat']}}
	<h3>La ce ajuta </h3>
	{{$reviews[1]['utilitate']}}
	
@else
	Nimic inca!
@endif




</div>
<div class="col-md-4">
@if(isset($reviews[2]))
	<strong>Nota {{$reviews[2]['mark']}}</strong><br>
	<h3>Rezumat</h3>
	{{$reviews[2]['rezumat']}}
	<h3>La ce ajuta </h3>
	{{$reviews[2]['utilitate']}}
	
@else
	Nimic inca!
@endif


</div>
</div>

<div class="row" id="review_grades">

	<div class="col-md-4">
	@if($downloaded&&isset($reviews[0]))
	
	{{ Form::open(array('action' => 'DocumentsController@GradeReview', 'role' => 'form' ))}}
	
		<input type="hidden" name="docID" value="{{$document->_id}}">	
		<input type="hidden" name="docName" value="{{$document->title}}">
		<input type="hidden" name="reviewID" value="{{$reviews[0]['_id']}}">
	
	
		<h3>Da o nota review-ului</h3>
		<div class="form-group">
			<p class="alert alert-success" id="mark_label0">Va rugam alegeti un rating de la 1 la 100</p>
			<input type="range" min=1 max=100 value=0 class="form-control" name="mark" id="mark0">
		</div>
		
		
		<input type="submit" class="btn btn-primary" id="button0" name="submit" value="Trimite FeedBack Review" disabled/>
	
	{{Form::close()}}
	@endif

	</div>
	
	<div class="col-md-4">
	@if($downloaded&&isset($reviews[1]))
	
	{{ Form::open(array('action' => 'DocumentsController@GradeReview', 'role' => 'form' ))}}
	
		<input type="hidden" name="docID" value="{{$document->_id}}">	
		<input type="hidden" name="docName" value="{{$document->title}}">
		<input type="hidden" name="reviewID" value="{{$reviews[1]['_id']}}">
		
	
		<h3>Da o nota review-ului</h3>
		<div class="form-group">
			<p class="alert alert-success" id="mark_label1">Va rugam alegeti un rating de la 1 la 100</p>
			<input type="range" min=1 max=100 value=0 class="form-control" name="mark" id="mark1">
		</div>
		
		<input type="submit" class="btn btn-primary" id="button1" name="submit" value="Trimite FeedBack Review" disabled/>
	
	{{Form::close()}}
	@endif
		
	</div>
	
	<div class="col-md-4">
	@if($downloaded&&isset($reviews[2]))
	
	{{ Form::open(array('action' => 'DocumentsController@GradeReview', 'role' => 'form' ))}}
	
		<input type="hidden" name="docID" value="{{$document->_id}}">	
		<input type="hidden" name="docName" value="{{$document->title}}">
		<input type="hidden" name="reviewID" value="{{$reviews[2]['_id']}}">		
		
		<h3>Da o nota review-ului</h3>
		<div class="form-group">
			<p class="alert alert-success" id="mark_label2">Va rugam alegeti un rating de la 1 la 100</p>
			<input type="range" min=1 max=100 value=0 class="form-control" name="mark" id="mark2">
		</div>
		
		<input type="submit" class="btn btn-primary"  id="button2" name="submit" value="Trimite FeedBack Review" disabled/>
	
	{{Form::close()}}
	@endif

	</div>
</div>













@stop