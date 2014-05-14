@extends('admin.admin_layout')
@section('admin_content')
<div class="page-header">
    <h1>Show Nr. Downloads in time Graph <small>Bla bla bla!</small></h1>
</div>
<div id="graphContainerBasic1"></div>
<div id="graphContainer" titlu="Downloads in time" subtitlu="Subtitle" yAxisTitlu="Nr. of downloads"></div>
<script>
nrDownGraph('{{url("admin/getInfo/")}}');
</script>
@stop