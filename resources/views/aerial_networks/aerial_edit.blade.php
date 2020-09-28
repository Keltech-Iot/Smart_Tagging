@extends('layout.mainlayout')
@section('content')

<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Edit Manhole</h2>
		    </div>
        </header>

            <form method="POST" action="update/{{$edaerial->aerial_id}}" class="forms-sample">
              @csrf

              <label>Aerial Network ID</label>
              <input type="text" name="aerID" placeholder="Aerial Network ID" class="form-control" value="{{$edaerial->aerial_id}}">
              @error('aerID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital ID</label>
              <input type="text" name="digiID" placeholder="Digital ID" class="form-control" value="{{$edaerial->digi_id}}" readonly>
              @error('digiID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Function</label>
              <select name="fun"class="form-control" style="width:250px">
                <option value="{{$edaerial->funct}}" align="center">{{$edaerial->funct}}</option>
                <option value="Maintenance" align="center">Maintenance</option>
                <option value="Jointing Pitt" align="center">Jointing Pitt</option>
              </select>
              @error('fun')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Location</label>
              <input type="text" name="loc" placeholder="Location" value="{{$edaerial->location}}" class="form-control">
              @error('loc')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Lattitude</label>
              <input type="text" name="lat" placeholder="Lattitude" value="{{$edaerial->lat}}" class="form-control">
              @error('lat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Longitude</label>
              <input type="text" name="long" placeholder="Longitude" value="{{$edaerial->long}}" class="form-control">
              @error('long')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_aerial" class="button">Submit</button>  
            </form>
         </article>
    </div>
@endsection
