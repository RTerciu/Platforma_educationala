@extends('admin.admin_layout')

@section('admin_content')
<div class="page-header">
        <h1>Show Docs <small>Bla bla bla!</small></h1>
    </div>	

<table class="table table-hover table-bordered table-striped">
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
		<td>{{$doc->title}}</td>
		<td>{{$doc->descriere}}</td>
		<td>{{$doc->nrDownloads}}</td>
		<td>{{$doc->document}}</td>
		<td>{{$doc->updated_at}}</td>
		<td>{{$doc->created_at}}</td>
		<td><a href="{{ action('AdministratorController@editDocs', $doc->id) }}" class="btn btn-default"> Edit </a></td>
		<td><a href="delete_docs/id={{$doc->id}}" class="btn btn-danger"> Delete</a></td>
	</tr>
		
@endforeach
</table>

@stop