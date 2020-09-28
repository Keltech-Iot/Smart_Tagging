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

    @foreach($fibre as $name)
    <div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Fibre Port</h2>
        <h3>ODF: {{$name->panel_id}}</h3>
        <p><strong>Fibre No.:</strong> {{$name->port_id}}</p>
    </div>
    <div class="meta">
        <p><strong>Last Updated:</strong> {{$name->updated_at}}</p>
        <p><strong>Status: </strong>
        @if($name->function == "Active")
            <a style="color:#42f545"> Active </a>
        @elseif($name->function == "Reserved")
        <a  style="color:#f5ce42">Reserved</a>
        @elseif($name->function == "Disabled")
        <a  style="color:#f54242">Disabled</a>
        @endif
        </p>
    </div>
        </header>
        <table class="alt">
        <tr>
            <th width="10%"><strong>Fibre ID</strong></th>
            <td>{{$name->port_id}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Fibre Name</strong></th>
            <td>{{$name->fibre_name}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Cable ID</strong></th>
            <td>{{$name->cable_id}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Panel ID</strong></th>
            <td>{{$name->panel_id}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Circuit Info</strong></th>
            <td>{{$name->circuit_info}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Customer Reference</strong></th>
            <td>{{$name->customer_ref}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Bandwidth</strong></th>
            <td>{{$name->bandwidth}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Updated At</strong></th>
            <td>{{$name->updated_at}}</td>
        </tr>
    </table>
    <br/>
    <br/>
    <div><a href="{{route('edit_digi_fibreport', ['fNum'=>$name->port_id, 'pID'=>$name->panel_id])}}" class="button"><span>Edit</span></a></div>
                    
            
  </article>
 @endforeach
</div>

</div>
<script src="{{asset('TempAssets/js/jquery.min.js')}}"></script>
<script src="{{asset('TempAssets/js/browser.min.js')}}"></script>
<script src="{{asset('TempAssets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('TempAssets/js/util.js')}}"></script>
<script src="{{asset('TempAssets/js/main.js')}}"></script>
 </body>
</html>
