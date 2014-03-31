@extends('layout.profile_layout')

@section('profile')


<h3 >Acestea sunt documentele pe care le-ati uploadat</h3>
@if(!isset($documents[0]))


<p class="alert alert-success">
		  
	    <strong>Info! </strong>Nu ai incarcat nici un document! 
		<a href="{{url('documents/create')}}" class="pull-right" data-dismiss="alert">Adauga un fisier! <span class="glyphicon glyphicon-plus"></span></a>
</p>


@else
<table class="table table-hover table-bordered table-striped">
<tr>

<td>Nr. Crt </td>
<td>Titlu</td>

<td>In categoria</td>
<td>La data</td>



</tr>

<?php $i=0 ?>

@foreach($documents as $document)
<tr  style="cursor:pointer" onclick="document.location.href='{{url('documents/'.$document->title)}}'" >
<?php 


$i++ ?>
<td>{{$i}}</td>
<td>{{$document->title}}</td>
<td>{{$document->category}}</td>
<td>{{$document->created_at}}</td>



</tr>
@endforeach
</table>
@endif
@stop