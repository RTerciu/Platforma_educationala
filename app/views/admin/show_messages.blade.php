@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
        <h1>Show Messages <small>Bla bla bla!</small></h1>
    </div><br />
	
<table class="table table-hover table-bordered table-striped">
	<tr>
		<td> </td>
		<td>User ID to </td>
		<td>User ID from </td>
		<td>Subject </td>
		<td>Message </td>
		<td>Updated at </td>
		<td>Created at </td>
		<td> </td>
		<td> </td>
	</tr>

<?php $i=0 ?>

@foreach($msgs as $msg)
	<tr>
		<?php $i++ ?>
		<td>{{$i}}</td>
		<td>{{$msg->userTo}}</td>
		<td>{{$msg->userFrom}}</td>
		<td>{{$msg->subject}}</td>
		<td>{{$msg->mesaj}}</td>
		<td>{{$msg->updated_at}}</td>
		<td>{{$msg->created_at}}</td>
		<td><a href="{{ action('AdministratorController@editMessages', $msg->id) }}" class="btn btn-default"> Edit </a></td>
		<td><a href="delete_messages/{{$msg->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>

@stop