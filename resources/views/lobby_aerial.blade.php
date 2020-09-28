@extends ('layout.mainlayout')
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
                <h2>Aerial Networks: <br/> <a style="color:#3754e6">{{$aer->aerial_id}}</a></h2>
                <h4>Digital ID: {{$aer->digi_id}}</h4>
            </div>
            <div class="meta">
                <div id="map"></div>
            </div>
        </header>
    </article>
    <article class="post">
        <header>
            <h2 class="title" align="center">Joint Closures</h2>
        </header>
        
         <div align="left"><a href="{{url('closures/create')}}" class="button"><span>Add</span></a><br/><br/></div>
         <div>
         <table class="table">
            <thead>
            <tr>
                <th><strong>No.</strong></th>
                <th><strong>Joint Closure Id</strong></th>
                <th><strong>Closure Type</strong></th>
            </tr>
            </thead>
            <tbody>

            @php
                $i = 0;
            @endphp

            @foreach($clos as $row)
                @php
                    $i++;
                @endphp
                <tr>
                <td>{{$i}}</td>
                <td><a href="lobby_clo/{{$row->closure_id}}"> {{$row->closure_id}}</a></td>
                <td> {{$row->type}}</td>
                <td> <a href="edit_clo/{{$row->closure_id}}"><span>Edit</span></a> </td>
                </tr>
            @endforeach
                                
            </tbody>
        </table>
        </div>
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
            <div align="center"><a href="cables/{{$aer->aerial_id}}" class="button">View Cables</a></div><br/>
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
                    <td><a href="{{route('qa_wp', ['WP_id'=>$rows->product_id,'jobID'=>$rows->job_id])}}">{{$rows->job_id}}</a></td>
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
  var options = {'title':'Cable Status In {{$aer->aerial_id}} ', 'width':750, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.ColumnChart(document.getElementById('pie1'));
  chart.draw(data, options);
}
</script>

<script>
// Initialize and add the map
function initMap() {
    var theHQ = {lat: 51.558090, lng: -0.280329};
    var lattitude = <?php echo json_encode($aer->lat); ?>;
    var longitude = <?php echo json_encode($aer->long); ?>;


    var point = new google.maps.LatLng(lattitude, longitude);
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 16, center: point});
    //var marker = new google.maps.Marker({position: theHQ, map: map});
    var marker1 = new google.maps.Marker({position: point, title: 'Aerial Network ID: {{$aer->aerial_id}}', map: map});
}
</script>
    
<script defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_SOhzzkkbUuD9fNFacd0yi24KMwJ48hY&callback=initMap">
</script>
@endsection
