@extends('layout.mainlayout')
@section('content')


<div id="main">

    <article class="post">
        <header>
		    <div class="title">
                <h2>{{$WP}}: {{$ID}}</h2>
			    <h4>Joint Closures</h4>
		    </div>
            <div class="meta">
               <span class="image fit"><img src="{{asset('images/products/Jc.jpeg')}}"></span>
            </div>
        </header>

            <table class="table table-bordered">
            <thead>
            <tr>
                <th><strong>No.</strong></th>
                <th><strong>Joint Closure Id</strong></th>
                <th><strong>Main Exchange</strong></th>
                <th><strong>Closure Type</strong></th>
                <th><strong>Position</strong></th>
            </tr>
            </thead>
            <tbody>

            @php
                $i = 0;
            @endphp

            @foreach($clos as $row)
                @php
                    $i++;
                @endphp
                <tr>
                <td>{{$i}}</td>
                <td><a href="lobby_clo/{{$row->closure_id}}"> {{$row->closure_id}}</a></td>
                <td>{{$row->exchange}}</td>
                <td> {{$row->type}}</td>
                @if($row->position == "Manhole")
                <td><a href="manhole/{{$row->position_id}}"> {{$row->position}}: {{$row->position_id}} </a></td>
                @elseif($row->position == "Aerial Network")
                <td><a href="aerial_network/{{$row->position_id}}"> {{$row->position}}: {{$row->position_id}} </a></td>
                @endif
                <td> <a href="edit_clo/{{$row->closure_id}}"><span>Edit</span></a> </td>
                </tr>
            @endforeach
                                
            </tbody>
        </table>
    </article>
</div>

@endsection
