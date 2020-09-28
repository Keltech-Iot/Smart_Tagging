@extends('layout.mainlayout')
@section('content')

<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>New Joint Closure</h2>
		    </div>
        </header>


        <form method="POST" action="{{route('store_joint_closure')}}" class="forms-sample">
            @csrf

            <label>Joint Closure Name</label>
            <input type="text" name="cloID" placeholder="Joint Closure Name" class="form-control">
            @error('cloID')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Digital ID</label>
            <input type="text" name="DigiID" placeholder="Digital ID" class="form-control">
            @error('DigiID')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Main Exchange</label>
            <input type="text" name="exchange" placeholder="Main Exchange" class="form-control">
            @error('exchange')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Joint Closure Function</label>
		    <select name="cloType" id="Closure" class="form-control" style="width:250px">
                <option align="center">-- Select Closure Function --</option>
		        <option value="Backhaul" align="center">Backhaul</option>
                <option value="Feeder" align="center">Feeder</option>
                <option value="Aggregation" align="center">Aggregation</option>
                <option value="Distribution" align="center">Distribution</option>
                <option value="Access" align="center">Access</option>
            </select>
            @error('cloType')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Work Point</label>
            <select name="pos" class="form-control" style="width:250px">
		    <option value="Manhole" align="center">Manhole</option>
            <option value="Aerial Network" align="center">Aerial Network</option>
            </select>
            @error('pos')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <label>Work Point Name</label>
            <input type="text" name="posID" placeholder="Manhole/Aerial Network Name" class="form-control">
            @error('mID')
            <div>{{$message}}</div>
            @enderror
            <br/>
            <button type="store_joint_closure" class="button">Submit</button>  
        </form>            
    </article>
</div>
@endsection
