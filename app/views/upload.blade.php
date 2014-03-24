@extends('layout')


@section('content')




{{ Form::open(array('action' => 'UploadController@processUploadedFile', 'files' => true)) }}
	{{ Form::token() }}
	{{ Form::file('file') }}
	{{ Form::submit('Incarca!') }}
{{ Form::close() }}


@stop