<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SunbulahGroup') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="manifest" href="{{ asset('js/manifest.json') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!--<script type="text/javascript" src="https://ipool.remotewebaccess.com/wp-content/uploads/jquery-3.3.1.min.js"></script>-->
    <link rel="apple-touch-icon" href="{{ asset('image/sgimg.png') }}" />
    <link rel="apple-touch-startup-image" href="{{ asset('image/launcher-img.png') }}">
    <meta name="apple-mobile-web-app-title" content="SG Portal">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="{{ asset('image/sgimg.png') }}">
    <!-- Add to Homescreen -->
    <!--<link rel="stylesheet" type="text/css" href="https://ipool.remotewebaccess.com/wp-content/public/addtohomescreen.css">-->
    <!--<script src="https://ipool.remotewebaccess.com/wp-content/public/addtohomescreen.js"></script>-->
    <!--<script>
    addToHomescreen.removeSession();
    instance.clearSession();
    addToHomescreen();
    addToHomescreen({
        detectHomescreen: true
    });
    var a = addToHomescreen({
        onAdd: function () {
            alert('Welcome SunbulahGroup Framework, employees portal.');
        }
    });
    </script>-->
    <!-- Add to Homescreen -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img width="22px" height="22px" src="{{ asset('image/sgimg.png') }}" />
                    {{ config('app.name', 'SunbulahGroup') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav mr-auto">
                    
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <!--<span class="nav-item">
                    <a class="nav-link" href="">Browse All Products.</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="">Add Product</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="">Middle</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="">Middle</a>
                    </span>-->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!--@if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif-->
                        @else

                    <ul class="navbar-nav mr-auto">

                    <span class="nav-item">
                    <a class="nav-link" href="{{ route('items.index') }}">Browse Products</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="{{ route('branches.index') }}">Browse Branches</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">New Order</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="{{ route('rtv.index') }}">Submit RTV Form</a>
                    </span>
                    <span  style="padding-right:60px" class="nav-item">
                    <a class="nav-link" href="">Important Links.</a>
                    </span>
                    
                    </ul>
                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-menu dropdown-menu-right" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: block;">
                                        @csrf
                                    </form>                                </div>

                                    <!--<div class="nav-item dropdown" aria-labelledby="navbarDropdown">
                                    <a href=""><i class="fas fa-cogs"></i> Dashboard</a>
                                </div>
                                    <div class="nav-item dropdown" aria-labelledby="navbarDropdown">
                                    <a href=""><i class="fas fa-cogs"></i> Dashboard</a>
                                </div>
                                    <div class="nav-item dropdown" aria-labelledby="navbarDropdown">
                                    <a href=""><i class="fas fa-cogs"></i> Queries</a>
                                </div>
                                    <div class="nav-item dropdown" aria-labelledby="navbarDropdown">
                                    <a href=""><i class="fas fa-cogs"></i> Settings</a>
                                </div>-->

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<hr>
<footer class="footer">
      <div class="container">
        <div id="ftr-wrap">
            <div class="ftr-links">
                <ul class="ml-auto" style="float:right">                   
                   <span><a style="font-size:10px;" href="#">Terms</a></span>&nbsp;&nbsp;  | &nbsp;&nbsp;
                   <span><a style="font-size:10px;" href="#">Privacy Policy</a></span>&nbsp;&nbsp; | &nbsp;&nbsp;     
                   <span><a style="font-size:10px;" href="{{ route('root.index') }}">Sitemap</a></span>     
                </ul>
            </div>
            <div class="copyright-sunbulahgroup">
            <?='<span class="pull-left" style="font-size:10px; padding-left:0px;">Copyright &copy; ' . date("Y") . ' <a href="/">SunbulahGroub</a>.</span><span style="font-size:10px" class="copyright"> SA, Riyadh. C.R. 0001231212</span>';?>
            </div>     
        </div>
      </div>
    </footer>
</html>
