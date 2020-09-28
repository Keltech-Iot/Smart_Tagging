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
				
               <li> <a class="button" href="{{route('work_orders')}}">Work Orders</a></li>
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
			    <h2>ODF:<a style="color:#3754e6"> {{$panel}}</a></h2>
                <h4>Port Type: 96 Fibre</h4>
                <h4>Fibre Status</h4>
		    </div>
        </header>
        <a href="{{ url()->previous() }}" class="button">Back</a><br/><br/>
    </article>
    <article class="mini-post">
        <table class="table">
        <h3 align="center">Terminal 1</h3>
        <thead>
            <tr>
            <th><strong>Fibre</strong></th>
            <th><strong>Status</strong></th>
            </tr>
        </thead>
        <tbody>
            @for($i=1; $i<17; $i++)
            @php
                $x = 1;
            @endphp
            <tr>
                <td><a href="{{route('fibreport_digi_search', ['portNum'=>$i, 'pID'=>$panel])}}">{{$i}}</a></td>
                @foreach($disp as $r)
                    @if($r->port_id == $i)
                        @if($r->function == "Active")
                            <td style="color:#42f545"> Active </td>
                        @elseif($r->function == "Reserved")
                            <td  style="color:#f5ce42">Reserved</td>
                        @elseif($r->function == "Disabled")
                            <td  style="color:#f54242">Disabled</td>
                        @endif

                        @php
                        $x = 0;
                        @endphp

                    @endif
                @endforeach
                @if($x == 1)
                    <td>Available</td>
                @endif
            </tr>
            @endfor

        </tbody>
       </table>
     </article>


    <article class="mini-post">
            <h3 align="center">Terminal 2</h3>
            <table class="table">
            <thead>
                <tr>
                <th><strong>Fibre</strong></th>
                <th><strong>Status</strong></th>
                </tr>
            </thead>
            <tbody>

                @for($i=17; $i<33; $i++)
                @php
                    $x = 1;
                @endphp
                <tr>
                <td><a href="{{route('fibreport_digi_search', ['portNum'=>$i, 'pID'=>$panel])}}">{{$i}}</a></td>
                    @foreach($disp as $r)
                        @if($r->port_id == $i)
                            @if($r->function == "Active")
                                <td style="color:#42f545"> Active </td>
                            @elseif($r->function == "Reserved")
                            <td  style="color:#f5ce42">Reserved</td>
                            @elseif($r->function == "Disabled")
                            <td  style="color:#f54242">Disabled</td>
                            @endif

                            @php
                            $x = 0;
                            @endphp

                        @endif
                    @endforeach
                    @if($x == 1)
                        <td>Available</td>
                    @endif
                </tr>
                @endfor

            </tbody>
          </table>
         </article>

    <article class="mini-post">
        <h3 align="center">Terminal 3</h3>
        <table class="table">
        <thead>
            <tr>
            <th><strong>Fibre</strong></th>
            <th><strong>Status</strong></th>
            </tr>
        </thead>
        <tbody>

            @for($i=33; $i<49; $i++)
            @php
                $x = 1;
            @endphp
            <tr>
            <td><a href="{{route('fibreport_digi_search', ['portNum'=>$i, 'pID'=>$panel])}}">{{$i}}</a></td>
                @foreach($disp as $r)
                    @if($r->port_id == $i)
                        @if($r->function == "Active")
                            <td style="color:#42f545"> Active </td>
                        @elseif($r->function == "Reserved")
                        <td  style="color:#f5ce42">Reserved</td>
                        @elseif($r->function == "Disabled")
                        <td  style="color:#f54242">Disabled</td>
                        @endif

                        @php
                        $x = 0;
                        @endphp

                    @endif
                @endforeach
                @if($x == 1)
                    <td>Available</td>
                @endif
            </tr>
            @endfor

        </tbody>
      </table>
      </article>
        <article class="mini-post">
                    <h3 align="center">Terminal 4</h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                        @for($i=49; $i<65; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="{{route('fibreport_digi_search', ['portNum'=>$i, 'pID'=>$panel])}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
                   </table>
                 </article>
            <article class="mini-post">
                    <h3 align="center">Terminal 5</strong></h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                        @for($i=65; $i<81; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="{{route('fibreport_digi_search', ['portNum'=>$i, 'pID'=>$panel])}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
                   </table>
                 </article>
            <article class="mini-post">
                    <h3 align="center">Terminal 6</strong></h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                        @for($i=81; $i<97; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="{{route('fibreport_digi_search', ['portNum'=>$i, 'pID'=>$panel])}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
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
