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

    
    
    <div class="container">
	<h2>Shorten URL</h2>
	<form action="" method="post">
		<input type="url" name="url" placeholder="Enter a URL" />
		<input type="submit" class="btn btn-primary" value="Shorten" />
		<input type="hidden" name="_token" value="{{ Session::token() }}" />

	</form>
	
</div>


<!-- Back top -->
<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>

    </body>
	@include('templates.partials.footer')
	@include('scripts.index')


</html>