@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
       <h1>Show grades reviews <small>Bla bla bla!</small></h1>
</div>

	
<table class="table table-hover table-bordered table-striped">
	<tr>
		<td> </td>
		<td>ID </td>
		<td>Mark </td>
		<td>DocID </td>
		<td>DocName </td>
		<td>UserID </td>
		<td>Rezumat </td>
		<td>Utilitate </td>
		<td>Updated at </td>
		<td>Created at </td>
		<td></td>
		<td></td>
	</tr>

<?php $i=0 ?>

@foreach($reviews as $review)
	<tr>
		<?php $i++ ?>
		<td>{{$i}}</td>
		<td>{{$review->_id}}</td>
		<td>{{$review->mark}}</td>
		<td>{{$review->docID}}</td>
		<td>{{$review->docName}}</td>
		<td>{{$review->userID}}</td>
		<td>{{$review->rezumat}}</td>
		<td>{{$review->utilitate}}</td>
		<td>{{$review->updated_at}}</td>
		<td>{{$review->created_at}}</td>
		<td><a href="{{ action('AdministratorController@editReviews', $review->id) }}" class="btn btn-default"> Edit </a></td>
		<td><a href="delete_reviews/{{$review->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>

@stop