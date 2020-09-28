<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<meta name="description" content="">
<meta name="author" content="">
<title>Keltech Iot</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUIyJ" crossorigin="anonymous">
<!-- Custom styles for this template -->
<link href="{{asset('css/album.css')}}" rel="stylesheet">
<head>
	<title>Keltech Iot</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('TempAssets/css/main.css')}}" />
    
</head>
<body>
<div id="wrapper">

<!-- Header -->
    <header id="header">
   
	    <nav class="main">
		    <ul>
			    <li class="menu">
				    <a class="fa-bars" href="#menu">Menu</a>
			    </li>
		    </ul>
	    </nav>
        <nav class="main">
            <div align="center"><span class="image fit"><a href="javascript:history.back()"><img src="{{asset('images/icons/back_1.png')}}"/></a></span></div>
        </nav>
    </header>

    <section id="menu">

         <!-- Actions -->
		<section>
			<ul class="actions stacked"  align="center">
				
               <li> <a class="button" href="{{route('digi_work_orders')}}">Work Orders</a></li>
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
		</section>
	</section>

    <div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Edit Splitter: <br/>{{$edspl->splitter_name}}</h2>
                <h4>Work Point: {{$edspl->wp_name}}</h4>
		    </div>
        </header>

            <form method="POST" action="{{route('digi_update_splitter', ['splID'=>$edspl->splitter_name])}}" class="forms-sample">
              @csrf

              <label>Splitter Name</label>
              <input type="text" name="splID" placeholder="Splitter Name" value="{{$edspl->splitter_name}}" class="form-control">
              @error('manID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Work Point Name</label>
              <input type="text" name="wp" placeholder="Closure Name" class="form-control" value="{{$edspl->wp_name}}" readonly>
              @error('cloID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Main Exchange</label>
              <input type="text" name="exchange" placeholder="Main Exchange" value="{{$edspl->main_exchange}}" class="form-control">
              @error('upNode')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Type</label>
              <select name="type" class="form-control" style="width:250px">
                <option value="{{$edspl->type}}" align="center">{{$edspl->type}}</option>
                <option value="1x2" align="center">1x2</option>
                <option value="1x4" align="center">1x4</option>
                <option value="1x8" align="center">1x8</option>
                <option value="1x16" align="center">1x16</option>
                <option value="1x32" align="center">1x32</option>
                <option value="1x64" align="center">1x64</option>
                <option value="2x2" align="center">2x2</option>
                <option value="2x4" align="center">2x4</option>
                <option value="2x8" align="center">2x8</option>
                <option value="2x16" align="center">2x16</option>
                <option value="2x32" align="center">2x32</option>
                <option value="2x64" align="center">2x64</option>
              </select>
              @error('type')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Port/Tray Number</label>
              <input type="text" name="fixPoint" placeholder="Port Number" value="{{$edspl->fixation_point}}" class="form-control">
              @error('trayNum')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="update_splitter" class="btn btn-success btn-fw">Submit</button>  
            </form>            
       </article>
    </div>

</div>
<script src="{{asset('TempAssets/js/jquery.min.js')}}"></script>
<script src="{{asset('TempAssets/js/browser.min.js')}}"></script>
<script src="{{asset('TempAssets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('TempAssets/js/util.js')}}"></script>
<script src="{{asset('TempAssets/js/main.js')}}"></script>
 </body>
</html>
