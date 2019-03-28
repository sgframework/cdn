@extends('templates.default')

@section('content')
<br />
<br />
<br />

<h3>Timeline</h3>

<div class="row">
    	<div class="col-lg-6">
    		<form role="form" method="post" action="{{ route('status.post') }}">
	    		<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
	    			
	    		



	    			<textarea name="status" placeholder="What's up" class="form-control" rows="2"></textarea>
	    			    			@if ($errors->has('status'))
    				<span class="help-block">{{ $errors->first('status') }}</span>
    			@endif
			</div>
			

			
				<button type="submit" class="btn btn-default">post</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}" />
		</form>
		
		
					<div class="frame">
				<ul class="list-inline">
				<li><form action="{{ route('upload.post') }}" method="post" enctype="multipart/form-data">
                                        Select image to upload:
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        <input type="submit" value="Upload Image" name="submit">
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        </form></li>
				<li><a href="#" class="glyphicon glyphicon-paperclip"></a></li>
				<li><a href="#" class="glyphicon glyphicon-paperclip"></a></li>
				<li><a href="#" class="glyphicon glyphicon-paperclip"></a></li>
				</ul>
			</div>
		<hr>
	</div>
</div>
<div class="row">
    	<div class="col-lg-5">
    		@if (!$statuses->count())
    			<p>There`s nothing on your timeline, yet.</p>
    		@else
    			@foreach ($statuses as $status)
    				<div class="media">
					<a class="pull-left" href="{{ route('profile.index', ['username' => $status->user->username]) }}">
					<img class="media-object" alt="{{ Auth::user()->getNameOrUsername() }}" src="https://silcroot.com/Async/public/images/uploads/avatars/{{ $status->user->avatar }}" style="width:40px; height:40px; float:left; border-radius:30%; margin-right:25px;"></a>
					<div class="media-body">
						<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $status->user->username]) }}">@<!---->{{ $status->user->getNameOrUsername() }}</a></h4>
						<pre class = "content-block highlighter codebox">{{ $status->body }}</pre>
						<ul class="list-inline">
							<li>{{ $status->created_at->diffForHumans() }}</li>
							@if ($status->user->id !== Auth::user()->id)
							<li><a href="{{ route('status.like', ['statusId' => $status->id]) }}"><i class="glyphicon glyphicon-thumbs-up"></i></a></li>
							
							@endif							
							<li>{{ $status->likes->count() }} {{ str_plural('like', $status->likes->count()) }}</li>

						</ul>
						
						@foreach ($status->replies as $reply)
							<div class="media">
								<a class="pull-left" href="{{ route('profile.index', ['username' => $reply->user->username]) }}">
								<img class="media-object" alt="{{ Auth::user()->getNameOrUsername() }}" src="https://silcroot.com/Async/public/images/uploads/avatars/{{ $reply->user->avatar }}" style="width:40px; height:40px; float:left; border-radius:30%; margin-right:25px;"></a>
								<div class="media-body">
								<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $reply->user->username]) }}">@<!---->{{ $reply->user->getNameOrUsername() }}</a></h4>
								<pre class = "content-block highlighter codebox">{{ $reply->body }}</pre>
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
						
						<form role="form" action="{{ route('status.reply', ['statusId' => $status->id]) }}" method="post">
							<div class="form-group{{ $errors->has("reply-{$status->id}") ? ' has-error' : '' }}">
								<textarea name="reply-{{ $status->id }}" class="form-control" rows="2" placeholder="Leave your reply here..."></textarea>  					@if ($errors->has("reply-{$status->id}"))
    								<span class="help-block">{{ $errors->first("reply-{$status->id}") }}</span>
    							@endif
								
							</div>
							<input type="submit" value="Reply" class="btn btn-primary btn-sm">
							<input type="hidden" name="_token" value="{{ Session::token() }}">
						</form>
						</div>
				</div>	
						@endforeach
						
							<center>{!! $statuses->render() !!}</center>
							
				    		@endif
				 	</div>
				</div>   	
				    	
@stop