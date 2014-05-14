@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
    <h1>Show users <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>	
</div>
<script>
makeTable('{{action("AdministratorController@getUsersAjax")}}',"users",'{{action("AdministratorController@deleteusers")}}');
setTimeout(function(){editable_table("users",["username","email"],'{{action("AdministratorController@deleteusers")}}','{{action("AdministratorController@getUsersAjax")}}');},1000);
</script>
@stop