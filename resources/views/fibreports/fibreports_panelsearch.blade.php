@extends('layout.mainlayout')
@section('content')
 @foreach($fibre as $name)
    <div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Fibre Port</h2>
                <h3>ODF: {{$name->panel_id}}</h3>
                <p><strong>Fibre No.:</strong> {{$name->port_id}}</p>
    </div>
    <div class="meta">
        <p><strong>Last Updated:</strong> {{$name->updated_at}}</p>
        <p><strong>Status: </strong>
        @if($name->function == "Active")
            <a style="color:#42f545"> Active </a>
        @elseif($name->function == "Reserved")
        <a  style="color:#f5ce42">Reserved</a>
        @elseif($name->function == "Disabled")
        <a  style="color:#f54242">Disabled</a>
        @endif
        </p>
    </div>
        </header>
        <table class="alt">
        <tr>
            <th width="10%"><strong>Fibre ID</strong></th>
            <td>{{$name->port_id}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Fibre Name</strong></th>
            <td>{{$name->fibre_name}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Cable ID</strong></th>
            <td>{{$name->cable_id}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>ODF ID</strong></th>
            <td>{{$name->panel_id}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Circuit Info</strong></th>
            <td>{{$name->circuit_info}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Customer Reference</strong></th>
            <td>{{$name->customer_ref}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Bandwidth</strong></th>
            <td>{{$name->bandwidth}}</td>
        </tr>
        <tr>
            <th width="10%"><strong>Updated At</strong></th>
            <td>{{$name->updated_at}}</td>
        </tr>
    </table>
    <br/>
    <br/>
    <div><a href="edit_fibreport/{{$name->port_id}}" class="button"><span>Edit</span></a></div>
                    
            
  </article>
 @endforeach
</div>

@endsection
