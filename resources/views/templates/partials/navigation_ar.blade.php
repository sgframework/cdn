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
        <div id="logo"><a class="navbar-brand" href="{{ route('home') }}"><p class="logo">Async <span class="logo">|</span></p></a></div>
        <label for="drop" class="toggle"><i class="glyphicon glyphicon-menu-hamburger right"></i></label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
            
             @if (Auth::check())
            <ul class="nav navbar-nav">
                <li><a href="#">الصفحة الرئيسية</a></li>
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
		                <label for="drop-2" class="toggle">تصاميم الويب +</label>
		                <a href="#">تصاميم الويب</a>
		                <input type="checkbox" id="drop-2"/>
				                <ul>
				                    <li><a href="#">الأبحاث</a></li>
				                    <li><a href="#">الروابط</a></li>
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
                <li><a href="#">التصاميم</a></li>
                <li><a href="#">سير العمل</a></li>
                <li><a href="#">تواصل معنا</a></li>
                <li>
                
                    @if (Auth::check())
                    <label for="drop-4" class="toggle">الحساب الشخصي</label>
                    
                    <img style="border-radius: 30%; padding: 10px;" class="media-object" alt="{{ Auth::user()->getNameOrUsername() }}" src="{{ Auth::user()->getAvatarUrl() }}" />
		                <input type="checkbox" id="drop-4"/>
				                <ul class="dropdown-menu-right" style="text-align: right;">
				               		 <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername() }}</a></li>
							 <li><a href="{{ route('profile.edit') }}">تحديث الملف الشخصي</a></li>
							 <li><a href="{{ route('friend.index') }}">الأصدقاء</a></li>
	              		   			 <li><a href="{{ route('auth.signout') }}">تسجيل الخروج <i class="glyphicon glyphicon-log-out"></i></a></li>
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

