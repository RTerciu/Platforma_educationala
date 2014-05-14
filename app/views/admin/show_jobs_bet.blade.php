@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
    <h1>Show Jobs Bet <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>
</div>
<script>
makeTable('{{action("AdministratorController@getJobsBetAjax")}}',"jobsbet",'{{action("AdministratorController@deletejobsbet")}}');
setTimeout(function(){editable_table("jobsbet",["jobID","userID"]);},1000);
</script>
@stop