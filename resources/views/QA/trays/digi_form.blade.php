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
            <div><span class="image fit"><a href="javascript:history.back()"><img src="{{asset('images/icons/back.jpg')}}" height="40" width="60"/></a></span></div>
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
			    <h2>Quality Assurance Form</h2>
		    </div>
        </header>

            <form method="POST" action="{{route('digi_storeQA_Tray', ['cloID'=>$cloID])}}" class="forms-sample" enctype="multipart/form-data">
              @csrf

              <label>Job Name</label>
              <input type="text" name="jobID" placeholder="Job ID" value="{{$jobID}}" class="form-control" readonly>
              @error('jobID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>{{$WP}} Name</label>
              <input type="text" name="manID" placeholder="Manhole ID" value="{{$WP_id}}" class="form-control" readonly>
              @error('manID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Joint Closure Name</label>
              <input type="text" name="cloID" placeholder="Closure ID" value="{{$cloID}}" class="form-control" readonly>
              @error('cloID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Tray Number</label>
              <select name="tNum" class="form-control" style="width:250px">
                <option value="1" align="center">1</option>
                <option value="2" align="center">2</option>
                <option value="3" align="center">3</option>
                <option value="4" align="center">4</option>
                <option value="5" align="center">5</option>
                <option value="6" align="center">6</option>
              </select>
              @error('tNum')
              <div>{{$message}}</div>
              @enderror
              <br/>         
              <label>Splice Tray Photo</label>
              <input type="file" name="splImg" class="form-control">
              @error('splImg')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Completed Job Photo</label>
              <input type="file" name="comImg" class="form-control">
              @error('comImg')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Additional Information</label>
              <input type="text" name="AdInfo" placeholder="Additional Info" class="form-control">
              @error('AdInfo')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital Signature</label>
              <input type="text" name="digSig" placeholder="Full Name Here" class="form-control">
              @error('digSig')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="" class="button">Submit</button>  
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
