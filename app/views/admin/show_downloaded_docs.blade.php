@extends('admin.admin_layout')

@section('admin_content')
<div class="page-header">
    <h1>Show downloaded docs <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>
</div>
<script>
makeTable('{{action("AdministratorController@getDownloadedDocsAjax")}}',"downloadeddocs",'{{action("AdministratorController@deletedownloadeddocs")}}');
setTimeout(function(){editable_table("downloadeddocs",["docTitle"],'{{action("AdministratorController@deletedownloadeddocs")}}','{{action("AdministratorController@getDownloadedDocsAjax")}}');},1000);
</script>
@stop