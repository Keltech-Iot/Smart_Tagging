@extends('layout.mainlayout')
@section('content')

<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2 align="center">Node Termination Record</h2>

                @foreach($cloFib as $title)
                <p>
                        <h5>Joint Closure Name: <strong>{{$title->closure_id}}</strong></h5>
                        <h5>Tray Number: <strong>{{$title->tray_number}}</strong></h5>
                    </div>

                    <div class="meta">
                        <p><strong>Last Updated: </strong>{{$title->updated_at}}</p><br/>
                        <a href="cloFibre_edit/{{$title->upstream_cable}}/{{$title->fibre_upstream}}" class="button">Edit</a>
                    </div>
                </p>
                @endforeach
        </header>
        <h2 align="center" style="color:#f54242">Upstream</h2>
        <table class="table">
            <thead>
                <tr>
                    <th width="45%"><strong>Fibre Number</strong></th>
                    <th width="40%"><strong>Cable Name</strong></th>
                    <th><strong>Circuit Information</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($cloFib as $r)
                    <td>{{$r->fibre_upstream}}</td>
                    <td>{{$r->upstream_cable}}</td>
                    <td>{{$r->upstreamData}}</td>
                @endforeach
                </tr>
            </tbody>
        </table>
        <hr>
             <div align="center"><h2>--- Spliced To ---</h2></div>
        <hr>
         <h2 align="center" style="color:#42f545">Downstream</h2>
            <table class="table">
                    <thead>
                        <tr>
                            <th width="45%"><strong>Fibre Number</strong></th>
                            <th width="40%"><strong>Cable Name</strong></th>
                            <th><strong>Circuit Information</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($cloFib as $row)
                            <td>{{$row->fibre_downstream}}</td>
                            <td>{{$row->downstream_cable}}</td>
                            <td>{{$row->downstreamData}}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
        </article>
</div>

@endsection
