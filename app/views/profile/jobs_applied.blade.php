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


<h3 >Acestea sunt Job-urile pentru care ai licitat</h3>


@if(!isset($jobs[0]))
      
<p class="alert alert-success">
		  
	    <strong>Info!</strong>Nu ai participat in nici o licitatie. 
		<a href="{{url('jobs/all')}}" class="pull-right" data-dismiss="alert">Jobs <span class="glyphicon glyphicon-list"></span></a>
</p>
@else

<table class="table table-responsive">
<tr>
<td> Numele Jobului </td>
<td> Data aplicarii </td>
<td> &nbsp; </td>


</tr>
@foreach($jobs as $job)

<?php


$jobName=DB::table('jobs')->where('_id',$job->jobID)->first()['titlu'];



?>


<tr>

<td>
<button type="button" class="btn btn-default btn-lg" onClick="document.location.href='{{url('jobs/'.$jobName)}}'">
<span class="glyphicon glyphicon-tasks"></span> {{$jobName}}
</button>



</td>
<td>

<button type="button" class="btn btn-default btn-lg" >
<span class="glyphicon glyphicon-time"></span> {{$job->created_at}}
</button>
</td>
<td>
<button type="button" class="btn btn-default btn-lg" onClick="document.location.href='{{url('remove/job/applied/'.$job->jobID)}}'">
<span class="glyphicon glyphicon-remove-circle"></span>
</button>
</td>
</tr>
@endforeach

<table>
@endif
@stop














