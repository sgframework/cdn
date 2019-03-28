@extends('templates.default')

@section('content')
	<article>
		<h2><a href="">{{ $status->title }}</a></h2>
		<p>{{ $status->body}}</p>
	</article>	
@stop