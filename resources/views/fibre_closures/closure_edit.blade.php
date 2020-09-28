@extends('layout.mainlayout')
@section('content')


<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Edit Joint Closure</h2>
		    </div>
        </header>


            <form method="POST" action="update/{{$edclo->closure_id}}" class="forms-sample">
              @csrf

              <label>Joint Closure ID</label>
              <input type="text" name="cloID" placeholder="Joint Closure ID" class="form-control" value="{{$edclo->closure_id}}">
              @error('cloID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital ID</label>
              <input type="text" name="DigiID" value="{{$edclo->nfc}}" placeholder="Digital ID" class="form-control">
              @error('nfc')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Joint Closure Type</label>
			  <select name="cloType" id="Closure" class="form-control" style="width:250px">
                <option align="{{$edclo->type}}">{{$edclo->type}}</option>
		        <option value="Backbone" align="center">Backbone</option>
                <option value="FibreFeeder" align="center">FibreFeeder</option>
                <option value="Distribution" align="center">Distribution</option>
                <option value="Access" align="center">Access</option>
              </select>
              @error('cloType')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Position</label>
              <select name="pos" id="Position" class="form-control" style="width:250px">
                <option value="{{$edclo->position}}" align="center">{{$edclo->position}}</option>
		        <option value="Manhole" align="center">Manhole</option>
                <option value="Aerial Network" align="center">Aerial Network</option>
              </select>
              @error('pos')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Position ID</label>
              <input type="text" name="posID" value="{{$edclo->position_id}}" placeholder="Manhole/Aerial Network ID" class="form-control">
              @error('mID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_joint_closure" class="btn btn-success btn-fw">Submit</button>  
            </form>
            </div>
        </article>
    </div>
@endsection
