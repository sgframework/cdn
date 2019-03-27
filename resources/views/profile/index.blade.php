@extends('templates.default')
@section('content')
	<div class="row">
		<div class="col-lg-5">
		@include('user.partials.userblock')
		<hr>		
		@if (!$statuses->count())
    			<p>@<!---->{{ $user->getFirstNameOrUsername() }} hasn`t posted anything, yet.</p>
    		@else
    			@foreach ($statuses as $status)
    				<div class="media">
					<a class="pull-left" href="{{ route('profile.index', ['username' => $status->user->username]) }}">
					<img class="media-object" alt="" src="https://silcroot.com/Async/public/images/uploads/avatars/{{ $status->user->avatar }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
					<div class="media-body">
						<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $status->user->username]) }}">@<!---->{{ $status->user->getNameOrUsername() }}</a></h4>
						<a href="{{ route('status-show', ['slug' => $status->slug]) }}"><p>{{ $status->body }}</p></a>
						<ul class="list-inline">
						<li>{{ $status->created_at->diffForHumans() }}</li>
							@if ($status->user->id !== Auth::user()->id)
								<li><a href="{{ route('status.like', ['statusId' => $status->id]) }}">
								<i class="glyphicon glyphicon-thumbs-up"></i></a></li>														

							@endif								
							<li>{{ $status->likes->count() }} {{ str_plural('like', $status->likes->count()) }}</li>

							
					</ul>
					@foreach ($status->replies as $reply)
						<div class="media">
							<a class="pull-left" href="{{ route('profile.index', ['username' => $reply->user->username]) }}">
							<img class="media-object" alt="{{ Auth::user()->getNameOrUsername() }}" src="https://silcroot.com/Async/public/images/uploads/avatars/{{ $reply->user->avatar }}" style="width:40px; height:40px; float:left; border-radius:30%; margin-right:25px;"></a>
							<div class="media-body">
							<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $reply->user->username]) }}">@<!---->{{ $reply->user->getNameOrUsername() }}</a></h4>
							<p>{{ $reply->body }}</p>
							<ul class="list-inline">
								<li>{{ $reply->created_at->diffForHumans() }}</li>
						@if ($reply->user->id !== Auth::user()->id)
						<li><a href="{{ route('status.like', ['statusId' => $reply->id]) }}"><i class="glyphicon glyphicon-thumbs-up"></i></a></li>							

						@endif									
						<li>{{ $reply->likes->count() }} {{ str_plural('like', $reply->likes->count()) }}</li>

						
					</ul>
					</div>
				</div>
			@endforeach
			@if ($authUserIsFriend || Auth::user()->id === $status->user->id)
			<form role="form" action="{{ route('status.reply', ['statusId' => $status->id]) }}" method="post">
				<div class="form-group{{ $errors->has("reply-{$status->id}") ? ' has-error' : '' }}">
					<textarea name="reply-{{ $status->id }}" class="form-control" rows="2" placeholder="Leave your reply here..."></textarea>  						@if ($errors->has("reply-{$status->id}"))
					<span class="help-block">{{ $errors->first("reply-{$status->id}") }}</span>
				@endif
				
				</div>
			<input type="submit" value="Reply" class="btn btn-primary btn-sm">
			<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
			@endif
			</div>
	</div>	
			@endforeach							
	    		@endif

		</div>
		<div class="col-lg-4 col-lg-offset-3">
			@if (Auth::user()->hasFriendRequestsPending($user))
				<p>Waiting for {{ $user->getNameOrUsername() }} to accept request.</p>
				
			@elseif (Auth::user()->hasFriendRequestsReceived($user))
				<a href="{{ route('friend.accept', ['username' => $user->username]) }}" class="btn btn-primary">Accept</a>
			@elseif (Auth::user()->isFriendsWith($user))
				<p>You and {{ $user->getNameOrUsername() }} are friends.</p>
				
				<form action="{{ route('friend.delete', ['username' => $user->username]) }}" method="post">
					<input class="btn btn-danger" type="submit" value="Delete friend">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			@elseif (Auth::user()->id !== $user->id)
				<a href="{{ route('friend.add', ['username' => $user->username]) }}" class="btn btn-primary">Add as a friend.</a>
			@endif
		
			<h4>{{ $user->getFirstNameOrUsername() }}`s friends.</h4>
			
			@if (!$user->friends()->count())
				<p>You have no freinds.</p>				
			@else
				@foreach ($user->friends() as $user)
					@include('user/partials/userblock')
				@endforeach
			@endif
		</div>
	</div>

@stop
