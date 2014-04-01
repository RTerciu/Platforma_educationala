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
Categorii <strong>{{$document->category}}</strong>
</p></small>
<hr>


<h3>Descriere:</h3><p>{{$document->descriere}}</p><hr>

<p>Au downloadat acest document:
<strong>{{$document->nrDownloads}}</strong> persoane </p>





@stop