@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
    <h1>Show Docs <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>
</div>
<script>
makeTable('{{action("AdministratorController@getDocsAjax")}}',"docs",'{{action("AdministratorController@deletedocs")}}');
setTimeout(function(){editable_table("docs",["title","descriere","nrDownloads","document"],'{{action("AdministratorController@deletedocs")}}','{{action("AdministratorController@getDocsAjax")}}');},1000);
</script>
@stop