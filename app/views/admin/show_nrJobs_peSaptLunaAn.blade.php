@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
    <h1>Nr. Jobs pe zi/sapt/luna <small>Bla bla bla!</small></h1>
</div>
<div id="graphContainerBasic"></div>
<div id="graphContainer1" name="dailyGraph" titlu="Number of jobs posted every day" subtitlu="Subtitle"></div>
<hr>
<div id="graphContainerBasic2"></div>
<div id="graphContainer2" name="weeklyGraph"></div>
<hr>
<div id="graphContainerBasic1"></div>
<div id="graphContainer" name="monthlyGraph" titlu="Number of jobs posted every month" subtitlu="Subtitle" yAxisTitlu="Nr. of jobs" ></div>
<script>
  jobsGraph('{{url("admin/getInfoJobs/")}}');
nrDownGraph('{{url("admin/getNrJobsPerMonth")}}');
</script>
@stop