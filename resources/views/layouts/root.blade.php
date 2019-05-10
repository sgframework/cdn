<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SunbulahGroup') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/chosen.jquery.js') }}" defer></script>
    <script src="{{ asset('js/prism.js') }}" defer></script>
    <script src="{{ asset('js/init.js') }}" defer></script>
    <script src="{{ asset('js/jush.js') }}" defer></script>



    <!--JUST ENABLED-->
    
    <script src="https://code.jquery.com/jquery-1.7.2.js"></script>
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link href="{{ asset('css/jush.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/emojione/sprites/emojione-sprite-{{ config('emojione.spriteSize') }}.min.css"/>

    <!--JUST ENABLED-->


    <!--JUST DISABLED-->
        <!--
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        -->
    <!--JUST DISABLED-->





    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

            <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">-->
    
    <!--<link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">-->
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                    <a class="navbar-brand" href="{{ url('/root') }}">
                    <img width="22px" height="22px" src="{{ asset('image/sgimg.png') }}" />
                    {{ config('app.name', 'SunbulahGroup') }} Admins Portal
                </a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/root/users/orders/all"><i class="fas fa-random"></i> WorkFlow </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard.index', ['id' => Auth::user()->idnumber]) }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter"></i> Browse</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#"><i class="fas fa-users"></i> Users</a>
            <a class="dropdown-item" href="#"><i class="fa fa-list-alt"></i> Items</a>
              <a class="dropdown-item" href="#"><i class="far fa-id-card"></i> Customers</a>
              <a class="dropdown-item" href="#"><i class="fas fa-dollar-sign"></i> Orders</a>
            </div>
          </li>
          <li class="nav-item">
          <div style="padding-left:40px">
          
          <a class="nav-link" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ \Auth::user()->name }}
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 " role="search" action="{{ route('search.orders') }}">
          <input class="form-control my-2 my-sm-0 mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
                <input style="background-color:#3490dc;padding:6px;" type="submit" value="Search DB" class="btn btn-primary" />
        </form>
      </div>
    </nav>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} ID# {{ Auth::user()->idnumber }}<span class="caret"></span>
                                </a></a>
                                <div class="dropdown dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-menu dropdown-menu-right" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                        @csrf
                                    </form>                                </div>

                                    </div>
            </div>                               <!--<div class="nav-item dropdown" aria-labelledby="navbarDropdown">
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
            <?='<span class="pull-left" style="font-size:10px; padding-left:0px;">Copyright &copy; ' . date("Y") . ' <a href="/">SunbulahGroup</a>.</span><span style="font-size:10px" class="copyright"> SA, Riyadh. C.R. 0001231212</span>';?>
            </div>     
        </div>
      </div>
    </footer>
</html>