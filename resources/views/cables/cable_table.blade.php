@extends('layout.mainlayout')

@section('content')
<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2>Cables</h2>
			</div>
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/products/cable.jpg')}}" /></span>
            </div>
        </header>

        <a href="{{route('cables/create')}}" class="button"><span>Add</span></a>
        <br/>
        <br/>
        <label>Search Cables by Panel ID</label>
        <form class="search-form d-none d-md-block" action="search_cable_pID" method="post">
            <input type="text" class="form-control" name="pID" placeholder="Search Here" title="Search here">
            @csrf
        </form>
        <br/>
        <br/>
        <label>Search Cables by Cable ID</label>
        <form class="search-form d-none d-md-block" action="search_cable_cID" method="post">
            <input type="text" class="form-control" name="cID" placeholder="Search Here" title="Search here">
            @csrf
        </form>
        <br/>
        <br/>

            <table class="table table-bordered">
            <thead>
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Junction ID</strong></th>
                <th><strong>Cable Type</strong></th>
                <th><strong>Fibre Type</strong></th>
                <th><strong>Function</strong></th>
                <th><strong>Status</strong></th>
            </tr>
            </thead>
            <tbody>
            @foreach($CableData as $row)
                <tr>
                <td> {{$row->cable_id}}</td>
                <td> {{$row->junction_id}} </td>
                <td> {{$row->cable_type}} </td>
                <td> {{$row->fibre_type}} </td>
                <td> {{$row->function}} </td>
                <td> {{$row->status}} </td>
                <td> <a href="edit_cable/{{$row->cable_id}}"><span>Edit</span></a> </td>
                </tr>
            @endforeach
                                
            </tbody>
        </table>
    </article>
</div>
@endsection
