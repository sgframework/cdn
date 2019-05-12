@extends('layouts.root')
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>SunbulahGroup Administrators Area</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <!--<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>-->
    </head>
<div class="container">
    <div class="row justify-content-center">


    @if ( Auth::user()->is_permission == '0')
    <div style="padding-top:200px;padding-bottom:200px">
    <h3 class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> You don't have the right permissions to view this content, sorry!</h3>
        </div>

        @else

                    @auth



    <header class="header">


    </header>
    <script src="https://gist.github.com/sgframework/777536b600117a959c7acfac64bbeab1.js"></script>

    <!--<div class="col-md-12">
    <span style="float:left"><a class="btn btn-primary" href="{{ route('items.add') }}">+ Add Product</a></span>  &nbsp; &nbsp; &nbsp; <span style="float:center"><a class="btn btn-primary" href="{{ route('items.index') }}">List Products</a></span> &nbsp; &nbsp; &nbsp; <span style="float:right"><a class="btn btn-primary" href="/submit-rtv">Submit a RTV Request &rarr;</a></span><br /><hr />
           <form method="get" action="/add-item"><span><button type="submit" class="btn btn-primary">Submit a RTV Request</button></span> </form>   <span><form method="get" action="/items"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>    <span><form method="get" action="/submit-rtv"><button type="submit" class="btn btn-primary">Submit a RTV Request</button></form></span>
        </div>-->
    <div class="col-md-12">
        <div class="card">
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
</div>
            <button onclick="fun('orders')" class="w3-btn w3-block w3-black w3-left-align"><i class="fas fa-list"></i> Orders</button>
                <div id="orders" class="w3-container w3-hide">
                    <div style="padding-top:15px; text-align:center">
                        <a href="{{ route('orders.add') }}"><i class="fas fa-plus"></i> <span>New Order</span></a>
                        <!--<a href="{{ route('orders.urgent') }}"><i class="fas fa-plus"></i> <span>New Urgent Order</span></a>-->
                        <a href="{{ route('root.orders.all') }}"><i class="fas fa-list"></i> <span>All Orders</span></a>
                        <a href="{{ route('orders.index') }}"><i class="fas fa-list"></i> <span>Edit Orders</span></a>
                        <a href="{{ route('orders.index') }}"><i class="fas fa-link"></i> <span>Important Links</span></a>
                </div>
        </div>
            <script>
                function fun(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
                }
            </script>
            </div>



        <div class="card">
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right">
</div>
            <button onclick="fun('export')" class="w3-btn w3-block w3-black w3-left-align"><i class="fas fa-file-export"></i> Export Reports</button>
        <div id="export" class="w3-container w3-hide">
            <div style="padding-top:15px; text-align:left">
                <ul>
                    <li><a href="{{ url('/export-orders-csv/today') }}"><i class="fas fa-download"></i></i> All Todays Orders Report CSV</a></li>
                    <li><a href="{{ url('/export-orderitems-csv/today') }}"><i class="fas fa-download"></i></i> All Todays Order Items Report CSV</a></li>
                    <li><a href="{{ url('/export-orders-orderitems-csv/today') }}"><i class="fas fa-download"></i></i> All Todays Orders + Items Report CSV</a></li>
                    <li><a href="{{ url('/export-orders-orderitems-csv/excel') }}"><i class="fas fa-save"></i></i> All Todays Orders + Items copy & paste => excel</a></li>
                    
                </ul>
            </div>

        </div>
        <div style="padding-top:10px;padding-left:10px;padding-bottom:10px">
            @if (!$todayssubmittedorders->count())
                There are no submitted orders to be exported.
            @else
            <li><a href="{{ url('/export-orders-orderitems-csv/submitted/to/completed') }}"><i class="fas fa-save"></i></i> All Todays Submitted Orders + Items copy & paste => excel <span style="font-size:9px">Change orderstatus => 'Completed'</span></a></li>
            <ul>Ready to be exported {{ $todayssubmittedorders->count() }} orders from {{ $userorders->count() }} user</ul>
            @endif
        </div>
            <script>
                function fun(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
                }
            </script>
            </div>

            </div>




            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-12">








        <div class="card">
        <button onclick="fun('products')" class="w3-btn w3-block w3-black w3-left-align"><i class="fas fa-list"></i> Products</button>
            <div id="products" class="w3-container w3-hide">
                <div style="padding-top:15px; text-align:center">
                    <a href="{{ route('items.add') }}"><i class="fas fa-plus"></i> <span>Add Product</span></a>
                    <a href="{{ route('items.index') }}"><i class="fas fa-list"></i> <span>All Products</span></a>
                </div>
            </div>
            <script>
                function fun(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
                }
            </script>
        </div>
            </div>
                </div>












        <div class="card">
            <!--<div class="top-left">
	<a href="{{ url('/') }}">SunbulahGroup</a>
	</div>-->
    <div class="top-right links">
</div>
            <button onclick="fun('branches')" class="w3-btn w3-block w3-black w3-left-align"><i class="fas fa-list"></i> Branches</button>
                <div id="branches" class="w3-container w3-hide">
                <div style="padding-top:15px; text-align:center">
                    <a href="{{ route('branches.add') }}"><i class="fas fa-plus"></i> <span>Add Branch</span></a>
                    <a href="{{ route('branches.index') }}"><i class="fas fa-list"></i> <span>All Branches</span></a>
            </div>
        </div>
                <script>
                function fun(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
                }
                </script>
            </div>

        <div class="card">
                <button onclick="fun('management')" class="w3-btn w3-block w3-black w3-left-align"><i class="fas fa-cogs"></i> Management</button>
                    <div id="management" class="w3-container w3-hide">
                    <div style="padding-top:15px; text-align:center">

                    <a href="/mail"><i class="fas fa-envelope"></i> <span>Mail</span></a>&nbsp;&nbsp;
                    <a href="{{route('root.mysql')}}"><i class="fas fa-database"></i> <span>Manage DB</span></a>&nbsp;&nbsp;
                    <a href="{{ route('root.stats.totals') }}"><i class="far fa-chart-bar"></i> <span>Comprehensive Statistics</span></a>&nbsp;&nbsp;
                    <a href=""><i class="fas fa-user-cog"></i> <span>Manage Users</span></a>&nbsp;&nbsp;
                    <a href=""><i class="fas fa-lock"></i> <span>Manage Access Level</span></a>&nbsp;&nbsp;
                    <a href=""><i class="fas fa-random"></i> <span>Manage Routes</span></a>&nbsp;&nbsp;
                    <a href=""><i class="fas fa-exclamation-triangle"></i> <span>Manage Notifications</span></a>&nbsp;&nbsp;
                    <a href="{{ route('root.tree') }}"><i class="fas fa-info fa-fw"></i> <span>Tree</span></a>&nbsp;&nbsp;
                    <a href="/root/readme#manual"><i class="fa fa-book"></i><span id="manual"> SunbulahGroup Framework Manual V0.01</a></span>
                    <a href="/root/readme-v0.03"><i class="fa fa-book"></i><span id="manual"> SunbulahGroup Framework Manual V0.02</a></span>
                    
            </div>
        </div>
                <script>
                function fun(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
                }
                </script>
            </div>
                </div>
                    </div>
                    <!-- If user loggedIn show below content until endShow part 
                    //
                    //
                    //
                    // endShow -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@else
            <!-- If user loggedOut show below content until endShow part -->          
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
                        <!--@if (Route::has('register'))
                            <a style="float:right" href="{{ route('register') }}">Register</a>
                        @endif-->
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
