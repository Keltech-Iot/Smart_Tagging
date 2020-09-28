@extends ('layout.mainlayout')
@section('content')
<div id="main">

<article class="post">
    <header>
		<div class="title">
			<h2>Aerial Network</h2>
		</div>
    </header>

        <table class="table table-bordered">
        <thead>
        <tr>
            <th><strong>Aerial Network ID</strong></th>
            <th><strong>Function</strong></th>
            <th><strong>Location</strong></th>
        </tr>
        </thead>
        <tbody>
        @foreach($aerialNet as $row)
            <tr>
            <td><a href="clo_search/{{$row->aerial_id}}"> {{$row->aerial_id}} </a></td>
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
