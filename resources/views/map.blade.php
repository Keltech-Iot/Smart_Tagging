@extends('layout.mainlayout')
@section('content')
   
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

</div>
</div>

@endsection

