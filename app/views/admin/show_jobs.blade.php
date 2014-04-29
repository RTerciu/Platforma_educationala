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
			<a href="javascript:null" class="btn btn-default" id="{{$i}}"> Edit </a>
			<a href="javascript:null" class="btn btn-primary" id_value="{{$job->id}}" id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_jobs/{{$job->id}}" class="btn btn-danger"> Delete</a></td>
		</tr>
		
@endforeach
</table>
<script>

	var jobs=new Array("titlu","pret","deadline","descriere");
	editable_table("jobs",jobs);

</script>

@stop