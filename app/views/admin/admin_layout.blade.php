@extends('layout.layout')
@section('content')
<script src="{{asset('js/save_button.js')}}" type="text/javascript"></script>
<script src="{{asset('js/makeTableAdmin.js')}}" type="text/javascript"></script>
<script src="{{asset('js/highcharts.js')}}" type="text/javascript"></script>
<script src="{{asset('js/exporting.js')}}" type="text/javascript"></script>
<script src="{{asset('js/graph.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jobsGraph.js')}}" type="text/javascript"></script>

<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header" style="height:60px; width:100%; background-color:#DCDCDC;">
		<ul class="nav navbar-nav">
			<li><a href="{{ action('AdministratorController@showUsers') }}">Show Users</a></li>
			<li><a href="{{ action('AdministratorController@showJobs') }}">Show Jobs</a></li>
			<li><a href="{{ action('AdministratorController@showDocs') }}">Show Docs</a></li>
			<li><a href="{{ action('AdministratorController@showDownloadedDocs') }}">Show Downloaded Docs</a></li>
			<li><a href="{{ action('AdministratorController@showGradesReviews') }}">Show Grades Reviews</a></li>
			<li><a href="{{ action('AdministratorController@showJobsBet') }}">Show Jobs bet</a></li>
			<li><a href="{{ action('AdministratorController@showMessages') }}">Show Messages</a></li>
			<li><a href="{{ action('AdministratorController@showReviews') }}">Show Reviews</a></li>
			<li><a href="{{ action('AdministratorController@showTags') }}">Show Tags</a></li>
			<!--Statistici-->
			<li><a href="{{ action('AdministratorController@showGraph') }}">Graph Nr. Downs</a></li>
			
			<li><a href="{{ action('AdministratorController@showGraphNrJobs') }}">Graph Nr. jobs</a></li>
	
		</ul>
	</div>
</nav>
@yield('admin_content')
@stop