@extends('layout.mainlayout')
@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>New Fibre Port</h2>
                <h4>Fibre No.: {{$search}}</h4>
                <h4>Patch Panel: {{$panelID}}</h4>
		    </div>
        </header>

            <form method="POST" action="{{route('store_fibreport')}}" class="forms-sample">
              @csrf

              <label>Fibre ID</label>
              <input type="text" name="poID" placeholder="Fibre ID" value="{{$search}}" class="form-control" readonly>
              @error('poID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Fibre Name</label>
              <input type="text" name="fbName" placeholder="Fibre Name" class="form-control">
              @error('fbName')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>ODF Name</label>
              <input type="text" name="pID" placeholder="Panel ID" value="{{$panelID}}" class="form-control" readonly>
              @error('pID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Cable ID</label>
              <select name="cblID" id="fibre" class="form-control" style="width:250px">
                @foreach($cables as $c)
                    <option value="{{$c->cable_id}}" align="center">{{$c->cable_id}}</option>
                @endforeach
              </select>
              @error('cblID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Circuit Info</label>
              <input type="text" name="cInfo" placeholder="Circuit Info" class="form-control">
              @error('cInfo')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Status</label>
              <select name="funct" id="fibre" class="form-control" style="width:250px">
                <option value="Available" align="center">Available</option>
		        <option value="Active" align="center" style="color:#42f545">Active</option>
                <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
              </select>
              @error('funct')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Customer Reference</label>
              <input type="text" name="custRef" placeholder="Customer Reference" class="form-control">
              @error('custRef')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Bandwidth</label>
              <input type="text" name="Bwidth" placeholder="Bandwidth" class="form-control">
              @error('Bwidth')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_fibreport" class="btn btn-success btn-fw">Submit</button>  
            </form>

        </article>
    </div>
@endsection
