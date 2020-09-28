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
			    <h2>New Joint Closure</h2>
		    </div>
        </header>


        <form method="POST" action="{{route('digi_store_joint_closure')}}" class="forms-sample">
            @csrf

            <label>Joint Closure Name</label>
            <input type="text" name="cloID" placeholder="Joint Closure Name" class="form-control">
            @error('cloID')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Digital ID</label>
            <input type="text" name="DigiID" placeholder="Digital ID" value="{{$id}}" class="form-control" readonly>
            @error('DigiID')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Main Exchange</label>
            <input type="text" name="exchange" placeholder="Main Exchange" class="form-control">
            @error('exchange')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Joint Closure Function</label>
		    <select name="cloType" id="Closure" class="form-control" style="width:250px">
            <option align="center">-- Select Closure Function --</option>
		    <option value="Backhaul" align="center">Backhaul</option>
            <option value="Feeder" align="center">Feeder</option>
            <option value="Aggregation" align="center">Aggregation</option>
            <option value="Distribution" align="center">Distribution</option>
            <option value="Access" align="center">Access</option>
            </select>
            @error('cloType')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Work Point</label>
            <select name="pos" class="form-control" style="width:250px">
		    <option value="Manhole" align="center">Manhole</option>
            <option value="Aerial Network" align="center">Aerial Network</option>
            </select>
            @error('pos')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Work Point Name</label>
            <input type="text" name="posID" placeholder="Manhole/Aerial Network Name" class="form-control">
            @error('mID')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <button type="store_joint_closure" class="button">Submit</button>  
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
