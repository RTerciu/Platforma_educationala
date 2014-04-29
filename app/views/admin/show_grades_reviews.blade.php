@extends('admin.admin_layout')

@section('admin_content')


<div class="page-header">
       <h1>Show grades reviews <small>Bla bla bla!</small></h1>
</div>

<table class="table table-hover table-bordered table-striped" id="grades">
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
		<td><div id="{{$i}}_docID" contenteditable="false">{{$grade->docID}}</div></td>
		<td><div id="{{$i}}_mark" contenteditable="false">{{$grade->mark}}</div></td>
		<td><div id="{{$i}}_reviewID" contenteditable="false">{{$grade->reviewID}}</div></td>
		<td><div id="{{$i}}_userID" contenteditable="false">{{$grade->userID}}</div></td>
		<td>{{$grade->created_at}}</td>
		<td>{{$grade->updated_at}}</td>
		<td>
			<a href="javascript:null" class="btn btn-default" id="{{$i}}" > Edit </a>
			<a href="javascript:null" class="btn btn-primary" id_value="{{$grade->id}}" id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_grades_reviews/{{$grade->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>
<script>

	var grades=new Array("docID","mark","reviewID","userID");
	editable_table("grades",grades);

</script>
@stop