@extends ('layout.mainlayout')
@section('content')
<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2>Aerial Networks</h2>
			</div>
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/keltech_logo.jpg')}}"></span>
            </div>
        </header>
            <a href="{{url('aerial_network/create')}}" class="button"><span>Add</span></a><br/><br/>
            <h3>Search by Aerial Network ID</h3>
            <form class="search-form d-none d-md-block" action="{{route('search_aer_id')}}" method="post">
                <input type="text" class="form-control" name="ID" placeholder="Search Here" title="Search here">
                @csrf
            </form>
            <br/>

            <table class="table table-bordered">
            <thead>
            <tr>
                <th width="2%">No.</th>
                <th><strong>Aerial Network ID</strong></th>
                <th><strong>Function</strong></th>
                <th><strong>Location</strong></th>
            </tr>
            </thead>
            <tbody>

            @php
                $i = 0;
            @endphp

            @foreach($AerialData as $row)

            @php
                $i++;
            @endphp

                <tr>
                <td>{{$i}}</td>
                <td><a href="{{route('search_aer', ['aer_id'=>$row->aerial_id])}}"> {{$row->aerial_id}} </a></td>
                <td> {{$row->funct}} </td>
                <td><a href="{{route('map_aerial', ['lat'=>$row->lat, 'lng'=>$row->long, 'id'=>$row->aerial_id])}}"> {{$row->location}}</a> </td>
                <td><a href="edit_aerial/{{$row->aerial_id}}"><span>Edit</span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
     </article>
  </div>

@endsection
