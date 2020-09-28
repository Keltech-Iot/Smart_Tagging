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
    <style>
        
        .tab { 
            display: inline-block; 
            margin-left: 2px; 
        }
    </style>
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
				<h2>Optical Distribution Frame</h2>
			</div>
        </header>
        @if (isset($details))
        @foreach($details as $row)
            <h3><strong>ODFs:</strong> {{$row->panel_name}}</h3>
            
            <table class="table">
            <tr>
                <th><strong>Status</strong></th>
                <td> @if($row->status == "Active")
                <a style="color:#42f545"> Active </a>
                @elseif($row->status == "Reserved")
                <a  style="color:#f5ce42">Reserved</a>
                @elseif($row->status == "Disabled")
                <a  style="color:#f54242">Disabled</a>
                @else
                <a>Available</a>
                @endif</td>
            </tr>
            <tr>
                <th><strong>Location</strong></th>
                <td> {{$row->location}} </td>
            </tr>
            <tr>
                <th><strong>Port Type</stong></th>
                @if($row->port_type == "Quad")
                <td>96 Fibre</td>
                @elseif($row->port_type == "Duplex")
                <td>48 Fibre</td>
                @endif
            </tr>
            <tr>
                <th><strong>Screen Display</strong></th>
                <td> {{$row->Screen_disp}} </td>
            </tr>

        </table>

        <a href="digi_edit_panel/{{$row->panel_name}}" class="button"><span>Edit</span></a>
        </article>

        <article class="post">
            <div class="row aln-center">
               <a href="digi_info/{{$row->panel_name}}/{{$row->port_type}}" class="button">View Fibres</a>
               <div class="tab"></div>
               <a href="digi_cables/{{$row->panel_name}}" class="button">View Cables</a><br/><br/>
               <a href="digi_splitter/{{$row->panel_name}}" class="button">View Splitters</a>
               <div class="tab"></div>
               <a href="digi_QA/{{$row->panel_name}}" class="button">View QA</a><br/><br/>
            </div>
        </article>
        @endforeach
        @else
            {{$message}}
        @endif
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
