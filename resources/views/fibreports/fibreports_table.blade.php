@extends('layout.mainlayout')

@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Fibre Ports</h2>
		    </div>
        </header>

        <a href="{{route('fibreport/create')}}" class="btn btn-success btn-fw"><span>Add</span></a>
        <br/>
        <br/>
        <label>Search Ports by Panel ID</label>
        <form class="search-form d-none d-md-block" action="search_ports_pID" method="post">
            <input type="text" class="form-control" name="pID" placeholder="Search Here" title="Search here">
            @csrf
        </form>
        <br/>
               
            <table class="table">
            <thead>
            <tr>
                <th><strong>Port Number</strong></th>
                <th><strong>Fibre Name</strong></th>
                <th><strong>Cable ID</strong></th>
                <th><strong>Circuit Info</strong></th>
                <th><strong>Installation Date</strong></th>
                <th><strong>Function</strong></th>
                <th><strong>Customer Reference</strong></th>
                <th><strong>Bandwidth</strong></th>
            </tr>
            </thead>
            <tbody>
            @foreach($FibrePortData as $row)
                <tr>
                <td> {{$row->port_id}}</td>
                <td> {{$row->fibre_name}}</td>
                <td> {{$row->cable_id}} </td>
                <td> {{$row->panel_id}} </td>
                <td> {{$row->circuit_info}} </td>
                <td> {{$row->function}} </td>
                <td> {{$row->customer_ref}} </td>
                <td> {{$row->bandwidth}} </td>
                <td> <a href="edit_fibreport/{{$row->port_id}}"><span>Edit</span></a> </td>
                </tr>
            @endforeach
                                
            </tbody>
        </table>
        </article>
</div>
@endsection
