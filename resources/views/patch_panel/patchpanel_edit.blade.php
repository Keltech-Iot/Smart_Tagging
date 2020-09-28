@extends('layout.mainlayout')
@section('content')

<div id="main">

	<article class="post">
    <header>
		<div class="title">
			<h2>Edit Patch Panel</h2>
		</div>
    </header>

            <form method="post" action="update/{{$edpanel->panel_name}}">
                @csrf
                <div class="form-group">
                    <label>ODF Name</label>
                    <input type="text" name="pName"  class="form-control" value="{{$edpanel->panel_name}}" placeholder="Panel Name"/>
                </div>
                <br/>
                <div class="form-group">
                    <label>Digital ID</label>
                    <input type="text" name="DigiID"  class="form-control" value="{{$edpanel->nfc}}" placeholder="Digital ID">
                </div>
                <br/>
                <div class="form-group">
                    <label>Status</label>
                    <select name="pStat" id="fibre" class="form-control" style="width:250px">
                        <option value="{{$edpanel->status}}" align="center">{{$edpanel->status}}</option>
		                <option value="Active" align="center" style="color:#42f545">Active</option>
                        <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                        <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
                     </select>
                </div>
                <br/>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="pLoc"  class="form-control" value="{{$edpanel->location}}" placeholder="Location"/>
                </div>
                <br/>
                <div class="form-group">
                     <label>Port Type</label>
			          <select name="poType" id="fibre" class="form-control" style="width:250px">
                        <option value="{{$edpanel->port_type}}" align="center">{{$edpanel->port_type}}</option>
		                <option value="Quad" align="center">-- Quad --</option>
                        <option value="Duplex" align="center">-- Duplex --</option>
                      </select>
                </div>
                <br/>
                <div class="form-group">
                    <label>Screen Display</label>
                    <input type="text" name="pScreen"  class="form-control" value="{{$edpanel->Screen_disp}}" placeholder="Screen Display"/>
                </div>
                <br/>
                <button type="edit_patchpanel" class="btn btn-success btn-fw">Submit</button>
                </form>
         </article>
    </div>

@endsection
