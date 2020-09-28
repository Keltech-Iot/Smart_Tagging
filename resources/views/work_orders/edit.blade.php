@extends('layout.mainlayout')
@section('content')

<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2>Edit Work Order</h2>
			</div>
        </header>

            <form method="POST" action="update/{{$edwork->job_id}}" class="forms-sample">
              @csrf

              <label>Job ID</label>
              <input type="text" name="jobID" placeholder="Job ID" class="form-control" value="{{$edwork->job_id}}">
              @error('jobID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Job Description</label>
              <textarea type="text" name="jobDes" placeholder="Job Description" class="form-control">{{$edwork->jobDes}}</textarea>
              @error('jobDes')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Project ID</label>
              <input type="text" name="projID" placeholder="Project ID" class="form-control" value="{{$edwork->proj_id}}">
              @error('projID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Location</label>
              <input type="text" name="loc" placeholder="Location" class="form-control" value="{{$edwork->location}}">
              @error('loc')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Planner</label>
              <input type="text" name="planner" placeholder="Planner" value="{{$edwork->planner}}" class="form-control">
              @error('planner')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Certified By</label>
              <input type="text" name="cert" placeholder="Certified By" class="form-control" value="{{$edwork->cert}}">
              @error('cert')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Assign To</label>
              <input type="text" name="tech" placeholder="Technican" class="form-control" value="{{$edwork->tech}}">
              @error('tech')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Customer</label>
              <input type="text" name="cust" placeholder="Customer" class="form-control" value="{{$edwork->customer}}">
              @error('cust')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Component Type</label>
              <input type="text" name="comType" placeholder="Compenent Type" class="form-control" value="{{$edwork->component_type}}">
              @error('comtype')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Product Type</label>
              <select name="type" class="form-control" style="width:250px">
                <option value="{{$edwork->product_type}}" align="center">{{$edwork->product_type}}</option>
                <option value="Patch Panel" align="center">ODF</option>
                <option value="Joint Closure" align="center">Joint Closure</option>
                <option value="Manhole" align="center">Manhole</option>
                <option value="Aerial Network" align="center">Aerial Network</option>
              </select>
              @error('type')
              <div>{{$message}}</div>
              @enderror
              <br/>         
              <label>Product ID</label>
              <input type="text" value="{{$edwork->product_id}}" name="proID" placeholder="Product ID" class="form-control">
              @error('proID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Status</label>
              <select name="stat" class="form-control" style="width:250px">
                <option value="{{$edwork->status}}" align="center">{{$edwork->status}}</option>
                <option value="Priority" align="center" style="color:#de4dff">Priority</option>
                <option value="Assigned" align="center" style="color:#37ff00">Assigned</option>
                <option value="In Progress" align="center" style="color:#ffbb00">In Progress</option>
              </select>
              @error('stat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Customer Notes</label>
              <input type="text" name="custNotes" value="{{$edwork->custNotes}}" placeholder="Customer Notes" class="form-control">
              @error('custNotes')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="store_work_order" class="btn btn-success btn-fw">Submit</button>  
            </form>
         </article>
    </div>
@endsection
