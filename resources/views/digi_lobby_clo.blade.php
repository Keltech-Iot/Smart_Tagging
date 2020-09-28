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
				<h2>Joint Closure: {{$cloID}}</h2>
			</div>
        </header>
    </article>
    <article class="mini-post" align="center">
        <h3 class="title">Cables</h3>
        <ul class="list">
            <li>Cable ID</li>
            <li>Cable Name</li>
            <li>Status</li>
            <li>Function</li>
            <li>Cable Type</li>
            <li>Fibre Size</li>
        </ul>
        <a href="cables/{{$cloID}}" class="button">View Cables</a>
    </article>
    <article class="mini-post" align="center">
        <h3 class="title">Fibre Schedule</h3>
            <ul class="list">
            <li>Closure ID</li>
            <li>Tray Number</li>
            <li>Cable ID</li>
            <li>Upstream Data</li>
            <li>Dowwnstream Data</li>
        </ul>
        <a href="trays/{{$cloID}}" class="button">View Schedule</a>
    </article>
    <article class="mini-post" align="center">
        <h3 class="title">Quality Assurance</h3>
        <ul class="list">
            <li>Job ID</li>
            <li>Manhole Id</li>
            <li>Closure Id</li>
            <li>Tray Number</li>
            <li>Splice Tray Photo</li>
            <li>Completed Job Photo</li>
            <li>Additional Job Information</li>
            <li>Digital Signature</li>
            <li>Updated At</li>
        </ul>
        <a href="qa_job/{{$cloID}}" class="button">Click Here</a>
    </article>
</div>
<script src="{{asset('TempAssets/js/jquery.min.js')}}"></script>
<script src="{{asset('TempAssets/js/browser.min.js')}}"></script>
<script src="{{asset('TempAssets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('TempAssets/js/util.js')}}"></script>
<script src="{{asset('TempAssets/js/main.js')}}"></script>
 </body>
</html>
