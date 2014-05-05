@extends('layout.profile_layout')

@section('profile')



<?php
$m=Session::get('mesaj');

?>
@if(isset($m))
<div class="alert alert-info">  
	<a href="javascript:$('.alert-info').toggle();" class="close" data-dismiss="alert">×</a>  
	<strong>Info!</strong>{{Session::get('mesaj')}}  
</div> 
@endif


<h3 >Acestea sunt toate logarile pe care le-ai avut pe site!</h3>


@if(!isset($logs[0]))
      
<p class="alert alert-success">
		  
	    <strong>Info! </strong>Aceasta este prima ta logare! 
</p>

@else

<table class="table table-responsive">
<tr>
<td> Data/Ora Logarii </td>
<td> Data/Ora Logout  </td>
<td> Ip/Browser/OS </td>
<td> Timp </td>
<td> Logout manual? </td>


</tr>
			@foreach($logs as $log)

			<tr>

			<td>
			
			<span class="glyphicon glyphicon-time"> {{$log['login']}}</span> 
			



			</td>
			<td>

			
			<span class="glyphicon glyphicon-time"> {{$log['logout']}}</span> 
			
			</td>
			
			<td>
			<span class="glyphicon glyphicon-eye-open">
			{{$log['ip']}}/{{$log['browser']}}/{{$log['os']}}
			</span> 
			</td>
			
			<td>
			<span class="glyphicon glyphicon-time">
			{{$log['timp']}}
			</span> 
			</td>
			
			<td>
			
			{{$log['logout_manual']}}
			
			</td>
			</tr>
			@endforeach

<table>
@endif

@stop