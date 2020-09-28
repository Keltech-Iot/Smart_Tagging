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
			<h2>Edit ODF</h2>
		</div>
    </header>

            <form method="post" action="update/{{$edpanel->panel_id}}">
                @csrf
                <div class="form-group">
                    <label>ODF Name</label>
                    <input type="text" name="pName"  class="form-control" value="{{$edpanel->panel_name}}" placeholder="ODF Name"/>
                </div>
                <br/>
                <div class="form-group">
                    <label>Digital ID</label>
                    <input type="text" name="DigiID"  class="form-control" value="{{$edpanel->nfc}}" placeholder="ODF Name" readonly>
                </div>
                <br/>
                <div class="form-group">
                    <label>Status</label>
                    <select name="pStat" id="fibre" class="form-control" style="width:250px">
                        <option value="{{$edpanel->status}}" align="center">{{$edpanel->status}}</option>
		                <option value="Active" align="center" style="color:#42f545">Active</option>
                        <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                        <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
                     </select>
                </div>
                <br/>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="pLoc"  class="form-control" value="{{$edpanel->location}}" placeholder="Location"/>
                </div>
                <br/>
                <div class="form-group">
                     <label>Port Type</label>
			          <select name="poType" id="fibre" class="form-control" style="width:250px">
                        <option value="{{$edpanel->port_type}}" align="center">{{$edpanel->port_type}}</option>
		                <option value="Quad" align="center">-- Quad --</option>
                        <option value="Duplex" align="center">-- Duplex --</option>
                      </select>
                </div>
                <br/>
                <div class="form-group">
                    <label>Screen Display</label>
                    <input type="text" name="pScreen"  class="form-control" value="{{$edpanel->Screen_disp}}" placeholder="Screen Display"/>
                </div>
                <br/>
                <button type="edit_patchpanel" class="btn btn-success btn-fw">Submit</button>
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
