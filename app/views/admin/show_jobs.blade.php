@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
   <h1>Show Jobs <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>
</div>
<script>	
makeTable('{{action("AdministratorController@getJobsAjax")}}',"jobs",'{{action("AdministratorController@deletejobs")}}');
setTimeout(function(){editable_table("jobs",["titlu","pret","deadline","descriere"],'{{action("AdministratorController@deletejobs")}}','{{action("AdministratorController@getJobsAjax")}}');},1000);
</script>
@stop