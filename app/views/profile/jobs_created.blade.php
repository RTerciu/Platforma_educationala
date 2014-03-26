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


<h3 >Acestea sunt Job-urile pe care le-ai creat!</h3>


@if(!isset($jobs[0]))
      
<p class="alert alert-success">
		  
	    <strong>Info!</strong>Nu creat nici un job! 
		<a href="{{url('job/create')}}" class="pull-right" data-dismiss="alert">Creaza un job <span class="glyphicon glyphicon-plus"></span></a>
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


//$jobName=DB::table('jobs')->where('_id',$job->jobID)->first()['titlu'];



?>


<tr>

<td>
<button type="button" class="btn btn-default btn-lg" onClick="document.location.href='{{url('jobs/'.$job->titlu)}}'">
<span class="glyphicon glyphicon-tasks"></span> {{$job->titlu}}
</button>



</td>
<td>

<button type="button" class="btn btn-default btn-lg" >
<span class="glyphicon glyphicon-time"></span> {{$job->created_at}}
</button>
</td>
<td>
<button type="button" class="btn btn-default btn-lg" onClick="document.location.href='{{url('remove/job/created/'.$job->_id)}}'">
<span class="glyphicon glyphicon-remove-circle"></span>
</button>
</td>
</tr>
@endforeach

<table>
@endif

@stop