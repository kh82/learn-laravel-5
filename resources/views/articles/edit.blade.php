@extends('app')

@section('content')
	<h1>Article Edit</h1>

	<h2>{!! $article->title !!}</h2>

	{!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/' . $article->id]) !!}

	@include('articles/_form', ['submitText' => 'Update Article'])

	{!! Form::close() !!}

	@include('errors/list')

@stop