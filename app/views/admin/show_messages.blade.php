@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
    <h1>Show Messages <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>
</div><br />
<script>
makeTable('{{action("AdministratorController@getMessagesAjax")}}',"messages",'{{action("AdministratorController@deletemessages")}}');
setTimeout(function(){editable_table("messages",["subject","mesaj"],'{{action("AdministratorController@deletemessages")}}','{{action("AdministratorController@getMessagesAjax")}}');},1000);
</script>
@stop