@extends('layout.mainlayout')
@section('content')
<style> 
        .tab { 
            display: inline-block; 
            margin-left: 100px; 
        } 
    </style>

<div id="main">

<article class="post">
    <header>
		<div class="title">
			<h2>New Cable</h2>
            <h4>{{$product}}: {{$proID}}</h4>
		</div>
    </header>

    <form method="POST" action="store_cable" class="forms-sample">
        @csrf

        <label>Cable Name</label>
        <input type="text" name="cID" placeholder="Cable ID" class="form-control">
        @error('cID')
        <div>{{$message}}</div>
        @enderror
        <br/>
        <label>{{$product}} ID</label>
        <input type="text" name="jID" value="{{$proID}}" class="form-control" readonly>
        @error('jID')
        <div>{{$message}}</div>
        @enderror
        <br/>
        <label style="color:#f01111">Upstream Node</label>
        <input type="text" name="upData" placeholder="Upstream Node" class="form-control">
        @error('upData')
        <div>{{$message}}</div>
        @enderror
        <br/>
        <label style="color:#11f02f">Downstream Node</label>
        <input type="text" name="downData" placeholder="Downstream Node" class="form-control">
        @error('downData')
        <div>{{$message}}</div>
        @enderror
        <br/>
        <label>Digital ID</label>
        <input type="text" name="DigiID" placeholder="Digital ID" class="form-control">
        @error('DigiID')
        <div>{{$message}}</div>
        @enderror
        <br/>
        <label>Cable Type</label>
        <div class="row aln-center">
        <select name="cblType1" class="form-control" style="width:250px">
            <option value="SM Loose-Tube" align="center">SM Loose-Tube</option>
            <option value="MM Loose-Tube" align="center">MM Loose-Tube</option>
            <option value="SM Tight-Buffer" align="center">SM Tight-Buffer</option>
            <option value="MM Tight-Buffer" align="center">MM Tight-Buffer</option>
        </select>
        @error('cblType1')
        <div>{{$message}}</div>
        @enderror
        <p><strong>/</strong><p>
        <select name="cblType2" class="form-control" style="width:250px">
            <option value="G652 D" align="center">G652 D</option>
            <option value="G657 A1" align="center">G657 A1</option>
            <option value="G657 A2" align="center">G657 A2</option>
            <option value="G655" align="center">G655</option>
            <option value="Hybrid" align="center">Hybrid</option>
        </select>
        @error('cblType2')
        <div>{{$message}}</div>
        @enderror
        </div>
        <br/>
        <label>Fibre Size</label>
        <select name="fbType" class="form-control" style="width:250px">
            <option align="center">-- Select Fibre Size --</option>
            <option value="2 Fibre" align="center">2 Fibre</option>
            <option value="4 Fibre" align="center">4 Fibre</option>
            <option value="8 Fibre" align="center">8 Fibre</option>
            <option value="16 Fibre" align="center">16 Fibre</option>
            <option value="24 Fibre" align="center">24 Fibre</option>
            <option value="48 Fibre" align="center">48 Fibre</option>
            <option value="72 Fibre" align="center">72 Fibre</option>
            <option value="96 Fibre" align="center">96 Fibre</option>
            <option value="144 Fibre" align="center">144 Fibre</option>
            <option value="288 Fibre" align="center">288 Fibre</option>
            <option value="Custom Fibre" align="center">Custom Fibre</option>
        </select>
        @error('fbType')
        <div>{{$message}}</div>
        @enderror
        <br/>
        <label>Function</label>
        <select name="funct" id="Closure" class="form-control" style="width:250px">
            <option align="center">-- Select Cable Function --</option>
		    <option value="Backhaul" align="center">Backhaul</option>
            <option value="Feeder" align="center">Feeder</option>
            <option value="Link" align="center">Link</option>
            <option value="Distribution" align="center">Distribution</option>
            <option value="Access" align="center">Access</option>
        </select>
        @error('funct')
        <div>{{$message}}</div>
        @enderror
        <br/>
        <label>Status</label>
         <select name="cblStat" id="fibre" class="form-control" style="width:250px">
                <option value="Available" align="center">Available</option>
		        <option value="Active" align="center" style="color:#42f545">Active</option>
                <option value="Reserved" align="center" style="color:#f5ce42">Reserved</option>
                <option value="Disabled" align="center" style="color:#f54242">Disabled</option>
          </select>
        @error('cblStat')
        <div>{{$message}}</div>
        @enderror
        <br/>
        <button type="store_cable" class="btn btn-success btn-fw">Submit</button>
    </form>            
</article>
</div>
@endsection
