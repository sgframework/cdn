<!DOCTYPE html>
<html lang="en">
<head>
@include('styles.index')
   <title>404 Error | Redirect</title>
</head>
<body>
<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

	@include('templates.partials.navigation')
    <div class="container">
        @include('templates.partials.alerts')
        @yield ('content')
    </div>
<section id="home" class="main-error parallax-section">
<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>
     <div class="overlay"></div>
     <div id="particles-js">
     </div>
     <div class="container">
          <div class="row">
               <div class="noselect col-md-12 col-sm-12">
			<div class="content-block">
			   <center>
			   <div class="above"></div>
			   <section class="danger">
			   <i style="font-size:48px; color: green;" class="glyphicon glyphicon-lock"></i>
			   <span style="font-size:48px; font-weight:bold;"> Access Restricted</span>
			   <br />
			   <br />
			   <br />
			   <span style="font-weight:bold;">You don`t have the right permessions to access this page.</span>
			   <br />
			   <br />
		<span style="font-size:10px;">If you are already a member ? <a href="{{ route('auth.signin') }}">
		<i class="glyphicon glyphicon-user"> Login HERE.</i></a></span>				
		<span style="font-size:10px;">Don`t have an account? <a href="{{ route('auth.signup') }}">
		<i class="glyphicon glyphicon-lock"> Create one from HERE.</i></a></span>
			</section>
		</center>
         </div>
  </div>
</div>
<!-- Back top -->
<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>
    </body>
<footer>
<div id="footer" style="margin-top: 120px;"><?php 
echo '<p class="pull-left" style="font-size:10px; padding-top:20px; padding-left:10px;">Copyright &copy; 2016-' . date("Y") . ' <a href="https://silcroot.com/Async">silcroot.com</a></p>';
echo '<div class="pull-right">
          <ul class="list-inline" style="font-size:12px; padding-top:20px; padding-right:10px;">
             <li><a href="#">Pricing</a></li>
             <li><a href="#">Contact</a></li>
             <li><a href="#">Terms</a></li>
                          <li><a href="#">Pricing</a></li>
             <li><a href="#">Contact</a></li>
             <li><a href="#">Terms</a></li>
          </ul>
      </div>';
?></div>
</footer>
	@include('scripts.index')
</html>