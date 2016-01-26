@extends('app')

@section('content')
	<h1>Article View</h1>

		<article>
			<h2>{{$article->title}}</h2>
			<div class="body">
				{{$article->body}}
			</div>
		</article>

@stop