@extends ('layout.mainlayout')
@section('content')
<div id="main">

  @foreach($manhole as $row)
    <article class="post">
        <header>
		    <div class="title">
			    <h2>Manholes: {{$row->manhole_id}}</h2>
		    </div>
        </header>

            <table class="table table-bordered">
            <thead>
            <tr>
                <th><strong>Manhole ID</strong></th>
                <th><strong>Function</strong></th>
                <th><strong>Location</strong></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <td><a href="clo_search/{{$row->manhole_id}}"> {{$row->manhole_id}} </a></td>
                <td> {{$row->funct}} </td>
                <td><a href="map/{{$row->lat}}/{{$row->long}}/{{$row->manhole_id}}"> {{$row->location}}</a> </td>
                <td><a href="edit_man/{{$row->manhole_id}}"><span>Edit</span></a></td>
                </tr>
            </tbody>
        </table>
    </article>
   @endforeach
</div>
@endsection
