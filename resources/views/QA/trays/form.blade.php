@extends('layout.mainlayout')
@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Quality Assurance Form</h2>
                <h4>Work Order: {{$jobID}}</h4>
                <h4>Joint Closure: {{$cloID}}</h4>
		    </div>
        </header>

            <form method="POST" action="{{route('storeQA_Tray', ['cloID'=>$cloID])}}" class="forms-sample" enctype="multipart/form-data">
              @csrf

              <label>Job Name</label>
              <input type="text" name="jobID" placeholder="Job ID" value="{{$jobID}}" class="form-control" readonly>
              @error('jobID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>{{$WP}} Name</label>
              <input type="text" name="manID" placeholder="Manhole\Aerial Network ID" value="{{$WP_id}}" class="form-control" readonly>
              @error('manID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Joint Closure Name</label>
              <input type="text" name="cloID" placeholder="Closure ID" value="{{$cloID}}" class="form-control" readonly>
              @error('cloID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Tray Number</label>
              <select name="tNum" class="form-control" style="width:250px">
                <option value="1" align="center">1</option>
                <option value="2" align="center">2</option>
                <option value="3" align="center">3</option>
                <option value="4" align="center">4</option>
                <option value="5" align="center">5</option>
                <option value="6" align="center">6</option>
              </select>
              @error('tNum')
              <div>{{$message}}</div>
              @enderror
              <br/>         
              <label>Splice Tray Photo</label>
              <input type="file" name="splImg" class="form-control">
              @error('splImg')
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

