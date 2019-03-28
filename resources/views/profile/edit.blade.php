@extends('templates.default')

@section('content')

    <h3>Edit your profile</h3>
    <div class="row">
    	<div class="col-lg-6">
    	
    	
    	<form class="form-vertical" role="form" method="post" action="{{ route('update.post') }}">
    			<div class="form-group">   		
    			<label for="imgupdate" class="control-label">Update your profile picture</label>
    			
    			<img class="media-object" alt="{{ Auth::user()->getNameOrUsername() }}" src="../public/images/uploads/avatars/{{ Auth::user()->avatar }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
    			
    			
    			
    			<input type="submit" name="imgupdate" class="form-control" id="imgupdate" value="Upload">
    	
    	</form>
    	
    	
    	
    	
    					<form action="{{ route('update.post') }}" method="post" enctype="multipart/form-data">
                                        Select image to upload:
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        <input type="submit" value="Upload Image" name="submit">
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        </form>
    	
    	
    	
    	
    	
    	
    	
    	
    	
    	
  		</div>
    	
    	
		<label for="email" class="control-label">Your Email Address</label>
		<input disabled type="text" name="email" class="form-control" id="email" value="{{ Auth::user()->getEmailOrEmailAddress() }}">
    	
    	<form class="form-vertical" role="form" method="post" action="{{ route('profile.edit') }}">
    	
    	
    		<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    			<label for="first_name" class="control-label">Enter your first name</label>
    			<input type="text" name="first_name" class="form-control" id="first_name" value="{{ Request::old('first_name') ?: Auth::user()->first_name }}">
    			@if ($errors->has('first_name'))
    				<span class="help-block">{{ $errors->first('first_name') }}</span>
    			@endif
  		</div>
    	    	<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    			<label for="last_name" class="control-label">Enter your last name</label>
    			<input type="text" name="last_name" class="form-control" id="last_name" value="{{ Request::old('last_name') ?: Auth::user()->last_name }}">
    			@if ($errors->has('last_name'))
    				<span class="help-block">{{ $errors->first('last_name') }}</span>
    			@endif
  		</div>
  		<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">   		
    			<label for="location" class="control-label">Choose your location</label>
    			<input type="text" name="location" class="form-control" id="location" value="{{ Request::old('location') ?: Auth::user()->location }}">
    			@if ($errors->has('location'))
    				<span class="help-block">{{ $errors->first('location') }}</span>
    			@endif
  		</div>
  		<div class="form-group">
    			<button type="submit" class="btn btn-default">Update</button>
  		</div>
  		<input type="hidden" name="_token" value="{{ Session::token() }}" />
    	</form>
    	
    	<? echo  md5( strtolower( trim(Auth::user()->getEmailOrEmailAddress()))); ?>
    </div>
</div>



@stop


