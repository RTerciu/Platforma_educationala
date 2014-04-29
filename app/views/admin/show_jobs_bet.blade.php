@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
        <h1>Show Jobs Bet <small>Bla bla bla!</small></h1>
    </div>
	
<table class="table table-hover table-bordered table-striped" id="bets" >
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
		<td><div id="{{$i}}_jobID" contenteditable="false">{{$bet->jobID}}</div></td>
		<td><div id="{{$i}}_userID" contenteditable="false">{{$bet->userID}}</div></td>
		<td>{{$bet->updated_at}}</td>
		<td>{{$bet->created_at}}</td>
		<td>
			<a href="javascript:null" class="btn btn-default" id="{{$i}}" > Edit </a>
			<a href="javascript:null" class="btn btn-primary" id_value="{{$bet->id}}" id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_jobs_bet/{{$bet->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>
<script>

	var bets=new Array("jobID","userID");
	editable_table("bets",bets);

</script>
@stop