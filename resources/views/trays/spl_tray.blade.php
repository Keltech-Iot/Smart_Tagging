@extends('layout.mainlayout')
@section('content')
<style> 
        .tab { 
            display: inline-block; 
            margin-left: 100px; 
        }
</style>

<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Joint Closures: <br/> <a style="color: #3754e6">{{$cloID}}</a></h2>
                <h4>Splitters</h4>
                <h4>Digital ID: {{$DigiID}}</h4>

            </div>
            
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/products/trays.jpg')}}"></span>
            </div>
        </header>
        <div align="center">
        @php
            $p = 0;
        @endphp
        @foreach($splitter as $row)
        @php
            $p++;
        @endphp
            <h2><strong>{{$row->splitter_name}}</strong></h2>
            <hr>
            <div align="center">
            <form method="GET" action="clofibre/{{$cloID}}/{{$row->splitter_name}}">
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    @for($i=1; $i<($numFib[$p]+1); $i++)
                    <option value="{{$i}}">Output Fibre {{$i}}</option>
                    @endfor
            </select>
            <br/>
            <button type="clofibre/{{$row->cable_id}}">View Splitter Termination Record</button>
            </form>
            </div>
            <hr>
        @endforeach
        </div>
         </article>
    </div>

@endsection
