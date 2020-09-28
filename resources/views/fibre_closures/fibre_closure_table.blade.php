@extends('layout.mainlayout')
@section('content')

<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Joint Closures</h2>
		    </div>
            <div class="meta">
               <span class="image fit"><img src="images/products/Jc.jpeg"></span>
            </div>
        </header>


            <a href="{{url('closures/create')}}" class="button"><span>Add</span></a>
            <br/>
            <br/>
            <h3>Search by Joint Closure Name</h3>
            <form class="search-form d-none d-md-block" action="{{route('search_clo_id')}}" method="post">
                <input type="text" class="form-control" name="ID" placeholder="Search Here" title="Search here">
                @csrf
            </form>
            <br/>

            <table class="table">
            <thead>
            <tr>
                <th><strong>No.</strong></th>
                <th><strong>Joint Closure Name</strong></th>
                <th><strong>Main Exchange</strong></th>
                <th><strong>Function</strong></th>
                <th><strong>Work Point</strong></th>
            </tr>
            </thead>
            <tbody>

            @php
                $i = 0;
            @endphp

            @foreach($ClosureData as $row)

                @php
                    $i++;
                @endphp

            <tr>
                <td>{{$i}}</td>
                <td><a href="lobby_clo/{{$row->closure_id}}"> {{$row->closure_id}} </a></td>
                <td>{{$row->exchange}}</td>
                <td> {{$row->type}}</td>
                @if($row->position == "Manhole")
                <td><a href="manhole/{{$row->position_id}}"> {{$row->position}}: {{$row->position_id}} </a></td>
                @elseif($row->position == "Aerial Network")
                <td><a href="aerial_network/{{$row->position_id}}"> {{$row->position}}: {{$row->position_id}} </a></td>
                @endif
                <td><a href="edit_clo/{{$row->closure_id}}"><span>Edit</span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
     </article>
</div>
@endsection
