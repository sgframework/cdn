@extends('layouts.app')
@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            @if (Route::has('login'))
                    @auth
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
        <div class="card-header"><b>+Create New Order</b></div>
            <div class="card-body">
            <!-- If user loggedIn show below content until endShow part 
            //
            //
            //
            // endShow -->
@markdown
## Create a new order form ##


#### Steps Overview ####

+ Step One
    - Insert PO Number and Branch Number, can't be empty.
+ Step Two
    - Insert items for that same entered PO Number.



### Step 1 ###

**Type in PO Number and select a Branch.**

---------------------------------------

##### **{{ Auth::user()->name }}#&nbsp;{{ Auth::user()->idnumber }}**


@endmarkdown

                <form class="form-inline" method="POST" action="{{ route('orders.insert.step1') }}">
                @csrf
                    <label hidden style="padding-left:20px" for="staffname">Name:</label>
                        <input hidden class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />
                    </label>
                    <label hidden for="staffid">ID#</label>
                        <input hidden class="form-control" type="number" class="input" name="staffid" value="{{ Auth::user()->idnumber }}" />&nbsp;&nbsp;&nbsp;
                    </label>
                        <input class="form-control" width="20px" type="number" id="ponumber" placeholder="PO#" name="ponumber">&nbsp;&nbsp;&nbsp;
                                <select name="branchnumber" class="form-control">
                                <option value="empty">Select Branch</option>
                                @foreach($branches as $branch)
                                <option value="{{$branch->branchnumber}}">{{ $branch->branchnumber }}&nbsp;&nbsp;{{ $branch->branchname }}</option>
                                @endforeach      
                              <input class="form-control" type="text" class="form-control" name="slug" value="api" />
                            </select>&nbsp;&nbsp;&nbsp;
                        <span style="color:red"> Urgent</span>&nbsp;&nbsp;&nbsp;<input id="urgent" type="checkbox" name="urgent">
                    <div style="float:right; padding-left:90px"><button type="submit">Next</button></div>
                </form><br /><hr />
@markdown
`You can see full documentation` [here][docs].

[docs]: http://ipool.remotewebaccess.com/docs
@endmarkdown
                <pre style="float:right">{{ now() }}</pre>
                        @else
            <!-- If user loggedOut show below content until endShow part -->            
            <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">                 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                        @if (Route::has('register'))
                            <a style="float:right" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <!-- endShow -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


