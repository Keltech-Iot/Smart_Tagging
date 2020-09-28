@extends('layout.mainlayout')
@section('content')
   <div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Joint Closures: <br/> <a style="color: #3754e6">{{$cloID}}</a></h2>
                <h4>Digital ID: {{$DigiID}}</h4>

            </div>
            
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/products/trays.jpg')}}"></span>
            </div>
        </header>
        <div align="center">
        <h2 align="center" style="color:#f54242">{{$cloID}} Upstream Cables</h2>
        @php
            $p = 0;
        @endphp
        @foreach($cables as $row)
        @php
            $p++;
        @endphp
            <hr>
            <label><strong>{{$row->cable_id}}</strong></label>
            <form method="GET" action="clofibre/{{$cloID}}/{{$row->cable_id}}">
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    @for($i=1; $i<($numFib[$p]+1); $i++)
                    <option value="{{$i}}">Fibre {{$i}}</option>
                    @endfor
            </select>
            <br/>
            <button type="clofibre/{{$row->cable_id}}">View Node Termination Record</button>
            </form>
        @endforeach
        </div>
         </article>
    </div>
@endsection
