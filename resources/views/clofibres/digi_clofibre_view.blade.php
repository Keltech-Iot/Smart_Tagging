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
				<h2 align="center">Node Termination Record</h2>

                @foreach($cloFib as $title)
                <p>
                        <h5>Joint Closure Name: <strong>{{$title->closure_id}}</strong></h5>
                        <h5>Tray Number: <strong>{{$title->tray_number}}</strong></h5>
                    </div>

                    <div class="meta">
                        <p><strong>Last Updated: </strong>{{$title->updated_at}}</p><br/>
                        <a href="digi_edit/{{$title->upstream_cable}}/{{$title->fibre_upstream}}" class="button">Edit</a>
                    </div>
                </p>
                @endforeach
        </header>
        <h2 align="center" style="color:#f54242">Upstream</h2>
        <table class="table">
            <thead>
                <tr>
                    <th width="45%"><strong>Fibre Number</strong></th>
                    <th width="40%"><strong>Cable Name</strong></th>
                    <th><strong>Circuit Information</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($cloFib as $r)
                    <td>{{$r->fibre_upstream}}</td>
                    <td>{{$r->upstream_cable}}</td>
                    <td>{{$r->upstreamData}}</td>
                @endforeach
                </tr>
            </tbody>
        </table>
        <hr>
             <div align="center"><h2>--- Spliced To ---</h2></div>
        <hr>
         <h2 align="center" style="color:#42f545">Downstream</h2>
            <table class="table">
                    <thead>
                        <tr>
                            <th width="45%"><strong>Fibre Number</strong></th>
                            <th width="40%"><strong>Cable Name</strong></th>
                            <th><strong>Circuit Information</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($cloFib as $row)
                            <td>{{$row->fibre_downstream}}</td>
                            <td>{{$row->downstream_cable}}</td>
                            <td>{{$row->downstreamData}}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
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
