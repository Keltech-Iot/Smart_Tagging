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
    <div id="main">

	<article class="post">
        <header>
			<div class="title">
			
                    @foreach($view as $row)
                    <h2 align="center">Work Order: {{$row->job_id}}</h2>
                    <h4 align="center">Project ID: {{$row->proj_id}}</h4>
          
                        <h5 align="center"><strong>Status: </strong>
                            @if ($row->status == "Priority")
                                <td><a style="color: #de4dff"> {{$row->status}}</a> </td>
                            @elseif ($row->status == "Assigned")
                                <td><a style="color:#37ff00">{{$row->status}}</a></td>
                            @elseif ($row->status == "In Progress")
                                <td><a style="color:#ffbb00">{{$row->status}}</a></td>
                            @elseif ($row->status == "Closed")
                                <td><a style="color:#ff0000">{{$row->status}}</a></td>
                            @endif
                        </h5>
                </div>
            </header>
                <div align="center">
                    <h3>Job Description:</h3>
                    <p>{!!nl2br(e($row->jobDes))!!}</p>
                </div>

                        <table class="table">
                            <tr>
                               <th width="20%"><strong>Location</strong></th>
                               <td>{{$row->location}}</td>
                            </tr>
                            <tr>
                               <th width="20%"><strong>Planner</strong></th>
                               <td>{{$row->planner}}</td>
                            </tr>
                            <tr>
                               <th width="20%"><strong>Assigned To</strong></th>
                               <td>{{$row->tech}}</td>
                            </tr>
                            <tr>
                               <th width="20%"><strong>Certified By</strong></th>
                               <td>{{$row->cert}}</td>
                            </tr>
                            <tr>
                               <th width="20%"><strong>Customer</strong></th>
                               <td>{{$row->customer}}</td>
                            </tr>
                            <tr>
                               <th width="20%"><strong>Customer Notes</strong></th>
                               <td>{{$row->custNotes}}</td>
                            </tr>
                            <tr>
                                <th><strong>Component Type</strong></th>
                                <td>{{$row->component_type}}</td>
                            </tr>
                            @if($row->product_type == "Patch Panel")
                               <th width="20%"><strong>Patch Panel</strong></th>
                               <td><a href="search_panel/{{$row->product_id}}">{{$row->product_id}}</a></td>
                            @elseif($row->product_type == "Joint Closure")
                               <th width="20%"><strong>Joint Closure Name</strong></th>
                               <td><a href="clo_search/{{$row->product_id}}">{{$row->product_id}}</a></td>
                            @endif
                            </tr>
                            <tr>
                               <th width="10%"><strong>Updated At</strong></th>
                               <td href="">{{$row->updated_at}}</td>
                            </tr>
                        </table>
                        <div align="center">
                            <a href="edit_work/{{$row->job_id}}" class="button">Edit</a>
                        </div>
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
