@extends('layout.mainlayout')
@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>New Project</h2>
		    </div>
        </header>

            <form method="POST" action="store_project" class="forms-sample">
              @csrf

              <label>Project Name</label>
              <input type="text" name="projID" placeholder="Project ID" class="form-control">
              @error('projID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Project Description</label>
              <textarea type="text" name="projDes" placeholder="Project Description" class="form-control"></textarea>
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
              <label>Area</label>
              <input type="text" name="area" placeholder="Area" class="form-control">
              @error('area')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_project" class="button">Submit</button>  
            </form>            
       </article>
    </div>
@endsection
