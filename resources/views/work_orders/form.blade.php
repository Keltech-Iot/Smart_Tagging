@extends('layout.mainlayout')
@section('content')
<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2>New Work Order</h2>
			</div>
        </header>

            <form method="POST" action="work_order_store" class="forms-sample">
              @csrf

              <label>Job Name</label>
              <input type="text" name="jobID" placeholder="Job Name" class="form-control">
              @error('jobID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Detailed Job Description</label>
              <textarea type="text" name="jobDes" placeholder="Job Description" class="form-control"></textarea>
              @error('jobDes')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Project Name</label>
              <input type="text" name="projID" placeholder="Project Name" class="form-control">
              @error('projID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Location</label>
              <input type="text" name="loc" placeholder="Location" class="form-control">
              @error('loc')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Planner</label>
              <input type="text" name="planner" placeholder="Planner" class="form-control">
              @error('planner')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Certified By</label>
              <input type="text" name="cert" placeholder="Certified By" class="form-control">
              @error('cert')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Assign To</label>
              <input type="text" name="tech" placeholder="Technican" class="form-control">
              @error('tech')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Customer</label>
              <input type="text" name="cust" placeholder="Customer" class="form-control">
              @error('cust')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Product Type</label>
              <select name="type" class="form-control" style="width:250px">
                <option value="Patch Panel" align="center">ODF</option>
                <option value="Joint Closure" align="center">Joint Closure</option>
                <option value="Manhole" align="center">Manhole</option>
                <option value="Aerial Network" align="center">Aerial Network</option>
              </select>
              @error('type')
              <div>{{$message}}</div>
              @enderror
              <br/>         
              <label>Product Name</label>
              <input type="text" name="proID" placeholder="Product ID" class="form-control">
              @error('proID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Component Type</label>
              <input type="text" name="comType" placeholder="Component Type" class="form-control">
              @error('comType')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Status</label>
              <select name="stat" class="form-control" style="width:250px">
                <option value="Priority" align="center" style="color:#de4dff">Priority</option>
                <option value="Assigned" align="center" style="color:#37ff00">Assigned</option>
                <option value="In Progress" align="center" style="color:#ffbb00">In Progress</option>
              </select>
              @error('stat')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Customer Notes</label>
              <input type="text" name="custNotes" placeholder="Customer Notes" class="form-control">
              @error('custNotes')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <button type="work_order_store" class="button">Submit</button>  
            </form>            
        </article>
    </div>
@endsection
