@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
        <h1>Show Jobs <small>Bla bla bla!</small></h1>
    </div>

<table class="table table-hover table-bordered table-striped" id="jobs">
	<tr>
		<td> </td>
		<td>Titlu </td>
		<td>Pret </td>
		<td>Deadline </td>
		<td>Descriere </td>
		<td>Updated at </td>
		<td>Created at </td>
		<td>Username </td>
		<td> </td>
		<td> </td>
	</tr>

<?php $i=0 ?>

@foreach($jobs as $job)
	<tr>
		<?php 
		$username=User::find($job->id_user)->username;
		$i++ ?>
		
		<td>{{$i}}</td>
		<td><div id="{{$i}}_titlu" contenteditable="false">{{$job->titlu}}</div></td>
		<td><div id="{{$i}}_pret" contenteditable="false">{{$job->pret}}</div></td>
		<td><div id="{{$i}}_deadline" contenteditable="false">{{$job->deadline}}</div></td>
		<td><div id="{{$i}}_descriere" contenteditable="false">{{$job->descriere}}</div></td>
		<td>{{$job->updated_at}}</td>
		<td>{{$job->created_at}}</td>
		<td>{{$username}}</td>
		<td>
			<a href="javascript:editRow({{$i}})" class="btn btn-default" id="{{$i}}"> Edit </a>
			<a href="javascript:saveChanges({{$i}},'{{$job->id}}')" class="btn btn-primary" id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_jobs/{{$job->id}}" class="btn btn-danger"> Delete</a></td>
		</tr>
		
@endforeach
</table>
<script>
	function editRow(id)
	{
		$('#'+id+'_titlu').attr("contenteditable","true");
		$('#'+id+'_pret').attr("contenteditable","true");
		$('#'+id+'_deadline').attr("contenteditable","true");
		$('#'+id+'_descriere').attr("contenteditable","true");
		$('#'+id).css("display","none");
		$('#'+id+'_save').css("display","inline-block");
		savebutton=$('#'+id+'_save');
		console.log(savebutton.html());
		// get parrent table $('#'+id).closest("table").css("color","red");
	}
	
	function saveChanges(id,job_id)
	{
		console.log(id,job_id);
		
		var titlu=$('#'+id+'_titlu').html();
		var pret=$('#'+id+'_pret').html();
		var deadline=$('#'+id+'_deadline').html();
		var descriere=$('#'+id+'_descriere').html();

		$.ajax({
				type: "POST",
				url: "http://localhost/Platforma_educationala/public/admin/edit_jobs_ajax",
				data: {id:job_id, titlu: titlu, pret: pret, deadline:deadline, descriere:descriere},
				dataType: 'text',
				cache: false
			});
	
		$('#'+id+'_titlu').attr("contenteditable","false");
		$('#'+id+'_pret').attr("contenteditable","false");
		$('#'+id+'_deadline').attr("contenteditable","false");
		$('#'+id+'_descriere').attr("contenteditable","false");
		$('#'+id).css("display","inline-block");
		$('#'+id+'_save').css("display","none");
	}

</script>

@stop