@extends('layout.mainlayout')
@section('content')

<div id="main">

	<article class="post">
        @if (isset($details))
        @foreach($details as $row)
        <header>
			<div class="title">
				<h2>ODF: <a style="color:#3754e6">{{$row->panel_name}}</a></h2>
			</div>
            <div class="meta">
               <span class="image fit"><img src="{{asset('images/products/PatchPanel.png')}}"></span>
            </div>
        </header>
            <table class="table">
            <tr>
                <th><strong>ODF Name</strong></th>
                <td><a href="lobby/{{$row->panel_name}}/{{$row->port_type}}"> {{$row->panel_name}}</a></td>
            </tr>
            <tr>
                <th><strong>Status</strong></th>
                <td> @if($row->status == "Active")
                <a style="color:#42f545"> Active </a>
                @elseif($row->status == "Reserved")
                <a  style="color:#f5ce42">Reserved</a>
                @elseif($row->status == "Disabled")
                <a  style="color:#f54242">Disabled</a>
                @else
                <a>Available</a>
                @endif</td>
            </tr>
            <tr>
                <th><strong>Location</strong></th>
                <td> {{$row->location}} </td>
            </tr>
            <tr>
                <th><strong>Port Type</stong></th>
                @if($row->port_type == "Quad")
                <td>96 Fibre</td>
                @elseif($row->port_type == "Duplex")
                <td>48 Fibre</td>
                @endif
            </tr>
            <tr>
                <th><strong>Screen Display</strong></th>
                <td> {{$row->Screen_disp}} </td>
            </tr>

        </table>

        <a href="edit/{{$row->panel_id}}" class="button"><span>Edit</span></a>
        @endforeach
        @else
            {{$message}}
        @endif
        </article>

    </div>

@endsection
