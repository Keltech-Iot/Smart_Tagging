@extends('layout.mainlayout')
@section('content')

<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Edit Manhole</h2>
		    </div>
        </header>

            <form method="POST" action="update/{{$edman->manhole_id}}" class="forms-sample">
              @csrf

              <label>Manhole ID</label>
              <input type="text" name="manID" placeholder="Manhole ID" class="form-control" value="{{$edman->manhole_id}}">
              @error('manID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital ID</label>
              <input type="text" name="digiID" placeholder="Digital ID" class="form-control" value="{{$edman->digi_id}}">
              @error('digiID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Function</label>
              <select name="fun" id="manhole" class="form-control" style="width:250px">
                <option value="{{$edman->funct}}" align="center">{{$edman->funct}}</option>
                <option value="Maintenance" align="center">Maintenance</option>
                <option value="Jointing Pitt" align="center">Jointing Pitt</option>
              </select>
              @error('fun')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Type</label>
              <select name="type" id="manhole" class="form-control" style="width:250px">
                <option value="{{$edman->type}}" align="center">{{$edman->type}}</option>
                <option value="Carraige Way" align="center">Carraige Way</option>
                <option value="Pedestrian" align="center">Pedestrian</option>
              </select>
              @error('fun')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Location</label>
              <input type="text" name="loc" placeholder="Location" value="{{$edman->location}}" class="form-control">
              @error('loc')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Lattitude</label>
              <input type="text" name="lat" placeholder="Lattitude" value="{{$edman->lat}}" class="form-control">
              @error('lat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Longitude</label>
              <input type="text" name="long" placeholder="Longitude" value="{{$edman->long}}" class="form-control">
              @error('long')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_manhole" class="btn btn-success btn-fw">Submit</button>  
            </form>
         </article>
    </div>
@endsection
