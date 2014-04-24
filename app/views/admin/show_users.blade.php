@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
        <h1>Show users <small>Bla bla bla!</small></h1>
    </div><br />
	
<table class="table table-hover table-bordered table-striped">
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
			<a href="javascript:editRow({{$i}})" class="btn btn-default" id="{{$i}}"> Edit </a>
			<a href="javascript:saveChanges({{$i}},'{{$user->id}}')" class="btn btn-primary" id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_users/{{$user->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>
<script>
	function editRow(id)
	{
		$('#'+id+'_username').attr("contenteditable","true");
		$('#'+id+'_email').attr("contenteditable","true");
		$('#'+id).css("display","none");
		$('#'+id+'_save').css("display","inline-block");
		savebutton=$('#'+id+'_save');
		console.log(savebutton.html());
		
	}
	
	function saveChanges(id,user_id)
	{
		console.log(id,user_id);
		
		var username=$('#'+id+'_username').html();
		var email=$('#'+id+'_email').html();

		$.ajax({
				type: "POST",
				url: "http://localhost/Platforma_educationala/public/admin/edit_users_ajax",
				data: {id:user_id, username: username, email: email},
				dataType: 'text',
				cache: false
			});
	
		$('#'+id+'_username').attr("contenteditable","false");
		$('#'+id+'_email').attr("contenteditable","false");
		$('#'+id).css("display","inline-block");
		$('#'+id+'_save').css("display","none");
	}

</script>
@stop