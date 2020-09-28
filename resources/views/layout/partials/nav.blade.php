
<!-- Header -->
    <header id="header">
        <div><span class="image fit"><a href="{{route('home')}}"><img src="/images/keltech_logo.jpg" height="54" width="250"/></a></span></div>
	    <nav class="links">
		    <ul>
                <li><a href="{{route('projects')}}">Projects</a></li>
                <li><a href="{{route('work_orders')}}">Work Orders</a></li>
			    <li><a href="{{route('manhole')}}">Manholes</a></li>
			    <li><a href="{{route('fibre_closure')}}">Joint Closures</a></li>
			    <li><a href="{{route('patchpanel')}}">ODF's</a></li>
			    <li><a href="{{route('aerial_network')}}">Aerial Networks</a></li>
			    <li><a href="{{route('index')}}">Index</a></li>
			    <li><a href="{{route('user')}}">Users</a></li>
		    </ul>
	    </nav>
        <nav class="main">
            <div align="center"><span class="image fit"><a href="javascript:history.back()"><img src="{{asset('images/icons/back_1.png')}}"/></a></span></div>
        </nav>
        
	    <nav class="main">
		    <ul>
			    <li class="menu">
				    <a class="fa-bars" href="#menu">Menu</a>
			    </li>
		    </ul>
	    </nav>
    </header>

    <section id="menu">

		<!-- Search -->
			<section>
				<form class="search" method="get" action="#">
					<input type="text" name="query" placeholder="Search" />
				</form>
			</section>

         <!-- Actions -->
		<section>
			<ul class="actions stacked"  align="center">
				
               <li> <a class="button" href="{{route('home')}}">Dashboard</a></li>
               <li> <a class="button" href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                         
                                    </form>
                </li>
			</ul>
        <div class="col-4" align="center"><span class="image fit"><img src="{{asset('images/keltech_logo.jpg')}}"/></span></div>
		</section>

	</section>
