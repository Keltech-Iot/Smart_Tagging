@extends('layout.mainlayout')
@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Edit Splitter</h2>
                <h4>Work Point: {{$edspl->wp_name}}</h4>
		    </div>
        </header>

            <form method="POST" action="{{route('update_splitter', ['splID'=>$edspl->splitter_name])}}" class="forms-sample">
              @csrf

              <label>Splitter Name</label>
              <input type="text" name="splID" placeholder="Splitter Name" value="{{$edspl->splitter_name}}" class="form-control">
              @error('manID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Work Point Name</label>
              <input type="text" name="wp" placeholder="Closure Name" class="form-control" value="{{$edspl->wp_name}}" readonly>
              @error('cloID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Main Exchange</label>
              <input type="text" name="exchange" placeholder="Main Exchange" value="{{$edspl->main_exchange}}" class="form-control">
              @error('upNode')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Type</label>
              <select name="type" class="form-control" style="width:250px">
                <option value="{{$edspl->type}}" align="center">{{$edspl->type}}</option>
                <option value="1x2" align="center">1x2</option>
                <option value="1x4" align="center">1x4</option>
                <option value="1x8" align="center">1x8</option>
                <option value="1x16" align="center">1x16</option>
                <option value="1x32" align="center">1x32</option>
                <option value="1x64" align="center">1x64</option>
                <option value="2x2" align="center">2x2</option>
                <option value="2x4" align="center">2x4</option>
                <option value="2x8" align="center">2x8</option>
                <option value="2x16" align="center">2x16</option>
                <option value="2x32" align="center">2x32</option>
                <option value="2x64" align="center">2x64</option>
              </select>
              @error('type')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Port/Tray Number</label>
              <input type="text" name="fixPoint" placeholder="Port Number" value="{{$edspl->fixation_point}}" class="form-control">
              @error('trayNum')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="update_splitter" class="btn btn-success btn-fw">Submit</button>  
            </form>            
       </article>
    </div>
@endsection
