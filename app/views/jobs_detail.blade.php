@extends('layout.jobs_layout')



@section('jobs_content')
<h2>{{$job->titlu}}</h2><hr>

<?php
$m=Session::get('mesaj');

?>
@if(isset($m))
<div class="alert alert-info">  
	<a class="close" data-dismiss="alert">×</a>  
	<strong>Info!</strong>{{Session::get('mesaj')}}  
</div> 
@endif


<?php 

$user=DB::table('users')->where('_id',$job->id_user)->first();
$userEmail=$user['email'];

?>
<p><span>Creat de:</span></p><p>{{$userEmail}}</p><hr>
<p><span>La data de:</span></p><p>{{$job->created_at}}</p><hr>
<p><span>Editat la:</span></p><p>{{$job->edited_at}}</p><hr>
<p><span>Pret:</span></p><p>{{$job->pret}}</p><hr>
<p><span>Deadline:</span></p><p>{{$job->deadline}}</p><hr>
<p><span>Descriere:</span></p><p>{{$job->descriere}}</p><hr>

<?php $url='jobs/'.$job->titlu.'/'.Auth::user()->id; ?>
<a href="{{URL::to($url)}}" class="btn btn-primary">Inscrie-te la acest Job!</a>


@stop