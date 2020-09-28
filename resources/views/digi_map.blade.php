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
  </body>
        <head>
            <style>
               /* Set the size of the div element that contains the map */
              #map {
                height: 600px;  /* The height is 400 pixels */
                width: 100%;  /* The width is the width of the web page */
               }
            </style>
          </head>
  <body>
  <div id="main">
			<div class="title">
				<h2>Manhole: {{$manID}}</h2>
			</div>
        <!--The div element for the map -->
        <div id="map"></div>
        <script>
        // Initialize and add the map
        function initMap() {
          var theHQ = {lat: 51.558090, lng: -0.280329};
          var lattitude = <?php echo json_encode($lat); ?>;
          var longitude = <?php echo json_encode($lng); ?>;


          var point = new google.maps.LatLng(lattitude, longitude);
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 16, center: point});
          //var marker = new google.maps.Marker({position: theHQ, map: map});
          var marker1 = new google.maps.Marker({position: point, title: 'Manhole ID: {{$manID}}', map: map});
        }
        </script>
    
        <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_SOhzzkkbUuD9fNFacd0yi24KMwJ48hY&callback=initMap">
        </script>
    </body>

</div>
</div>
</div>
    <script src="{{asset('TempAssets/js/jquery.min.js')}}"></script>
    <script src="{{asset('TempAssets/js/browser.min.js')}}"></script>
    <script src="{{asset('TempAssets/js/breakpoints.min.js')}}"></script>
    <script src="{{asset('TempAssets/js/util.js')}}"></script>
    <script src="{{asset('TempAssets/js/main.js')}}"></script>
 </body>
</html>
