@extends('admin.admin_layout')

@section('admin_content')


<div class="page-header">
       <h1>Show grades reviews <small>Bla bla bla!</small></h1>
</div>

<table class="table table-hover table-bordered table-striped">
	<tr>
		<td> </td>
		<td>Doc </td>
		<td>Mark </td>
		<td>Review </td>
		<td>User </td>
		<td>Created at </td>
		<td>Updated at </td>
		<td> </td>
		<td> </td>
	</tr>

<?php $i=0 ?>

@foreach($grades as $grade)
	<tr>
		<?php $i++ ?>
		<td>{{$i}}</td>
		<td>{{$grade->docID}}</td>
		<td>{{$grade->mark}}</td>
		<td>{{$grade->reviewID}}</td>
		<td>{{$grade->userID}}</td>
		<td>{{$grade->created_at}}</td>
		<td>{{$grade->updated_at}}</td>
		<td><a href="{{ action('AdministratorController@editGradesReviews', $grade->id) }}" class="btn btn-default"> Edit </a></td>
		<td><a href="delete_grades_reviews/{{$grade->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>

@stop