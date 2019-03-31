@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
				<h5>Edit your profile</h5>
				<hr />
				<div class="container">
					<div class="row justify-content-left">
						<div class="col-md-5">
							<div class="card">
								<div class="card-header">
								<label for="imgupdate" class="control-label">Update your profile picture</label>

								<div class="card-body">
								</div>
									<div class="row">
										<div class="col-md-8" style="padding-left:30px">
											<form action="{{ route('photo.edit') }}" method="post" enctype="multipart/form-data">
												<div class="form-group">   									
													<img class="media-object" alt="{{ Auth::user()->name() }}" src="{{ asset('images/uploads/avatars') }}/{{ Auth::user()->photo }}" style="width:120px; height:120px; float:center; border-radius:50%; margin-right:25px;">
												</div>
													<br />
													<input type="file" name="fileToUpload" id="fileToUpload"><br />
													<input class="btn btn-info" type="submit" value="Upload Image" name="submit">
													<input type="hidden" name="_token" value="{{ Session::token() }}">
											</form>    	
										</div>
									</div>
								</div>
							</div>
						</div>
					<div class="col-md-7">
						<div class="card">
							<div class="card-header">
								<label for="imgupdate" class="control-label"><h5>Update your personal information</h5></label>
							<div class="card-body">
							</div>
						<div class="row">
							<div class="col-md-12" style="padding-left:30px">
									<div class="form-group">   									
									</div>
										<!--<label hidden disabled for="email" class="control-label">Your Email Address</label>
										<input hidden disabled type="email" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: Auth::user()->email }}">-->
								<form class="form-vertical" role="form" method="post" action="{{ route('profile.edit') }}">
									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
										<label for="name" class="control-label">Enter your name</label>
										<input type="text" name="name" class="form-control" id="name" value="{{ Request::old('name') ?: Auth::user()->name }}">
								@if ($errors->has('name'))
									<span class="help-block">{{ $errors->first('name') }}</span>
								@endif
							</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="email" class="control-label">Edit your email:</label>
								<input type="email" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: Auth::user()->email }}">
								@if ($errors->has('email'))
									<span class="help-block">{{ $errors->first('email') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">   		
							<label for="phonenumber" class="control-label">Update your phone number</label>
							<input type="number" name="phonenumber" class="form-control" id="phonenumber" value="{{ Request::old('phonenumber') ?: Auth::user()->phonenumber }}">
								@if ($errors->has('phonenumber'))
									<span class="help-block">{{ $errors->first('phonenumber') }}</span>
								@endif
							</div>
								<div class="form-group">
									<div  style="padding-left:30px"><button type="submit" class="btn btn-info">Update</button></div>
								</div>
							<input type="hidden" name="_token" value="{{ Session::token() }}" />
							</form>			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection


