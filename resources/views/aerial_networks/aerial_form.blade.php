@extends('layout.mainlayout')
@section('content')
<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2>New Aerial Network</h2>
			</div>
        </header>

            <form method="POST" action="store_aerial_network" class="forms-sample">
              @csrf

              <label>Aerial Network ID</label>
              <input type="text" name="aerID" placeholder="Aerial Network ID" class="form-control">
              @error('aerID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital ID</label>
              <input type="text" name="digiID" placeholder="Digital ID" class="form-control">
              @error('digiID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Function</label>
              <select name="fun" id="manhole" class="form-control" style="width:250px">
                <option value="Maintenance" align="center">Maintenance</option>
                <option value="Jointing Pitt" align="center">Jointing Pitt</option>
              </select>
              @error('fun')
              <div>{{$message}}</div>
              @enderror
              <br/>         
              <label>Location</label>
              <input type="text" name="loc" placeholder="Location" class="form-control">
              @error('loc')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Latitude</label>
              <input type="text" name="lat" placeholder="Location" class="form-control">
              @error('lat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Longitude</label>
              <input type="text" name="lng" placeholder="Location" class="form-control">
              @error('lng')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_aerial_network" class="button">Submit</button>  
            </form>            
       </article>
    </div>
@endsection
