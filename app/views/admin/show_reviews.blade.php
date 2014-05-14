@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
    <h1>Show grades reviews <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>
</div>
<script>
makeTable('{{action("AdministratorController@getReviewsAjax")}}',"reviews",'{{action("AdministratorController@deletereviews")}}');
setTimeout(function(){editable_table("reviews",["mark","docName","rezumat","utilitate"],'{{action("AdministratorController@deletereviews")}}','{{action("AdministratorController@getReviewsAjax")}}');},1000);
</script>
@stop