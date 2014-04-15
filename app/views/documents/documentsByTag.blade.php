@extends('layout.documents_layout')

@section('documents_content')

<h2>Acestea sunt documentele pentru tag-ul {{$tagName}} </h2><hr>
<table class="table table-hover table-bordered table-striped">
<tr>

<td>Nr. Crt </td>
<td>Titlu</td>
<td>Adaugat de</td>
<td>Tag-uri</td>
<td>La data</td>


<?php $i=0; ?>



@foreach($docs as $doc)
<?php 

$user=DB::table('users')->where('_id',$doc['userID'])->first();
$userName=$user['username'];
$i++;
$docTitle=$doc['title'];

$tagsArray=$doc['tags'];
$tagsHTML='';


foreach($tagsArray as $tagID)
	{
	$tag=Tag::find($tagID);
	$tagsHTML=$tagsHTML.$tag->getHTMLTag();
	}



?>



<tr  style="cursor:pointer" onclick="document.location.href='{{url('documents/'.$docTitle)}}'" >


<td>{{$i}}</td>
<td>{{$doc['title']}}</td>
<td>{{$userName}}</td>
<td>{{$tagsHTML}}</td>
<td>{{$doc['created_at']}}</td>



</tr>

@endforeach

</table>
@stop