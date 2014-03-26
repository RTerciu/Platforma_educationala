@extends('layout.jobs_layout')



@section('jobs_content')
<h2>Acestea sunt toate joburile disponibile</h2><hr>
<table class="table table-hover table-bordered table-striped">
<tr>

<td>Nr. Crt </td>
<td>Titlu</td>
<td>Adaugat de</td>
<td>In categoria</td>
<td>Pret</td>
<td>La data</td>
<td>Pana pe</td>


</tr>

<?php $i=0 ?>

@foreach($tabel as $job)
<tr  style="cursor:pointer" onclick="document.location.href='{{url('jobs/'.$job->titlu)}}'" >
<?php 

$user=DB::table('users')->where('_id',$job->id_user)->first();
$userEmail=$user['email'];

$i++ ?>
<td>{{$i}}</td>
<td>{{$job->titlu}}</td>
<td>{{$userEmail}}</td>
<td>{{$job->categorie}}</td>
<td>{{$job->pret}}</td>
<td>{{$job->created_at}}</td>
<td>{{$job->deadline}}</td>


</tr>
@endforeach
</table>


@stop