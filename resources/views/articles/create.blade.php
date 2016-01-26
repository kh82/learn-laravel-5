@extends('app')

@section('content')
	<h1>Article Create</h1>

	{!! Form::open(['url' => 'articles']) !!}

	@include('articles/_form', ['submitText' => 'Create Article'])

	{!! Form::close() !!}

	@include('errors/list')

@stop