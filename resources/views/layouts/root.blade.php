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
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
    <script src="{{ asset('js/chosen.jquery.js') }}" defer></script>
    <script src="{{ asset('js/init.js') }}" defer></script>
    
            <script src="{{ asset('js/prism.js') }}" defer></script>

    
    <!--JUST ENABLED-->
    
    <script src="https://code.jquery.com/jquery-1.7.2.js"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}" defer></script>

    <!--JUST ENABLED-->
    
    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">

    <!--JUST DISABLED-->
    <!--
        <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/github-markdown.css') }}">
            <script src="{{ asset('js/jush.js') }}" defer></script>
    <link href="{{ asset('css/jush.css') }}" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

            <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/pilcrow.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/hljs-github.min.css') }}"/>
    <link rel="stylesheet" href="/vendor/emojione/sprites/emojione-sprite-{{ config('emojione.spriteSize') }}.min.css"/>
    
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    
    <link rel="stylesheet" href="{{asset('css/xterm.css')}}" />
    <script src="{{asset('js/xterm.js')}}"></script>
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>

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

    
    <style>


#navbar {
  overflow: hidden;
  padding: 40px 5px;
  transition: 0.4s;
  position: fixed;
  width: 100%;

  top: 0;
  z-index: 20;
}

#navbar a {
  float: left;
  text-align: left;
  padding: 12px;
  text-decoration: none;
  font-size: 10px; 
  line-height: 25px;
  border-radius: 4px;
}

#navbar #logo {
  font-size: 18px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: dodgerblue;
  color: white;
}

#navbar-right {
  float: right;
}


  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}
</style>
</head>
<body>
<div id="navbar">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                    <a style="font-size:12px" class="navbar-brand" href="{{ url('/root') }}" id="logo">
                    <img width="22px" height="22px" src="{{ asset('image/sgimg.png') }}" />
                    {{ config('app.name', 'SunbulahGroup') }} Admins Portal
                </a>
                <div class="collapse navbar-collapse"  id="navbar-right">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fas fa-home"></i> Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/root/users/orders/all"><i class="fas fa-random"></i> WorkFlow </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/root/users/orders/stats"><i class="far fa-chart-bar"></i> Stats </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/root/readme-v0.03"><i class="fas fa-info fa-fw"></i> Docs </a>
          </li>
            @if ( Auth::user()->is_permission == '1')
            <span class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.manager', ['id' => Auth::user()->idnumber]) }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </span>
            @elseif ( Auth::user()->is_permission == '2')
            <span class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.admin', ['id' => Auth::user()->idnumber]) }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </span>
            @endif    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter"></i> Browse</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="/root/users"><i class="fas fa-users"></i> Users</a>
            <a class="dropdown-item" href="{{ route('items.index') }}"><i class="fa fa-list-alt"></i> Items</a>
              <a class="dropdown-item" href="{{ route('branches.index') }}"><i class="far fa-id-card"></i> Customers</a>
              <a class="dropdown-item" href="#"><i class="fas fa-dollar-sign"></i> Orders</a>
            </div>
          </li>
          <!--<li class="nav-item">
            <div style="padding-left:20px">
                <a id="logout" class="nav-link" style="font-size:12px" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ \Auth::user()->name }}
                    {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
          </li>-->
        </ul>
        <form class="form-inline my-2 my-lg-0 " role="search" action="{{ route('search.orders') }}">
          <input class="form-control my-2 my-sm-0 mr-sm-2" name="query" type="text" placeholder="Search" aria-label="Search">
                <input style="background-color:#3490dc;padding:6px;" type="submit" value="Search DB" class="btn btn-primary" />
        </form>
      </div>
    </nav>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "10px 5px";
    document.getElementById("logo").style.fontSize = "10px";
    document.getElementById("logout").style.fontSize = "10px";

  } else {
    document.getElementById("navbar").style.padding = "12px 6px";
    document.getElementById("logo").style.fontSize = "12px";
    document.getElementById("logout").style.fontSize = "12px";
  }
}
</script>

                           <!-- Right Side Of Navbar -->
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </nav>
        <div style="padding-bottom:80px"></div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @if(Session::has('message'))
<script>
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    } 
    </script>
    @endif
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