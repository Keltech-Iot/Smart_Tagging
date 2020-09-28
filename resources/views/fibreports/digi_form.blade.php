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
			    <h2>New Fibre Port</h2>
                <h4>Fibre No.: {{$search}}</h4>
                <h4>ODF: {{$panelID}}</h4>
		    </div>
        </header>

            <form method="POST" action="store_digi_fibreport" class="forms-sample">
              @csrf

              <label>Fibre ID</label>
              <input type="text" name="poID" placeholder="Fibre ID" value="{{$search}}" class="form-control" readonly>
              @error('poID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Name</label>
              <input type="text" name="fbName" placeholder="Fibre Name" class="form-control">
              @error('fbName')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>ODF ID</label>
              <input type="text" name="pID" placeholder="Panel ID" value="{{$panelID}}" class="form-control" readonly>
              @error('pID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Cable ID</label>
              <input type="text" name="cblID" placeholder="Cable ID" class="form-control">
              @error('cblID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Circuit Info</label>
              <input type="text" name="cInfo" placeholder="Circuit Info" class="form-control">
              @error('cInfo')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Function</label>
              <select name="funct" id="fibre" class="form-control" style="width:250px">
                <option value="Available" align="center">Available</option>
		        <option value="Active" align="center" style="color:#42f545">Active</option>
                <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
              </select>
              @error('funct')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Customer Reference</label>
              <input type="text" name="custRef" placeholder="Customer Reference" class="form-control">
              @error('custRef')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Bandwidth</label>
              <input type="text" name="Bwidth" placeholder="Bandwidth" class="form-control">
              @error('Bwidth')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_fibreport" class="btn btn-success btn-fw">Submit</button>  
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
