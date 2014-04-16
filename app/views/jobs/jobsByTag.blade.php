@extends('layout.jobs_layout')

@section('jobs_content')

<h2>Acestea sunt Job-urile care au tag-ul #{{$tagName}} </h2><hr>
<table class="table table-hover table-bordered table-striped">
<tr>

<td>Nr. Crt </td>
<td>Titlu</td>
<td>Adaugat de</td>
<td>Tag-uri</td>
<td>Deadline</td>


<?php $i=0; ?>



@foreach($jobs as $job)
<?php 

$user=DB::table('users')->where('_id',$job['id_user'])->first();
$userName=$user['username'];
$i++;
$docTitle=$job['titlu'];

$tagsArray=$job['tags'];
$tagsHTML='';


foreach($tagsArray as $tagID)
	{
	$tag=Tag::find($tagID);
	$tagsHTML=$tagsHTML.$tag->getHTMLTagJob();
	}



?>



<tr  style="cursor:pointer" onclick="document.location.href='{{url('jobs/'.$docTitle)}}'" >


<td>{{$i}}</td>
<td>{{$job['titlu']}}</td>
<td>{{$userName}}</td>
<td>{{$tagsHTML}}</td>
<td>{{\Carbon\Carbon::createFromTimeStamp(strtotime($job['deadline']))->diffForHumans()}}</td>



</tr>

@endforeach

</table>
@stop