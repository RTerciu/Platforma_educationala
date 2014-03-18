@extends('layout.jobs_layout')



@section('jobs_content')
<h2>{{$job->titlu}}</h2><hr>

<p><span>Creat de:</span></p><p>{{$job->id_user}}</p><hr>
<p><span>La data de:</span></p><p>{{$job->created_at}}</p><hr>
<p><span>Editat la:</span></p><p>{{$job->edited_at}}</p><hr>
<p><span>Pret:</span></p><p>{{$job->pret}}</p><hr>
<p><span>Deadline:</span></p><p>{{$job->deadline}}</p><hr>
<p><span>Descriere:</span></p><p>{{$job->descriere}}</p><hr>

<button class="btn btn-primary">Inscrie-te la acest Job!</button>


@stop