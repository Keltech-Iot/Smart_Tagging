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
			    <h2>Quality Assurance for ODF: {{$pID}}</h2>
                <h4>Relevant Work Orders</h4>
		    </div>
        </header>
        <table>
            <thead>
                <tr>
                    <th><strong>Job Name</strong><th>
                    <th><strong>Status</strong></th>
                </tr>
            </thead>
            @foreach($WorkOrders as $rows)
            <tr>
                <td><a href="{{route('digi_qa_panel', ['panID'=>$rows->product_id, 'jobID'=>$rows->job_id])}}">{{$rows->job_id}}</a></td>
                @if ($rows->status == "Priority")
                    <td><a style="color: #de4dff"> {{$rows->status}}</a> </td>
                @elseif ($rows->status == "Assigned")
                    <td><a style="color:#37ff00">{{$rows->status}}</a></td>
                @elseif ($rows->status == "In Progress")
                    <td><a style="color:#ffbb00">{{$rows->status}}</a></td>
                @elseif ($rows->status == "Closed")
                    <td><a style="color:#ff0000">{{$rows->status}}</a></td>
                @endif
            </tr>
            @endforeach
        </table>
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
