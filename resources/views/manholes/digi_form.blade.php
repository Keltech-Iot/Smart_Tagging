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
			    <h2>New Manhole</h2>
		    </div>
        </header>

            <form method="POST" action="digi_store_manhole" class="forms-sample">
              @csrf

              <label>Manhole ID</label>
              <input type="text" name="manID" placeholder="Manhole ID" class="form-control">
              @error('manID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital ID</label>
              @if($details)
              <input type="text" name="digiID" placeholder="Digital ID" value="{{$details}}" class="form-control" readonly>
              @endif
              @error('digiID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Function</label>
              <select name="fun" id="manhole" class="form-control" style="width:250px">
                <option value="Maintenance" align="center">Maintenance</option>
                <option value="Jointing Pitt" align="center">Jointing Pitt</option>
              </select>
              @error('fun')
              <div>{{$message}}</div>
              @enderror
              <br/>      
              <label>Type</label>
              <select name="type" id="manhole" class="form-control" style="width:250px">
                <option value="Carraige Way" align="center">Carraige Way</option>
                <option value="Pedestrain" align="center">Pedestrian</option>
              </select>
              @error('type')
              <div>{{$message}}</div>
              @enderror
              <br/>         
              <label>Location</label>
              <input type="text" name="loc" placeholder="Location" class="form-control">
              @error('loc')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Latitude</label>
              <input type="text" name="lat" placeholder="Location" class="form-control">
              @error('lat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Longitude</label>
              <input type="text" name="lng" placeholder="Location" class="form-control">
              @error('lng')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_manhole" class="btn btn-success btn-fw">Submit</button>  
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
