@extends('layout.mainlayout')
@section('content')


<div id="main">

<article class="post">
    <header>
		<div class="title">
			<h2>Edit Closure Fibre</h2>
            <div align="center"><h4>Joint Closure: {{$edclofib->closure_id}}</h4>
            <h4>Tray Number: {{$edclofib->tray_number}}</h4>
            <h4>Fibre No.: {{$edclofib->fibre_upstream}}</h4></div>
		
		</div>
    </header>

            <form method="post" action="update/{{$edclofib->fibre_upstream}}">
                @csrf
                <div class="form-group">
                    <label>Closure Name</label>
                    <input type="text" name="cloID"  class="form-control" value="{{$edclofib->closure_id}}" placeholder=" Closure ID" readonly>
                </div>
                <br/>
                <div class="form-group">
                    <label>Tray Number</label>
                    <input type="text" name="tNum"  class="form-control" value="{{$edclofib->tray_number}}" placeholder="Tray Number" readonly>
                </div>
                <br/>
              <hr>
              <h2 align="center" style="color:#f54242">Upstream</h2><br/>
              <div class="row gtr-uniform">
                   <div class="col-6 col-12-xsmall">
                        <label>Fibre Number</label>
                        <input type="text" name="fibNum"  class="form-control" value="{{$edclofib->fibre_upstream}}" placeholder="Fibre Upstream Number" readonly>
                    </div>
                    <br/>
                    <div class="col-6 col-12-xsmall">
                        <label>Cable Name</label>
                        <input type="text" name="UpCable"  class="form-control" value="{{$edclofib->upstream_cable}}" placeholder="Upstream Cable" >
                    </div>
                    <br/>
                    <div class="col-6 col-12-xsmall">
                        <label>Circuit Information</label>
                        <input type="text" name="UpData"  class="form-control" value="{{$edclofib->upstreamData}}" placeholder="Upstream Circuit Info"/>
                    </div>
                    <br/>
               </div>
               <hr>
              <br/>
              <div align="center"><h2>---Spliced To---</h2></div>
              <br/>
              <hr>
              <h2 align="center" style="color:#42f545">Downstream</h2>
              <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label>Fibre Number</label>
                        <input type="text" name="fibDown"  class="form-control" value="{{$edclofib->fibre_downstream}}" placeholder="Fibre Downstream"/>
                    </div>
                    <br/>
                    <div class="col-6 col-12-xsmall">
                        <label>Cable Name</label>
                        <select name="cblID" id="fibre" class="form-control" style="width:250px">
                            <option value="{{$edclofib->downstream_cable}}" align="center">{{$edclofib->downstream_cable}}</option>
                            @foreach($cables as $c)
                                <option value="{{$c->cable_id}}" align="center">{{$c->cable_id}}</option>
                            @endforeach
                            @foreach($spl as $s)
                                <option value="{{$s->splitter_name}}" align="center">{{$s->splitter_name}}</option>
                            @endforeach
                          </select>
                    </div>
                    <br/>
                    <div class="col-6 col-12-xsmall">
                        <label>Circuit Information</label>
                        <input type="text" name="DownData"  class="form-control" value="{{$edclofib->downstreamData}}" placeholder="Fibre Downstream Number"/>
                    </div>
                </div>
                <br/>
                <button type="edit_clofib" class="button">Submit</button>
                </form>
           </article>
    </div>

@endsection
