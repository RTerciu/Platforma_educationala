@extends('layout.jobs_layout')



@section('jobs_content')

<?php
$m=Session::get('mesaj');

?>
@if(isset($m))
<div class="alert alert-info">  
	<a href="javascript:$('.alert-info').toggle();" class="close" data-dismiss="alert">×</a>  
	<strong>Info!</strong>{{Session::get('mesaj')}}  
</div> 
@endif



<h2>{{$job->titlu}}

<?php $url='jobs/'.$job->titlu.'/'.Auth::user()->id; ?>
<a href="{{URL::to($url)}}" class="btn btn-primary">Inscrie-te la acest Job!</a></h2>

<hr>



<?php 

$user=DB::table('users')->where('_id',$job->id_user)->first();
$userEmail=$user['email'];

?>
<small><p class="text-right">Adaugat de <strong>{{$userEmail}} </strong> la data de <strong>{{$job->created_at}}</strong> <strong>{{$job->edited_at}}</strong></p></small>

<p class="text-right">Suma oferita <strong>{{$job->pret}}</strong> si trebuie realizat pana pe <strong> {{$job->deadline}} </strong></p><hr>

<h3>Descriere:</h3><p>{{$job->descriere}}</p><hr>

<p>Au licitat la acest job urmatorii useri:</p>
@foreach($bidders as $bidder)

<?php  
$b=User::where('_id',$bidder['userID'])->first();
$bidderName=$b['email'];

?>
<strong>{{$bidderName}}</strong>

@endforeach




@stop