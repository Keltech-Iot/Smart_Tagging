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
            <header class="title">
                <h2>Work Orders for: <br/>{{$user->name}}</h2>
            </header>
             <table class="table">
            <thead>
            <tr>
                <th><strong>Job ID</strong></th>
                <th><strong>Status</strong></th>
            </tr>
            </thead>
            <tbody>

            @foreach($WO as $row)
                <tr>
                <td><a href="digi_info/{{$row->job_id}}"> {{$row->job_id}} </a></td>
                @if ($row->status == "Priority")
                    <td><a style="color: #de4dff"> {{$row->status}}</a> </td>
                @elseif ($row->status == "Assigned")
                    <td><a style="color:#37ff00">{{$row->status}}</a></td>
                @elseif ($row->status == "In Progress")
                    <td><a style="color:#ffbb00">{{$row->status}}</a></td>
                @elseif ($row->status == "Closed")
                    <td><a style="color:#ff0000">{{$row->status}}</a></td>
                @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </article>
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
