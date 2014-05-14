@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
	<h1>Show grades reviews <small>Bla bla bla!</small><a href="javascript:null" disabled="disabled" id="multiple_delete" class="btn btn-default" style="float:right;">Delete</a></h1>
</div>
<script>
makeTable('{{action("AdministratorController@getGradesReviewsAjax")}}',"gradesreviews",'{{action("AdministratorController@deletegradesreviews")}}');
setTimeout(function(){editable_table("gradesreviews",["mark"],'{{action("AdministratorController@deletegradesreviews")}}','{{action("AdministratorController@getGradesReviewsAjax")}}');},1000);
</script>
@stop