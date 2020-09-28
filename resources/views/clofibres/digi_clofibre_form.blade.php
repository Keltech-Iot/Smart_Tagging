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
			<h2>New Closure Fibre</h2>
            <h4>Joint Closure: {{$cloID}}</h4>
            <h4>Fibre No.:{{$fibre_num}}</h4>
		</div>
    </header>


            <form method="POST" action="{{route('digi_store_cloFib')}}" class="forms-sample">
              @csrf

              <label>Closure Name</label>
              <input type="text" name="cloID" placeholder="Closure ID" value="{{$cloID}}" class="form-control" readonly>
              @error('cloID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Tray Number</label>
              <input type="text" name="tNum" placeholder="Tray Number" class="form-control">
              @error('tNum')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <hr>
              <h2 align="center" style="color:#f54242">Upstream</h2><br/>
              <div class="row gtr-uniform">
                  <div class="col-6 col-12-xsmall">
                      <label>Fibre Number</label>
                      <input type="text" name="FibUp" placeholder="Fibre Upstream" value="{{$fibre_num}}" class="form-control" readonly>
                      @error('FibUp')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <br/>
                  <div class="col-6 col-12-xsmall">
                      <label>Cable Name</label>
                      <input type="text" name="UpCable" placeholder="Upstream Cable" value="{{$cabID}}" class="form-control" readonly>
                      @error('UpCable')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <br/>
                  <div class="col-6 col-12-xsmall">
                      <label>Circuit Information</label>
                      <input type="text" name="UpData" placeholder="Upstream Circuit Info" class="form-control">
                      @error('UpData')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
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
                      <input type="text" name="DownFib" placeholder="Downstream Fibre" class="form-control">
                      @error('DownFib')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <br/>
                  <div class="col-6 col-12-xsmall">
                      <label>Cable Name</label>
                      <input type="text" name="DownCable" placeholder="Downstream Cable" class="form-control">
                      @error('DownCable')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <br/>
                  <div class="col-6 col-12-xsmall">
                      <label>Circuit Information</label>
                      <input type="text" name="DownData" placeholder="Downstream Circuit Info" class="form-control">
                      @error('DownData')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
               </div>
              <button type="store_cloFib" class="button">Submit</button>  
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
