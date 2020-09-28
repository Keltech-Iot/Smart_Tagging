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
			<h2>Edit Closure Fibre</h2>
            <div align="center"><h4>Joint Closure: {{$edclofib->closure_id}}</h4>
            <h4>Tray Number: {{$edclofib->tray_number}}</h4>
            <h4>Fibre No.: {{$edclofib->fibre_upstream}}</h4></div>
		</div>
    </header>

            <form method="post" action="update/{{$edclofib->fibre_upstream}}">
                @csrf
                <div class="form-group">
                    <label>Closure Name</label>
                    <input type="text" name="cloID"  class="form-control" value="{{$edclofib->closure_id}}" placeholder=" Closure ID" readonly>
                </div>
                <br/>
                <div class="form-group">
                    <label>Tray Number</label>
                    <input type="text" name="tNum"  class="form-control" value="{{$edclofib->tray_number}}" placeholder="Tray Number" readonly>
                </div>
                <br/>
              <hr>
              <h2 align="center" style="color:#f54242">Upstream</h2><br/>
              <div class="row gtr-uniform">
                   <div class="col-6 col-12-xsmall">
                        <label>Fibre Number</label>
                        <input type="text" name="fibNum"  class="form-control" value="{{$edclofib->fibre_upstream}}" placeholder="Fibre Upstream Number" readonly>
                    </div>
                    <br/>
                    <div class="col-6 col-12-xsmall">
                        <label>Cable Name</label>
                        <input type="text" name="UpCable"  class="form-control" value="{{$edclofib->upstream_cable}}" placeholder="Upstream Cable" >
                    </div>
                    <br/>
                    <div class="col-6 col-12-xsmall">
                        <label>Circuit Information</label>
                        <input type="text" name="UpData"  class="form-control" value="{{$edclofib->upstreamData}}" placeholder="Upstream Circuit Info"/>
                    </div>
                    <br/>
               </div>
               <hr>
              <br/>
              <div align="center"><h2>---Spliced To---</h2></div>
              <br/>
              <hr>
              <h2 align="center" style="color:#42f545">Downstream</h2>
              <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label>Fibre Number</label>
                        <input type="text" name="fibDown"  class="form-control" value="{{$edclofib->fibre_downstream}}" placeholder="Fibre Downstream"/>
                    </div>
                    <br/>
                    <div class="col-6 col-12-xsmall">
                        <label>Cable Name</label>
                        <input type="text" name="DownCable"  class="form-control" value="{{$edclofib->downstream_cable}}" placeholder="Downstream Cable"/>
                    </div>
                    <br/>
                    <div class="col-6 col-12-xsmall">
                        <label>Circuit Information</label>
                        <input type="text" name="DownData"  class="form-control" value="{{$edclofib->downstreamData}}" placeholder="Fibre Downstream Number"/>
                    </div>
                </div>
                <br/>
                <button type="edit_clofib" class="button">Submit</button>
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
