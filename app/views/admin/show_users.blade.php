@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
        <h1>Show users <small>Bla bla bla!</small></h1>
    </div><br />
	
<table class="table table-hover table-bordered table-striped" id="users">
	<tr>
		<td> </td>
		<td>Username </td>
		<td>Email </td>
		<td>Created at </td>
		<td>Updated at </td>
		<td> </td>
		<td> </td>
	</tr>

<?php $i=0 ?>

@foreach($users as $user)
	<tr>
		<?php $i++ ?>
		<td>{{$i}}</td>
		<td><div id="{{$i}}_username" contenteditable="false">{{$user->username}}</div></td>
		<td><div id="{{$i}}_email" contenteditable="false">{{$user->email}}</div></td>
		<td>{{$user->created_at}}</td>
		<td>{{$user->updated_at}}</td>
		<td>
			<a href="javascript:null" class="btn btn-default" id="{{$i}}"> Edit </a>
			<a href="javascript:null" class="btn btn-primary"  id_value="{{$user->id}}"  id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_users/{{$user->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>
<script>

	var users=new Array("username","email");
	editable_table("users",users);

</script>
@stop