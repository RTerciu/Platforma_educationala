@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
       <h1>Show grades reviews <small>Bla bla bla!</small></h1>
</div>

	
<table class="table table-hover table-bordered table-striped" id="reviews" >
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
		<td><div id="{{$i}}_mark" contenteditable="false">{{$review->mark}}</div></td>
		<td>{{$review->docID}}</td>
		<td><div id="{{$i}}_docName" contenteditable="false">{{$review->docName}}</div></td>
		<td>{{$review->userID}}</td>
		<td><div id="{{$i}}_rezumat" contenteditable="false">{{$review->rezumat}}</div></td>
		<td><div id="{{$i}}_utilitate" contenteditable="false">{{$review->utilitate}}</div></td>
		<td>{{$review->updated_at}}</td>
		<td>{{$review->created_at}}</td>
		<td>
			<a href="javascript:null" class="btn btn-default" id="{{$i}}" > Edit </a>
			<a href="javascript:null" class="btn btn-primary" id_value="{{$review->id}}" id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_reviews/{{$review->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>
<script>

	var reviews=new Array("mark","docName","rezumat","utilitate");
	editable_table("reviews",reviews);

</script>
@stop