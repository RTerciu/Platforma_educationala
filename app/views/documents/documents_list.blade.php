@extends('layout.documents_layout')

@section('documents_content')
   
<h2>Acestea sunt toate Documentele disponibile</h2><hr>
<table class="table table-hover table-bordered table-striped">
<tr>

<td>Nr. Crt </td>
<td>Titlu</td>
<td>Adaugat de</td>
<td>In categoria</td>
<td>La data</td>



</tr>

<?php $i=0 ?>

@foreach($documents as $document)
<tr  style="cursor:pointer" onclick="document.location.href='{{url('documents/'.$document->title)}}'" >
<?php 

$user=DB::table('users')->where('_id',$document->userID)->first();
$userEmail=$user['username'];

$tagsArray=$document->tags;
$tagsHTML='';


foreach($tagsArray as $tagID)
	{
	$tag=Tag::find($tagID);
	$tagsHTML=$tagsHTML.$tag->getHTMLTag();
	}

$i++ ?>
<td>{{$i}}</td>
<td>{{$document->title}}</td>
<td><strong><a href="{{url('/profile/'.$userEmail)}}">{{$userEmail}}</a></strong></td>
<td>{{$tagsHTML}}</td>
<td>{{$document->created_at}}</td>



</tr>
@endforeach
</table>

@stop