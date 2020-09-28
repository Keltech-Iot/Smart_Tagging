@extends('layout.mainlayout')
@section('content')
</body>
        <head>
            <style>
               /* Set the size of the div element that contains the map */
              #map {
                height: 220px;  /* The height is 400 pixels */
                width: 100%;  /* The width is the width of the web page */
               }
            </style>
          </head>
  <body>

<div id="main">
	<article class="post">
        <header>
			<div class="title">
				<h2>Joint Closures: </h2><h2><a style="color:#3754e6">{{$cloID}}</a></h2>
                <h4>Digital ID: {{$digiID}}</h4>
                <h4>Main Exchange: {{{$exchange}}}</h4>
			</div>
            <div class="meta">
                <div id="map"></div>
            </div>
        </header>
    </article>
        <article class="post" align="center">
        <header>
            <h2 class="title">Cables</h2>
        </header>
            <div class="row aln-center">
            @if($count > 0)
                <div id="pie1"></div>
            @endif
            <h5>Total Number of Cables: {{$count}}</h5>
            </div>
            <div align="center"><a href="cables/{{$cloID}}" class="button">View Cables</a></div><br/>
        </article>
         <article class="post">
               <header align="center">
                <h2 class="title">Splitters</h2>
               </header>
               <label align="center">{{$cloID}} Splitters</label>
               <div align="left"><a href="splitter/create/{{$cloID}}" class="button"><span>Add</span></a><br/><br/></div>
                <table class="table">
                    <thead>
                            <th width="0%"><strong>No.</strong></th>
                            <th><strong>Splitter Name</strong></th>
                            <th><strong>Splitter Type</strong></th>
                            <th><strong>Main Exchange</strong></th>
                            <th><strong>Tray Number</strong></th>
                    </thead>
                    <tbody>
                    @php
                        $i =0;
                    @endphp
                    @foreach($splitter as $row)

                        @php
                        $i++;
                        @endphp

                    <tr>
                        <td>{{$i}}</td>
                        <td><a href="splitter/{{$row->wp_name}}">{{$row->splitter_name}}</a></td>
                        <td>{{$row->type}}</td>
                        <td>{{$row->main_exchange}}</td>
                        <td>{{$row->fixation_point}}</td>
                        <td><a href="{{route('edit_splitter', ['splitter'=>$row->splitter_name])}}">Edit</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </article>
        <article class="post" align="center">
           <header>
            <h2 class="title">Fibre Schedule</h2>
           </header>
           <div class="row aln-center">
            <ul class="groove"><br/>
                <br/>
                <br/>
                <li><h5>Fibre Schedule Available Data</h5></li>
                <li>{{$cloID}} Upstream Cables</li>
                <li>Node Termination Record</li>
                <li>Circuit Information</li>
                <li>Downstream Data</li>
            </ul>
            <div id="pie2"></div>
            </div>
            <div align="center"><a href="trays/{{$cloID}}" class="button">View Fibre Schedules</a></div><br/>
        </article>
        <article class="post">
           <header align="center">
            <h2 class="title">Quality Assurance Forms</h2>
           </header>
           <label align="center">Relevant Work Orders</label>
            <table class="table">
                <thead>
                        <th><strong>Job ID</strong></th>
                        <th ><strong>Status</strong></th>
                </thead>
                <tbody>
                @foreach($WOs as $rows)
                <tr>
                    <td><a href="{{route('qa_tray', ['cloID'=>$rows->product_id,'jobID'=>$rows->job_id])}}">{{$rows->job_id}}</a></td>
                    @if ($rows->status == "Priority")
                        <td ><a style="color: #de4dff"> {{$rows->status}}</a> </td>
                    @elseif ($rows->status == "Assigned")
                        <td ><a style="color:#37ff00">{{$rows->status}}</a></td>
                    @elseif ($rows->status == "In Progress")
                        <td><a style="color:#ffbb00">{{$rows->status}}</a></td>
                    @elseif ($rows->status == "Closed")
                        <td><a style="color:#ff0000">{{$rows->status}}</a></td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
        </article>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Function', 'Cables'],
  ['2 Fibre', {{$type[1]}}],
  ['4 Fibre', {{$type[2]}}],
  ['8 Fibre', {{$type[3]}}],
  ['16 Fibre', {{$type[4]}}],
  ['24 Fibre', {{$type[5]}}],
  ['48 Fibre', {{$type[6]}}],
  ['72 Fibre', {{$type[7]}}],
  ['96 Fibre', {{$type[8]}}],
  ['144 Fibre', {{$type[9]}}],
  ['288 Fibre', {{$type[10]}}],
  ['Custom', {{$type[11]}}],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Cable Status In {{$cloID}} ', 'width':750, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.ColumnChart(document.getElementById('pie1'));
  chart.draw(data, options);
}
</script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Status', 'Fibres'],
  ['Available', {{$remain}}],
  ['Spliced Fibres', {{$numFib}}],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'{{$cloID}} Fibre Status', 'width':550, 'height':400,
                    slices: [{color: 'red'}, {color: 'green'}]};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('pie2'));
  chart.draw(data, options);
}
</script>
<script>
        // Initialize and add the map
        function initMap() {

         var lattitude = 0;
         var longitude = 0;

         lattitude = <?php echo json_encode($man->lat); ?>;
         longitude = <?php echo json_encode($man->long); ?>;

          var point = new google.maps.LatLng(lattitude, longitude);
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 16, center: point});
          //var marker = new google.maps.Marker({position: theHQ, map: map});
          var marker1 = new google.maps.Marker({position: point, title: 'Manhole ID: {{$man->manhole_id}}', map: map});
        }
        </script>
    
        <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_SOhzzkkbUuD9fNFacd0yi24KMwJ48hY&callback=initMap">
        </script>
@endsection

