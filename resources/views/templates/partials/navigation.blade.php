<style>
    body{
  background: #000;
  padding-top: 10px;
} 

p.logo {
  color: lime; 
  font-family: "Courier";
  font-size: 20px;
  margin: 10px 0 0 10px;
  white-space: nowrap;
  overflow: hidden;
  width: 10em;
  animation: type 2s steps(24, end); 
}

p:nth-child(2){
  animation: type 0s steps(0, end);
}

p a{
  color: lime;
  text-decoration: none;
}

span.logo {
  animation: blink 1s infinite;
}

@keyframes type{ 
  from { width: 0; } 
} 

@keyframes type2{
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; } 
} 

@keyframes blink{
  to{opacity: .0;}
}

::selection{
  background: black;
}
    </style>
    
    <nav class="nav navbar-default dark" role="navigation" style="background-color:rgb(0, 0, 0);">
        <div id="logo"><a class="navbar-brand" href="{{ route('home') }}"><p class="logo">M . o . B </p><p class="logo">   MenOfBusiness<span class="logo">|</span></p></a></div>
        <label for="drop" class="toggle"><i class="glyphicon glyphicon-menu-hamburger right"></i></label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
            
             @if (Auth::check())
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Async</a></li>
            </ul>
        <form class="navbar-form navbar-left" role="search" action="{{ route('search.results') }}">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Find People">
            </div>
            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </form>
                       @endif
                 
                <ul class="nav navbar-nav navbar-right">
    
            </ul> 	
		                <li>
		
		                <!-- First Tier Drop Down -->
		                <label for="drop-2" class="toggle">Web Design +</label>
		                <a href="#">Web Design</a>
		                <input type="checkbox" id="drop-2"/>
				                <ul>
				                    <li><a href="">/{user}/status/{slug}</a></li>
				                    <li><a href="">getStatusBySlug</a></li>
				                    <li>
				                       
				                    <!-- Second Tier Drop Down -->        
				                    <label for="drop-3" class="toggle">Tutorials +</label>
				                    <a href="#">Tutorials</a>         
				                    <input type="checkbox" id="drop-3"/>
				
				                    <ul>
				                        <li><a href="#">HTML/CSS</a></li>
				                        <li><a href="#">jQuery</a></li>
				                        <li><a href="#">Other</a></li>
				                    </ul>
				                    </li>
				             </ul>
		                </li>
                <li><a href="#">Graphic Design</a></li>
                <li><a href="#">Inspiration</a></li>
                <li><a href="#">Contact</a></li>








  			<li>
		@if (Auth::check())
		            <!-- First Tier Drop Down -->
		            <label for="drop-1" class="toggle"><span>{{ Auth::user()->getNameOrUsername() }}</span></label>
		            
		               
		               
		               <a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername() }}</a>
		               <img class="media-object" alt="" src="https://silcroot.com/Async/public/images/uploads/avatars/{{ Auth::user()->avatar }}" style="width:40px; height:40px; float:left; border-radius:50%;"> 
		         		            <input type="checkbox" id="drop-1"/>
			
				    <ul class="dropdown-menu-right" style="text-align: right;">
				   
					 <li><a href="{{ route('profile.edit') }}">Update Profile</a></li>
					 <li><a href="{{ route('friend.index') }}">Friends</a></li>
      		   			 <li><a href="{{ route('auth.signout') }}">Sign out <i class="glyphicon glyphicon-log-out"></i></a></li>
				    </ul>
                  </li> 	
                    @else
                    <li><a href="{{ route('auth.signup') }}">Sign up</a></li>
                    <li><a href="{{ route('auth.signin') }}">Sign in</a></li>
                    @endif  







 
            </ul>
            
            </ul>
            
         </div>
                           

        </nav>

