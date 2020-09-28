@extends('layout.mainlayout')
@section('content')

<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Edit Fibre Port: {{$edport->panel_id}} {{$edport->fibre_name}}</h2>
		    </div>
        </header>

            <form method="post" action="update/{{$edport->port_id}}">
                @csrf
                <div class="form-group">
                    <label>Fibre ID</label>
                    <input type="text" name="poID"  class="form-control" value="{{$edport->port_id}}" placeholder="Port ID" readonly>
                </div>
                <br/>
                <div class="form-group">
                    <label>Fibre Name</label>
                    <input type="text" name="fbName"  class="form-control" value="{{$edport->fibre_name}}" placeholder="Fibre Name"/>
                </div>
                <br/>
                <div class="form-group">
                    <label>ODF Name</label>
                    <input type="text" name="pID"  class="form-control" value="{{$edport->panel_id}}" placeholder="Panel ID" readonly>
                </div>
                <br/>
                <div class="form-group">
                  <label>Cable ID</label>
                  <select name="cblID" id="fibre" class="form-control" style="width:250px">
                    <option value="{{$edport->cable_id}}" align="center">{{$edport->cable_id}}</option>
                    @foreach($cables as $c)
                        <option value="{{$c->cable_id}}" align="center">{{$c->cable_id}}</option>
                    @endforeach
                  </select>
                </div>
                <br/>
                <div class="form-group">
                    <label>Circuit Information</label>
                    <input type="text" name="cInfo"  class="form-control" value="{{$edport->circuit_info}}" placeholder="Circuit Information"/>
                </div>
                <br/>
                <div class="form-group">
                    <label>Function</label>
                   <select name="funct" id="fibre" class="form-control" style="width:250px">
                        <option value="{{$edport->function}}" align="center">{{$edport->function}}</option>
		                <option value="Active" align="center" style="color:#42f545">Active</option>
                        <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                        <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
                   </select>
                </div>
                <br/>
                <div class="form-group">
                    <label>Customer Reference</label>
                    <input type="text" name="custRef"  class="form-control" value="{{$edport->customer_ref}}" placeholder="Customer Reference"/>
                </div>
                <br/>
                <div class="form-group">
                    <label>Bandwidth</label>
                    <input type="text" name="Bwidth"  class="form-control" value="{{$edport->bandwidth}}" placeholder="Bandwidth"/>
                </div>
                <br/>
                <button type="edit_fibreport" class="btn btn-success btn-fw">Submit</button>
                </form>
          </article>
    </div>
@endsection
