@extends('templates.default')

@section('content')


			@if ($status->count())
				
				@foreach ($status as $status)
					<article>
						<h2><a href="{{ URL::action('status-show', $status->slug) }}">{{ $status->title }}</a></h2>
						<p>{{ $status->body}}</p>
					</article>
				@endforeach
			@endif	
	
@stop