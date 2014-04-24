@extends('admin.admin_layout')

@section('admin_content')
	<div class="page-header">
        <h1>Show downloaded docs <small>Bla bla bla!</small></h1>
    </div>

<table class="table table-hover table-bordered table-striped">
	<tr>
		<td></td>
		<td>Title </td>
		<td>DocID</td>
		<td>Username </td>
		<td>Date </td>
		<td></td>
		<td></td>
	</tr>
<?php $i=0 ?>
@foreach($downs as $down)
	<tr>
		<?php 
		$username=User::find($down->userID)->username;
		$i++ ?>
		
		<td>{{$i}}</td>
		<td>{{$down->docTitle}}</td>
		<td>{{$down->docID}}</td>
		<td>{{$username}}</td>
		<td>{{$down->data}}</td>
		<td><a href="#" class="btn btn-default"> Edit </a></td>
		<td><a href="delete_downloaded/{{$down->id}}" class="btn btn-danger" > Delete</a></td>
	</tr>
		
@endforeach
</table>

@stop