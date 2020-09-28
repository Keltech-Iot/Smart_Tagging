@extends('layout.mainlayout')
@section('content')

<div id="main">

<article class="post">
    <header>
		<div class="title">
			<h2>New Closure Fibre</h2>
            <h4>Joint Closure: <strong>{{$cloID}}</strong></h4>
            <h4>Fibre No.: <strong>{{$fibre_num}}</strong></h4>
		</div>
    </header>


            <form method="POST" action="store_cloFib" class="forms-sample">
              @csrf

              <label>Closure Name</label>
              <input type="text" name="cloID" placeholder="Closure ID" value="{{$cloID}}" class="form-control" readonly>
              @error('cloID')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <label>Tray Number</label>
              <input type="text" name="tNum" placeholder="Tray Number" class="form-control">
              @error('tNum')
              <div>{{$message}}</div>
              @enderror
              <br/>
              <hr>
              <h2 align="center" style="color:#f54242">Upstream</h2><br/>
              <div class="row gtr-uniform">
                  <div class="col-6 col-12-xsmall">
                      <label>Fibre Number</label>
                      <input type="text" name="FibUp" placeholder="Fibre Upstream" value="{{$fibre_num}}" class="form-control" readonly>
                      @error('FibUp')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <br/>
                  <div class="col-6 col-12-xsmall">
                      <label>Cable Name</label>
                      <input type="text" name="UpCable" placeholder="Upstream Cable" value="{{$cabID}}" class="form-control" readonly>
                      @error('UpCable')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <br/>
                  <div class="col-6 col-12-xsmall">
                      <label>Circuit Information</label>
                      <input type="text" name="UpData" placeholder="Upstream Circuit Info" class="form-control">
                      @error('UpData')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
              </div>
              <hr>
              <br/>
              <div align="center"><h2>---Spliced To---</h2></div>
              <br/>
              <hr>
              <h2 align="center" style="color:#42f545">Downstream</h2>
              <div class="row gtr-uniform">
                 <div class="col-6 col-12-xsmall">
                      <label>Fibre Number</label>
                      <input type="text" name="DownFib" placeholder="Downstream Fibre" class="form-control">
                      @error('DownFib')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <br/>
                  <div class="col-6 col-12-xsmall">
                      <label>Cable Name</label>
                      <select name="DownCable" id="fibre" class="form-control" style="width:250px">
                        @foreach($cables as $c)
                            <option value="{{$c->cable_id}}" align="center">{{$c->cable_id}}</option>
                        @endforeach
                        @foreach($spl as $s)
                            <option value="{{$s->splitter_name}}" align="center">{{$s->splitter_name}}</option>
                        @endforeach
                      </select>
                      @error('DownCable')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
                  <br/>
                  <div class="col-6 col-12-xsmall">
                      <label>Circuit Information</label>
                      <input type="text" name="DownData" placeholder="Downstream Circuit Info" class="form-control">
                      @error('DownData')
                      <div>{{$message}}</div>
                      @enderror
                  </div>
              </div>
              <br/>
              <button type="store_cloFib" class="btn btn-success btn-fw">Submit</button>  
            </form>            
       </article>
</div>
@endsection
