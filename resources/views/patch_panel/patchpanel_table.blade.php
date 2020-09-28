@extends('layout.mainlayout')
@section('content')
<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2>Optical Distribution Frames</h2>
			</div>
            <div class="meta">
               <span class="image fit"><img src="images/products/PatchPanel.png"></span>
            </div>
        </header>

                <a href="{{url('panels/create')}}" class="button"><span>Add</span></a>
                <br/>
                <br/>
                <h3>Search by ODF ID</h3>
                <form class="search-form d-none d-md-block" action="search_panel_ID" method="post">
                    <input type="text" class="form-control" name="ID" placeholder="Search Here" title="Search here">
                    @csrf
                </form>
                <br/>
                <br/>

                    <table class="table">
                    <thead>
                    <tr>
                        <th width="1%"><strong>No.</strong></th>
                        <th><strong>ODF Name</strong></th>
                        <th><strong>Type</stong></th>
                        <th><strong>Status</strong></th>
                        <th><strong>Location</strong></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach($PatchPanelData as $row)

                    @php
                        $i++;
                    @endphp
                      <tr>
                        <td>{{$i}}</td>
                        <td><a href="lobby/{{$row->panel_name}}/{{$row->port_type}}"> {{$row->panel_name}}</a></td>
                        @if($row->port_type == "Quad")
                        <td>96 Fibre</td>
                        @elseif($row->port_type == "Duplex")
                        <td>48 Fibre</td>
                        @endif
                        <td> @if($row->status == "Active")
                        <a style="color:#42f545"> Active </a>
                        @elseif($row->status == "Reserved")
                        <a  style="color:#f5ce42">Reserved</a>
                        @elseif($row->status == "Disabled")
                        <a  style="color:#f54242">Disabled</a>
                        @else
                        <a>Available</a>
                        @endif</td>
                        <td> {{$row->location}} </td>
                        <td> <a href="edit/{{$row->panel_name}}"><span>Edit</span></a> </td>
                      </tr>
                    @endforeach
                                
                    </tbody>
                </table>
                </article>
           </div>
@endsection
