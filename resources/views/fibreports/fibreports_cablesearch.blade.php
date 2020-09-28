@extends('layout.mainlayout')
@section('content')

<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Fibre Port</h2>
		    </div>
        </header>
                @if (isset($details))
                 <table class="table">
                    <thead>
                    <tr>
                        <th><strong>ID</strong></th>
                        <th><strong>Name</strong></th>
                        <th><strong>Cable ID</strong></th>
                        <th><strong>Port Number</strong></th>
                        <th><strong>ODF ID</strong></th>
                        <th><strong>Circuit Info</strong></th>
                        <th><strong>Function</strong></th>
                        <th><strong>Customer Reference</strong></th>
                        <th><strong>Bandwidth</strong></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $row)
                      <tr>
                        <td> {{$row->port_id}}</td>
                        <td> {{$row->fibre_name}}</td>
                        <td> {{$row->cable_id}} </td>
                        <td> {{$row->port_number}} </td>
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
                @else
                    {{$message}}
                @endif
            </article>
    </div>
@endsection
