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
			    <h2>Joint Closures: <br/> <a style="color: #3754e6">{{$cloID}}</a></h2>
                <h4>Digital ID: {{$DigiID}}</h4>

            </div>
        </header>
        <div align="center">
        <h2 align="center" style="color:#f54242">Upstream Cables of {{$cloID}}</h2>
        @php
            $p = 0;
        @endphp
        @foreach($cables as $row)
        @php
            $p++;
        @endphp
            <hr>
            <label><strong>{{$row->cable_id}}</strong></label>
            <form method="GET" action="clofibre/{{$cloID}}/{{$row->cable_id}}">
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    @for($i=1; $i<($numFib[$p]+1); $i++)
                    <option value="{{$i}}">Fibre {{$i}}</option>
                    @endfor
            </select>
            <br/>
            <button type="clofibre/{{$row->upstream_cable}}">Click Here</button>
            </form>
        @endforeach
        </div>
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
