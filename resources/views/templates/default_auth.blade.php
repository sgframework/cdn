<!DOCTYPE html>
<html lang="en">
<head>
@include('styles.index')
   <title>Async | Signin</title>
</head>
<body>

    
    
    
    <style>
    body {
    background-color: #444;
    margin: 0;
}    
#wrapper {
     width: 1005px;
     margin: 0 auto;
}
#leftcolumn, #rightcolumn {
    border: 1px solid white;
    float: left;
    min-height: 450px;
    color: white;
}
#leftcolumn {
     width: 250px;
     background-color: #111;
}
#rightcolumn {
     width: 750px;
     background-color: #777;
     background: url("./public/images/1200x1600.png");
}






html {
	    overflow: hidden;
}


/* Create three equal columns that floats next to each other */
.column {
    width: 75%;
 padding-right:20px;
   min-height: 700px;
    overflow:hidden;
}
.column1 {
    width: 100%;
    float: left;


    background-size: cover;
 outline: dashed 2px white;
 padding-top: 40px;

    min-height: 260px;

background-color: black;
}

















    	
    	
    	
    	
    	
    	
 .container {
    position: relative;
    font-family: Arial;
}

.text-block {
    position: absolute;
    top:100px;
    
    right: 50px;
    left: 50px;
    background-color:  rgba(0, 0, 0, 0.5);
    color: white;

  padding: 40px;
}






    </style>
 
 
 
    	
    	
    	
    	
    	
    	

<body>
  <img src="https://silcroot.com/Async/public/images/1200x1600.png" alt="Nature" style="width: 100%; 
    height: 100%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    z-index: -1;object-fit: cover;background-size: 100%;width:100%;">
  <div class="text-block">



   	<div class="row">
    	    	

  <div class="column1 col-sm-6">
    	
    	<form class="form-vertical" role="form" method="post" action="{{ route('auth.signin') }}">
    		<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    			<label for="username" class="control-label">Your Username</label>
    			<input styly="width:30px" type="text" name="username" class="form-control" id="username" value="">
    			@if ($errors->has('username'))
    				<span class="help-block">{{ $errors->first('username') }}</span>
    			@endif
  		</div>
    	    	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    			<label for="password" class="control-label">Enter your password</label>
    			<input styly="width:30px" type="password" name="password" class="form-control" id="password" value="">
    			@if ($errors->has('password'))
    				<span class="help-block">{{ $errors->first('password') }}</span>
    			@endif
  		</div>
  		
  		
  		<div class="checkbox">   		
			<label>
    			<input type="checkbox" name="remember"> Remeber me
    			</label>
  		</div>
  		<div class="form-group">
    			<center><button type="submit" class="btn btn-default">Sign in</button></center>
  		</div>
  		<input type="hidden" name="_token" value="{{ Session::token() }}" />
    	</form>
    </div>





  </div>


    
    
    
    
    


<!-- Back top -->
<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>

    </body>



</html>