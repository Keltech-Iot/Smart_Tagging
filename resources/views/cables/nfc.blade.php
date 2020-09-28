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
				<h2>Cable: {{$info->cable_id}}</h2>
                <h4>{{$junct}}: {{$info->junction_id}}</h4>
			</div>
        </header>
        
        <table class="table">
            <tr>
                <th><strong>Cable Name</strong></th>
                <td>{{$info->cable_id}}</td>
            </tr>
            <tr>
                <th><strong>{{$junct}} Name</strong></th>
                <td>{{$info->junction_id}}</td>
            </tr>
            <tr>
                <th><strong style="color:#f01111">Upstream Node</strong></th>
                <td>{{$info->upstream_info}}</td>
            </tr>
            <tr>
                <th><strong style="color:#11f02f">Downstream Node</strong></th>
                <td>{{$info->downstream_info}}</td>
            </tr>
            <tr>
                <th><strong>Cable Type</strong></th>
                <td>{{$info->cable_type}}</td>
            </tr>
            <tr>
                <th><strong>Fibre Type</strong></th>
                <td>{{$info->fibre_type}}</td>
            </tr>
            <tr>
                <th><strong>Function</strong></th>
                <td>{{$info->function}}</td>
            </tr>
            <tr>
                <th><strong>Status</strong></th>
                <td> @if($info->status == "Active")
                <a style="color:#42f545"> Active </a>
                @elseif($info->status == "Reserved")
                <a  style="color:#f5ce42">Reserved</a>
                @elseif($info->status == "Disabled")
                <a  style="color:#f54242">Disabled</a>
                @else
                <a>Available</a>
                @endif</td>
            </tr>
            <tr>
                <th><strong>Last Updated</strong></th>
                <td>{{$info->updated_at}}</td>
            </tr>
        </table><br/>
        <div align="center"><a href="edit_cable/{{$info->cable_id}}" class="button">Edit</a></div><br/>
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
