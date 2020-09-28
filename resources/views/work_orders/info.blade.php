@extends('layout.mainlayout')
@section('content')
<div id="main">

	<article class="post">
        <header>
			<div class="title">
			
                    @foreach($infoData as $row)
                    <h2 align="center">Work Orders: {{$row->job_id}}</h2>
                    <h4 align="center">Project Name: {{$row->proj_id}}</h4>
          
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
                               @if($row->product_type == "Patch Panel")
                                    <td>{{$row->location}}</td>
                               @elseif($row->product_type == "Joint Closure" || $row->product_type == "Manhole" || $row->product_type == "Aerial Network")
                                 @if($wp == "man")
                                  @foreach($clos as $clo)
                                    <td><a href="map/{{$clo->lat}}/{{$clo->long}}/{{$clo->manhole_id}}">{{$row->location}}</a></td>
                                  @endforeach
                                @elseif($wp == "aer")
                                  @foreach($clos as $clo)
                                    <td><a href="map_aerial/{{$clo->lat}}/{{$clo->long}}/{{$clo->manhole_id}}">{{$row->location}}</a></td>
                                  @endforeach
                                
                                    @elseif($wp == "n/a")
                                     <td>{{$row->location}}</td>
                                   @endif
                                @endif
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
                               <th width="20%"><strong>ODF</strong></th>
                               <td><a href="search_panel/{{$row->product_id}}">{{$row->product_id}}</a></td>
                            @elseif($row->product_type == "Joint Closure")
                               <th width="20%"><strong>Joint Closure Name</strong></th>
                               <td><a href="clo_search/{{$row->product_id}}">{{$row->product_id}}</a></td>
                            @elseif($row->product_type == "Manhole")
                               <th width="20%"><strong>Manhole Name</strong></th>
                               <td><a href="manhole/{{$row->product_id}}">{{$row->product_id}}</a></td>
                            @elseif($row->product_type == "Aerial Network")
                               <th width="20%"><strong>Aerial Network Name</strong></th>
                               <td><a href="aerial_network/{{$row->product_id}}">{{$row->product_id}}</a></td>
                            @endif
                            </tr>
                            <tr>
                               <th width="10%"><strong>Updated At</strong></th>
                               <td href="">{{$row->updated_at}}</td>
                            </tr>
                        </table>
                        <div align="center">
                        @if($row->status == "Closed")
                            <a href="{{route('qa_search', ['jID'=>$row->job_id, 'ID'=>$row->product_id])}}" class="button">View Quality Assurance</a>
                        @else
                            <a href="edit_work/{{$row->job_id}}" class="button">Edit</a>
                        @endif
                        </div>
                    @endforeach
               </article>
        </div>
@endsection
