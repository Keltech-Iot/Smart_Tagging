@extends('layout.mainlayout')
@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Quality Assurance Form</h2>
                <h4>Work Order: {{$jobID}}</h4>
                <h4>Work Point: {{$WP_id}}</h4>
		    </div>
        </header>

            <form method="POST" action="{{route('storeQA_WP')}}" class="forms-sample" enctype="multipart/form-data">
              @csrf

              <label>Job Name</label>
              <input type="text" name="jobID" placeholder="Job ID" value="{{$jobID}}" class="form-control" readonly>
              @error('jobID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Work Point Name</label>
              <input type="text" name="WP_id" placeholder="Manhole\Aerial Network ID" value="{{$WP_id}}" class="form-control" readonly>
              @error('manID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Type of Work Point</label>
              <select name="type" class="form-control" style="width:250px">
                <option value="Maintenance" align="center">Maintenance</option>
                <option value="Jointing" align="center">Jointing</option>
              </select>
              @error('tNum')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Completed Job Photo</label>
              <input type="file" name="comImg" class="form-control">
              @error('comImg')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Additional Information</label>
              <input type="text" name="AdInfo" placeholder="Additional Info" class="form-control">
              @error('AdInfo')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Digital Signature</label>
              <input type="text" name="digSig" placeholder="Full Name Here" class="form-control">
              @error('digSig')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="" class="button">Submit</button>  
            </form>            
        </article>
    </div>
@endsection
