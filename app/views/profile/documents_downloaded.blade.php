@extends('layout.profile_layout')

@section('profile')


<h3 >Acestea sunt documentele pe care le-ati downloadat</h3>


@if(!isset($documents[0]))


<p class="alert alert-success">
		  
	    <strong>Info! </strong>Nu ai descarcat nici un document! 
		<a href="{{url('documents/all')}}" class="pull-right" data-dismiss="alert">Descarca un fisier! <span class="glyphicon glyphicon-list"></span></a>
</p>


@else


<table class="table table-hover table-bordered table-striped">
<tr>

<td>Nr. Crt </td>
<td>Titlu</td>
<td>La data</td>



</tr>

<?php $i=0 ?>

@foreach($documents as $document)
<tr  style="cursor:pointer" onclick="document.location.href='{{url('documents/'.$document['docTitle'])}}'" >
<?php 


$i++ ?>
<td>{{$i}}</td>
<td>{{$document['docTitle']}}</td>
<td>{{$document['data']}}</td>



</tr>
@endforeach
</table>

@endif
@stop