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
    @if (isset($details))
        @foreach($details as $row)
        <header>
		    <div class="title">
			    <h2>Joint Closure</h2>
		    </div>
        </header>

            <table class="table table-bordered">
                <tr>
                    <th><strong>Joint Closure Name</strong></th>
                    <td>{{$row->closure_id}}</a></td>
                </tr>
                <tr>
                    <th><strong>Main Exchange</strong></th>
                    <td>{{$row->exchange}}</a></td>
                </tr>
                <tr>
                    <th>Closure Type</th>
                    <td> {{$row->type}}</td>
                </tr>
                <tr>
                    @if($row->position == "Manhole")
                    <th><strong>Manhole</strong></th>
                    <td>
                        <a href="digi_manhole/{{$row->position_id}}">{{$row->position}}: {{$row->position_id}}</a>
                    @else
                        <th><strong>Aerial Network</strong></th>
                        <a href="aerial_net/{{$row->position_id}}">{{$row->position}}: {{$row->position_id}}</a>
                    @endif
                    </td>
                </tr>
                </table>
                <div align="center"><a href="digi_edit_clo/{{$row->closure_id}}" class="button"><span>Edit</span></a></div>
                </article>
                <article class="post">
                    
                <div class="row aln-center">
                    <a href="digi_cables/{{$row->closure_id}}" class="button">View Cables</a>
                    <div class="tab"></div>
                    <a href="trays/{{$row->closure_id}}" class="button">View Fibres</a><br/><br/>
                    <a href="digi_splitter/{{$row->closure_id}}" class="button">View Splitters</a>
                    <div class="tab"></div>
                    <a href="QA_trays/{{$row->closure_id}}" class="button">View QA</a>
                </div><hr>
                </div><hr>
                </article>
            @endforeach
        @else
            {{$message}}
        @endif
</div>

<script src="{{asset('TempAssets/js/jquery.min.js')}}"></script>
<script src="{{asset('TempAssets/js/browser.min.js')}}"></script>
<script src="{{asset('TempAssets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('TempAssets/js/util.js')}}"></script>
<script src="{{asset('TempAssets/js/main.js')}}"></script>
 </body>
</html>
