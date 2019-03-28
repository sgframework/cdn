<!DOCTYPE html>
<html lang="en">
<head>
@include('styles.index')
   <title>Async | Home</title>
</head>
<body>
	@include('templates.partials.navigation')
    <div class="container">
        @include('templates.partials.alerts')
        @yield ('content')
    </div>
<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
 	    <div id="particles-js">    
     	    </div>
</section>
    
<!-- Back top -->
<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>

    </body>
	@include('templates.partials.footer')
	@include('scripts.index')

</html>