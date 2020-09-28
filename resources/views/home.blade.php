@extends('layout.mainlayout')

@section('content')
<style> 
        .tab { 
            display: inline-block; 
            margin-left: 100px; 
        }
        .tab1 { 
            display: inline-block; 
            margin-left: 23px; 
        }
        .tab2 { 
            display: inline-block; 
            margin-left: 20px; 
        }
        .tab3 { 
            display: inline-block; 
            margin-left: 22px; 
        }
        .tab4 { 
            display: inline-block; 
            margin-left: 2px; 
        }
</style>

<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2>Dashboard</h2>
			</div>
            <div class="meta">
                <span class="image fit"><img src="images/keltech_logo.jpg"></span>
            </div>
        </header>

        <div align="center">
        
		    <a href="{{route('projects')}}" type="button" class="button"><i class=" icon-settings mr-2"></i>Projects</a>
		    <a href="{{route('work_orders')}}" type="button" class="button"><i class="icon-book-open mr-2"></i>Work Orders</a>
		    <a href="{{route('manhole')}}" type="button" class="button"><i class=" icon-settings mr-2"></i>Manholes</a>
		    <a href="{{route('fibre_closure')}}" type="button" class="button"><i class="icon-energy mr-2"></i>Fibre Joint Closures</a>
		    <a href="{{route('patchpanel')}}" type="button" class="button" > <i class="icon-screen-tablet mr-2"></i>ODF's</a>
		    <a href="{{route('aerial_network')}}" type="button" class="button"><i class=" icon-settings mr-2"></i>Aerial Networks</a>
		    <a href="{{route('user')}}" type="button" class="button"><i class="icon-book-open mr-2"></i>Users</a>
            <br/><br/><br/>
        </div>
                <h3>Search for Location of Customer Link</h3>
        <form class="search-form d-none d-md-block" action="{{route('search_customer')}}" method="post">
            <input type="text" class="form-control" name="cust_ref" placeholder="Input Customer Reference" title="Search here">
            @csrf
        </form>
    </article>
    <article class="post">
        <header>
            <div  class = "title">
                <h2>Network Summary</h2>
            </div>
        </header>
        <div class="row">
        
            <div class="list">
            <h3>Network Joint Closure Summary</h3>
                <ul>
                    <li><strong>Total No. of Joint Closures:</strong><span class="tab"></span> <div class="tab1"></div>{{$totclo}}</li>
                    <li><strong>No. of Manhole Joint Closures:</strong><span class="tab"></span> {{$WP[1]}}</li>
                    <li><strong>No. of Aerial Joint Closures:</strong><span class="tab"></span><div class="tab2"></div>{{$WP[2]}}</li>
                </ul>
            </div>
            <span class="tab"></span>
            <div class="list">
            <h3>Network ODF Summary</h3>
                <ul>
                    <li><strong>Total No. of ODF's:</strong><span class="tab"></span><div class="tab3"></div>{{$totpan}}</li>
                    <li><strong>No. of 48 Fibre ODF's:</strong><span class="tab"></span><div class="tab4"></div>{{$du}}</li>
                    <li><strong>No. of 96 Fibre ODF's:</strong><span class="tab"></span> {{$quad}}</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div id="cloType"></div>
            <span class="tab"></span>
            <div id="fibStat"></div>
        </div>
        <hr>
        <div align="center">
            <div id="cblType"></div>
        </div>
        <hr>
        <div align="center">
            <div id="DarkFib"></div>
        </div>
    </article>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Joint Closure Type', '#'],
  ['Backhaul', {{$cloType[1]}}],
  ['Feeder', {{$cloType[2]}}],
  ['Aggregation', {{$cloType[3]}}],
  ['Distribution', {{$cloType[4]}}],
  ['Access', {{$cloType[5]}}],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'No. of Every Type of Joint Closure in the Network', 'width':450, 'height':500, pieHole: 0.4};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('cloType'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Fibre Status', '#'],
  ['Available', {{$panStat[4]}}],
  ['Disabled', {{$panStat[3]}}],
  ['Reserved', {{$panStat[2]}}],
  ['Active', {{$panStat[1]}}],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'ODF Fibre Status in the Network', 'width':450, 'height':500, is3D: true};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('fibStat'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Cable type', 'Amount of Each Type'],
  ['2 Fibre', {{$cabType[1]}}],
  ['4 Fibre', {{$cabType[2]}}],
  ['8 Fibre', {{$cabType[3]}}],
  ['16 Fibre', {{$cabType[4]}}],
  ['24 Fibre', {{$cabType[5]}}],
  ['48 Fibre', {{$cabType[6]}}],
  ['72 Fibre', {{$cabType[7]}}],
  ['96 Fibre', {{$cabType[8]}}],
  ['144 Fibre', {{$cabType[9]}}],
  ['288 Fibre', {{$cabType[10]}}],
  ['Custom', {{$cabType[11]}}],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Total No. of Each Fibre Cable Type in the Network', 'width':1050, 'height':400, is3D: true};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.ColumnChart(document.getElementById('cblType'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Fibre Status', 'Amount'],
  ['Dark Fibre', {{$DarkFib}}],
  ['Fibre in Use', {{$spliced}}],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Amount of Dark Fibre in the Network', 'width':750, 'height':600, pieHole: 0.4,
                 slices: [{color: 'red'}, {color: 'green'}]};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('DarkFib'));
  chart.draw(data, options);
}
</script>
                
@endsection

