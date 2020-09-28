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
			    <h2>Edit Manhole</h2>
		    </div>
        </header>

            <form method="POST" action="update/{{$edaerial->aerial_id}}" class="forms-sample">
              @csrf

              <label>Aerial Network ID</label>
              <input type="text" name="aerID" placeholder="Aerial Network ID" class="form-control" value="{{$edaerial->aerial_id}}">
              @error('aerID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital ID</label>
              <input type="text" name="digiID" placeholder="Digital ID" class="form-control" value="{{$edaerial->digi_id}}">
              @error('digiID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Function</label>
              <select name="fun"class="form-control" style="width:250px">
                <option value="{{$edaerial->funct}}" align="center">{{$edaerial->funct}}</option>
                <option value="Maintenance" align="center">Maintenance</option>
                <option value="Jointing Pitt" align="center">Jointing Pitt</option>
              </select>
              @error('fun')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Location</label>
              <input type="text" name="loc" placeholder="Location" value="{{$edaerial->location}}" class="form-control">
              @error('loc')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Lattitude</label>
              <input type="text" name="lat" placeholder="Lattitude" value="{{$edaerial->lat}}" class="form-control">
              @error('lat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Longitude</label>
              <input type="text" name="long" placeholder="Longitude" value="{{$edaerial->long}}" class="form-control">
              @error('long')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_aerial" class="button">Submit</button>  
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
