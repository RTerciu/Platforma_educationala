@extends('admin.admin_layout')

@section('admin_content')
<div class="page-header">
        <h1>Show Docs <small>Bla bla bla!</small></h1>
    </div>	

<table class="table table-hover table-bordered table-striped" id="docs">
	<tr>
		<td></td>
		<td>Title </td>
		<td>Description </td>
		<td>Nr. of downloads </td>
		<td>Doc </td>
		<td>Updated at </td>
		<td>Created at </td>
		<td> </td>
		<td> </td>
	</tr>
<?php $i=0 ?>
@foreach($docs as $doc)
	<tr>
		<?php $i++ ?>
		
		<td>{{$i}}</td>
		<td><div id="{{$i}}_title" contenteditable="false">{{$doc->title}}</div></td>
		<td><div id="{{$i}}_descriere" contenteditable="false">{{$doc->descriere}}</div></td>
		<td><div id="{{$i}}_nrDownloads" contenteditable="false">{{$doc->nrDownloads}}</div></td>
		<td><div id="{{$i}}_document" contenteditable="false">{{$doc->document}}</div></td>
		<td>{{$doc->updated_at}}</td>
		<td>{{$doc->created_at}}</td>
		<td>
			<a href="javascript:null" class="btn btn-default" id="{{$i}}" > Edit </a>
			<a href="javascript:null" class="btn btn-primary" id_value="{{$doc->id}}" id="{{$i}}_save" style="display:none"> Save </a>
		</td>
		<td><a href="delete_docs/id={{$doc->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>
<script>

	var docs=new Array("title","descriere","nrDownloads","document");
	editable_table("docs",docs);

</script>
@stop