@extends ('layout.mainlayout')
@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Projects</h2>
		    </div>
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/keltech_logo.jpg')}}"/></span>
            </div>
        </header>

            <a href="{{url('projects/create')}}" class="button"><span>Add</span></a>
            <br/>
            <br/>
            <h3>Search by Project Name</h3>
            <form class="search-form d-none d-md-block" action="{{route('search_proj_id')}}" method="post">
                <input type="text" class="form-control" name="ID" placeholder="Search Here" title="Search here">
                @csrf
            </form>
            <br/>

            <table class="table">
            <thead>
            <tr>
                <th width="10%"><strong>Project Name</strong></th>
                <th><strong>Project Description</strong></th>
                <th width="20%"><strong>Location</strong></th>
                <th width="20%"><strong>Area</strong></th>
            </tr>
            </thead>
            <tbody>
            @foreach($ProjectData as $row)
                <tr>
                    <td><a href="projects/work_orders/{{$row->proj_id}}"> {{$row->proj_id}} </a></td>
                    <td> {!!nl2br(e($row->proj_des))!!} </td>
                    <td>{{$row->location}}</td>
                    <td>{{$row->area}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </article>
</div>

@endsection
