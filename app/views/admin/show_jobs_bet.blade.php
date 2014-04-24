@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
        <h1>Show Jobs Bet <small>Bla bla bla!</small></h1>
    </div>
	
<table class="table table-hover table-bordered table-striped">
	<tr>
		<td> </td>
		<td>Job ID </td>
		<td>User ID </td>
		<td>Updated at </td>
		<td>Created at </td>
		<td> </td>
		<td> </td>
	</tr>

<?php $i=0 ?>

@foreach($bets as $bet)
	<tr>
		<?php $i++ ?>
		<td>{{$i}}</td>
		<td>{{$bet->jobID}}</td>
		<td>{{$bet->userID}}</td>
		<td>{{$bet->updated_at}}</td>
		<td>{{$bet->created_at}}</td>
		<td><a href="{{ action('AdministratorController@editJobsBet', $bet->id) }}" class="btn btn-default"> Edit </a></td>
		<td><a href="delete_jobs_bet/{{$bet->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>

@stop