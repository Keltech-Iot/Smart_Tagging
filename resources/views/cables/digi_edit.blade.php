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
			<h2>Edit Cable</h2>
		</div>
    </header>

    <form method="post" action="update/{{$edcable->cable_id}}">
        @csrf
        <div class="form-group">
            <label>Cable Name</label>
            <input type="text" name="cID"  class="form-control" value="{{$edcable->cable_id}}" placeholder=" Cable ID"/>
        </div>
        <br/>
        <div class="form-group">
            <label>Digital ID</label>
            <input type="text" name="DigiID"  class="form-control" value="{{$edcable->nfc_id}}" placeholder="Digital ID" readonly>
        </div>
        <br/>
        <div class="form-group">
            <label>Junction ID</label>
            <input type="text" name="jID"  class="form-control" value="{{$edcable->junction_id}}" placeholder="Junction ID"/>
        </div>
        <br/>
        <div class="form-group">
            <label style="color:#f01111">Upstream Node</label>
            <input type="text" name="upData"  class="form-control" value="{{$edcable->upstream_info}}" placeholder="Upstream Information"/>
        </div>
        <br/>
        <div class="form-group">
            <label style="color:#11f02f">Downstream Node</label>
            <input type="text" name="downData"  class="form-control" value="{{$edcable->downstream_info}}" placeholder="Upstream Information"/>
        </div>
        <br/>
        <div class="form-group">
            <label>Cable Type</label>
            <select name="fType" class="form-control" style="width:250px">
                <option align="center" value="{{$edcable->fibre_type}}">{{$edcable->fibre_type}}</option>
		        <option value="2 Fibre" align="center">2 Fibre</option>
                <option value="4 Fibre" align="center">4 Fibre</option>
                <option value="8 Fibre" align="center">8 Fibre</option>
                <option value="16 Fibre" align="center">16 Fibre</option>
                <option value="24 Fibre" align="center">24 Fibre</option>
                <option value="48 Fibre" align="center">48 Fibre</option>
                <option value="72 Fibre" align="center">72 Fibre</option>
                <option value="96 Fibre" align="center">96 Fibre</option>
                <option value="144 Fibre" align="center">144 Fibre</option>
                <option value="288 Fibre" align="center">288 Fibre</option>
                <option value="Custom Fibre" align="center">Custom Fibre</option>
            </select>
        </div>
        <br/>
        <div class="form-group">
            <label>Fibre Size</label>
            <div class="row aln-center">
        <select name="cblType1" class="form-control" style="width:250px">
            <option value="SM Loose-Tube" align="center">SM Loose-Tube</option>
            <option value="MM Loose-Tube" align="center">MM Loose-Tube</option>
            <option value="SM Tight-Buffer" align="center">SM Tight-Buffer</option>
            <option value="MM Tight-Buffer" align="center">MM Tight-Buffer</option>
        </select>
        @error('cblType1')
        <div>{{$message}}</div>
        @enderror
        <p><strong>/</strong><p>
        <select name="cblType2" class="form-control" style="width:250px">
            <option value="G652 D" align="center">G652 D</option>
            <option value="G657 A1" align="center">G657 A1</option>
            <option value="G657 A2" align="center">G657 A2</option>
            <option value="G655" align="center">G655</option>
            <option value="Hybrid" align="center">Hybrid</option>
        </select>
        @error('cblType2')
        <div>{{$message}}</div>
        @enderror
        </div>
        </div>
        <br/>
        <div class="form-group">
            <label>Function</label>
               <select name="ft" class="form-control" style="width:250px">
                <option value="{{$edcable->function}}" align="center">{{$edcable->function}}</option>
		        <option value="Backhaul" align="center">Backhaul</option>
                <option value="Feeder" align="center">Feeder</option>
                <option value="Link" align="center">Link</option>
                <option value="Distribution" align="center">Distribution</option>
                <option value="Access" align="center">Access</option>
            </select>
        </div>
        <br/>
        <div class="form-group">
            <label>Status</label>
            <select name="Cstat" id="fibre" class="form-control" style="width:250px">
                <option value="{{$edcable->status}}" align="center">{{$edcable->status}}</option>
                <option value="Available" align="center">Available</option>
		        <option value="Active" align="center" style="color:#42f545">Active</option>
                <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
          </select>
        </div>
        <br/>
        <button type="edit_cable" class="btn btn-success btn-fw">Submit</button>
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
