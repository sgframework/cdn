@extends('templates.default')

@section('content')
<br />


<h3>Status</h3>


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


<div class="media">
<a class="pull-left" href="">
<img class="media-object" alt="" src="" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
<div class="media-body">
	<h4 class="media-heading"><a href="">@<!---->{{ Auth::user()->getNameOrUsername() }}</a></h4>
	<p></p>
	<ul class="list-inline">
		<li></li>
		
		<li><a href="">
		<i class="glyphicon glyphicon-thumbs-up"></i></a></li>														
									
		<li></li>
	</ul>
	
	
	
	
			@if (!$statusId->count())
				<p>You haven`t posted anything yet.</p>				
			@else
				@foreach ($statusId as $user)
					@include('user/partials/userblock')
				@endforeach
			@endif
	
	
	
	
	
	
	
	
	
	
	
	
@stop