@extends('layout.mainlayout')
@section('content')

<div id="main">
	<article class="post">
        <header>
			<div class="title">
				<h2>Optical Distribution Frames: </h2><h2><a style="color:#3754e6">{{$pid}}</a></h2>
                <h4>ODF Type: {{$pType}}</h4>
                <h4>Digital ID: {{$digiID}}</h4>
			</div>
            <div class="meta">
                <a href="info/{{$pType}}" class="button">Fibre Status</a>
            </div>
        </header>
    </article>
        
        <article class="post" align="center">
          <header>
             <h2 class="title">Cables</h2>
         </header>
        <div class="row aln-center">
        @if ($count > 0)
            <div id="pie1"></div>
        @endif
        </div>
            <h5>Total Number of Cables: {{$count}}</h5> <br/>
        <div align="center">
            <a href="{{route('cables_odf', ['pnlID'=>$pid])}}" class="button">View Cables</a>
        </div><br/>
        </article>

        <article class="post">
               <header align="center">
                <h2 class="title">Splitters</h2>
               </header>
               <label align="center">{{$pid}} Splitters</label>
               <div align="left"><a href="splitter/create" class="button"><span>Add</span></a><br/><br/></div>
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
                        <td>{{$row->splitter_name}}</td>
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
            <h2 class="title">Terminals and Ports</h2>
           </header>
           <div class="row aln-center">
           <div id="pie2"></div>
            <ul class="list"><br/>
                <br/>
                <br/>
                <li><strong>Data</strong></li>
                <li>Terminal ID</li>
                <li>Port Number</li>
                <li>Fibre Name</li>
                <li>Port Type</li>
                <li>Function</li>
                <li>Customer Reference</li>
                <li>Bandwidth</li>
            </ul>
            </div>
            <div align="center"><a href="terminal/{{$pType}}" class="button">View Ports</a></div><br/>
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
            @foreach($WO as $rows)
            <tr>
                 <td><a href="{{route('qa_panel', ['panID'=>$rows->product_id, 'jobID'=>$rows->job_id])}}">{{$rows->job_id}}</a></td>
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
  ['4 Fibre', {{$type[1]}}],
  ['8 Fibre', {{$type[2]}}],
  ['16 Fibre', {{$type[3]}}],
  ['24 Fibre', {{$type[4]}}],
  ['48 Fibre', {{$type[5]}}],
  ['96 Fibre', {{$type[6]}}],
  ['144 Fibre', {{$type[7]}}],
  ['288 Fibre', {{$type[8]}}],
  ['Custom', {{$type[9]}}],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Cable Status In {{$pid}} ', 'width':650, 'height':400};

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
  ['Diabled', {{$Fibdis}}],
  ['Reserved', {{$Fibres}}],
  ['Active', {{$Fibact}}],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Fibre Status In {{$pid}} ', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('pie2'));
  chart.draw(data, options);
}
</script>
@endsection

