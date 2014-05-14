@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
    <h1>Show Tags <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>
</div>
<script>
makeTable('{{action("AdministratorController@getTagsAjax")}}',"tags",'{{action("AdministratorController@deletetags")}}');
setTimeout(function(){editable_table("tags",["name","descriere"],'{{action("AdministratorController@deletetags")}}','{{action("AdministratorController@getTagsAjax")}}');},1000);
</script>
@stop