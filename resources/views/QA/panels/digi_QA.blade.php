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
			    <h2>Quality Assurance</h2>
		    </div>
        </header>
        @foreach($Data as $row)
            @php
                $Termloc = $row->terminal_pic_loc;
                $Comploc = $row->com_pic_loc;
            @endphp

            <table class="table table-bordered">
                <tr>
                    <th width="10%"><strong>Job Name</strong></th>
                    <td> <a href="">{{$row->job_id}}</a></td>
                </tr>
                <tr>
                    <th width="10%"><strong>ODF ID</strong></th>
                    <td href="">{{$row->panel_id}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Port Number</strong></th>
                    <td href="">{{$row->port_number}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Terminal Photo</strong></th>
                    <td><a href="{{route('digi_viewPanelImg', ['loc'=>$Termloc])}}" class="author"><img src="{{asset('images/QA_panels/'.$row->terminal_pic_loc)}}" ></a></td>
                </tr>
                <tr>
                    <th width="10%"><strong>Completed Job Photo</strong></th>
                    <td><a href="{{route('digi_viewPanelImg', ['loc'=>$Comploc])}}" class="author"><img src="{{asset('images/QA_panels/'.$row->com_pic_loc)}}" ></a></td>
                </tr>
                <tr>
                    <th width="10%"><strong>Additional Info</strong></th>
                    <td href="">{{$row->AdInfo}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Digital Signature</strong></th>
                    <td href="">{{$row->digital_sign}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Updated At</strong></th>
                    <td href="">{{$row->updated_at}}</td>
                </tr>
            </table>
        @endforeach
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
