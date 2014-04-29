@extends('admin.admin_layout')

@section('admin_content')

<div class="page-header">
       <h1>Show Tags <small>Bla bla bla!</small></h1>
</div>
	
<table class="table table-hover table-bordered table-striped" id="tags">
	<tr>
		<td> </td>
		<td>ID </td>
		<td>Name </td>
		<td>Description </td>
		<td> </td>
		<td> </td>
	</tr>

<?php $i=0 ?>

@foreach($tags as $tag)
	<tr>
		<?php $i++ ?>
		<td>{{$i}}</td>
		<td>{{$tag->_id}}</td>
		<td><div id="{{$i}}_name" contenteditable="false">{{$tag->name}}</div></td>
		<td><div id="{{$i}}_descriere" contenteditable="false">{{$tag->descriere}}</div></td>
		<td>
			<a href="javascript:null" class="btn btn-default" id="{{$i}}" > Edit </a>
			<a href="javascript:null" class="btn btn-primary" id_value="{{$tag->id}}" id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_tags/{{$tag->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>
<script>

	var tags=new Array("name","descriere");
	editable_table("tags",tags);

</script>
@stop