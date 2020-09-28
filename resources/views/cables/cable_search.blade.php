@extends('layout.mainlayout')
@section('content')

<div id="main">

	<article class="post">
        <header>
			<div class="title">
                <h2>{{$jun}}: <a style="color:#3754e6">{{$jID}}</a></h2>
				<h2 style="color:#b5b5b5">Cables</h2>
			</div>
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/products/cable.jpg')}}" /></span>
            </div>
        </header>

    <a href="{{route('cables/create', ['jun'=>$jun, 'jID'=>$jID])}}" class="button"><span>Add</span></a>
    <br/>
    <br/>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="3%"><strong>No.</strong></th>
            <th><strong>Cable Name</strong></th>
            <th><strong>Function</strong></th>
            <th><strong>Upstream Node</strong></th>
            <th><strong>Downstream Node</strong></th>
            <th><strong>Cable Type</strong></th>
            <th><strong>Fibre Size</strong></th>
            <th><strong>Status</strong></th>
        </tr>
        </thead>
    <tbody>
    @php
        $i = 0;
    @endphp
    @foreach($cables as $row)
    @php
        $i++;
    @endphp
    <tr>
        <td>{{$i}}</td>
        <td> {{$row->cable_id}}</td>
        <td> {{$row->function}} </td>
        <td> {{$row->upstream_info}}</td>
        <td> {{$row->downstream_info}}</td>
        <td> {{$row->cable_type}} </td>
        <td> {{$row->fibre_type}} </td>
        <td> @if($row->status == "Active")
            <a style="color:#42f545"> Active </a>
        @elseif($row->status == "Reserved")
        <a  style="color:#f5ce42">Reserved</a>
        @elseif($row->status == "Disabled")
        <a  style="color:#f54242">Disabled</a>
        @elseif($row->status == "Available")
        <a>Available</a>
        @endif</td>
        <td width="10%"> <a href="edit_cable/{{$row->cable_id}}"><span>Edit</span></a> </td>
    </tr>
    @endforeach
    </tbody>
    </table>
                
    </article>
</div>

@endsection
