@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
       <h1>Show Tags <small>Bla bla bla!</small></h1>
</div>
	
<table class="table table-hover table-bordered table-striped">
	<tr>
		<td> </td>
		<td>ID </td>
		<td>Name </td>
		<td>Description </td>
		<td> </td>
		<td> </td>
	</tr>

<?php $i=0 ?>

@foreach($tags as $tag)
	<tr>
		<?php $i++ ?>
		<td>{{$i}}</td>
		<td>{{$tag->_id}}</td>
		<td>{{$tag->name}}</td>
		<td>{{$tag->descriere}}</td>
		<td><a href="{{ action('AdministratorController@editTags', $tag->id) }}" class="btn btn-default"> Edit </a></td>
		<td><a href="delete_tags/{{$tag->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>

@stop