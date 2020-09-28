@extends('layout.mainlayout')
@section('content')
<div id="main">

	<article class="post">
    <header>
		<div class="title">
			<h2>New Patch Panel</h2>
		</div>
    </header>

            <form method="POST" action="store_patchpanel" class="forms-sample">
              @csrf

              <label>ODF Name</label>
              <input type="text" name="pnlName" placeholder="ODF Name" class="form-control">
              @error('pnlName')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital ID</label>
              <input type="text" name="DigiID" placeholder="Digital ID" class="form-control">
              @error('DigiID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Status</label>
              <select name="stat" id="fibre" class="form-control" style="width:250px">
                <option value="Available" align="center">Available</option>
		        <option value="Active" align="center" style="color:#42f545">Active</option>
                <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
              </select>
              @error('stat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Location</label>
              <input type="text" name="location" placeholder="Panel Location" class="form-control">
              @error('location')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Port Type</label>
			  <select name="poType" id="fibre" class="form-control" style="width:250px">
                <option align="center">-- Select Port Type --</option>
		        <option value="Quad" align="center">-- Quad --</option>
                <option value="Duplex" align="center">-- Duplex --</option>
              </select>
              @error('poType')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Screen Display</label>
              <input type="text" name="screen" placeholder="Screen Display" class="form-control">
              @error('screen')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_patchpanel" class="btn btn-success btn-fw">Submit</button>  
            </form>
    </article>
</div>
@endsection
