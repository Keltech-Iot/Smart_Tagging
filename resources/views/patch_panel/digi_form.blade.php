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
			    <h2>New Patch Panel</h2>
		    </div>
        </header>

            <form method="POST" action="digi_store_patchpanel" class="forms-sample">
              @csrf

              <label>ODF Name</label>
              <input type="text" name="pnlName" placeholder="ODF Name" class="form-control">
              @error('pnlName')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital ID</label>
              <input type="text" name="DigiID" placeholder="Digital ID" value="{{$id}}" class="form-control" readonly>
              @error('DigiID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Status</label>
             <select name="stat" id="fibre" class="form-control" style="width:250px">
                <option value="Available" align="center">Available</option>
		        <option value="Active" align="center" style="color:#42f545">Active</option>
                <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
              </select>
              @error('stat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Location</label>
              <input type="text" name="location" placeholder="Location" class="form-control">
              @error('location')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Port Type</label>
			  <select name="poType" id="fibre" class="form-control" style="width:250px">
                <option align="center">-- Select Port Type --</option>
		        <option value="Quad" align="center">-- Quad --</option>
                <option value="Duplex" align="center">-- Duplex --</option>
              </select>
              @error('poType')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Screen Display</label>
              <input type="text" name="screen" placeholder="Screen Display" class="form-control">
              @error('screen')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_patchpanel" class="btn btn-success btn-fw">Submit</button>  
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
