@extends('layout.mainlayout')
@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Quality Assurance Form</h2>
		    </div>
        </header>

        <form method="POST" action="{{route('storeQA_Panel', ['pID'=>$pID])}}" class="forms-sample" enctype="multipart/form-data">
            @csrf

            <label>Job Name</label>
            <input type="text" name="jobID" placeholder="Job ID" value="{{$jobID}}" class="form-control" readonly>
            @error('jobID')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>ODF ID</label>
            <input type="text" name="pID" placeholder="ODF ID" value="{{$pID}}" class="form-control" readonly>
            @error('pID')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Port Number</label>
            <select name="pNum" class="form-control" style="width:250px">
            @for($i=1; $i<25; $i++)
                <option value="{{$i}}" align="center">{{$i}}</option>
            @endfor
            </select>
            @error('pNum')
            <div>{{$message}}</div>
            @enderror
            <br/>         
            <label>Terminal Photo</label>
            <input type="file" name="termImg" class="form-control">
            @error('termImg')
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
