@extends('templates.default')

@section('content')


	<div class="row">
		<div class="col-lg-6">
			<h3>Yours friends.</h3>
			@if (!$friends->count())
				<p>You have no freinds.</p>				
			@else
				@foreach ($friends as $user)
					@include('user/partials/userblock')
				@endforeach
			@endif
		</div>
		<div class="col-lg-6">
			<h3>Friend`s Requests.</h3>
			
			@if (!$requests->count())
				<p>You have no requests.</p>
			@else
				@foreach ($requests as $user)
					@include('user.partials.userblock')
				@endforeach
			@endif
		</div>
	</div>
@stop