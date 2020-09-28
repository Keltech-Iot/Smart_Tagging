
@extends('layout.mainlayout')
@section('content')
<div id="main">

   @foreach($Data as $row)
    <article class="post">
        <header>
		    <div class="title" align="center">
			    <h2>Quality Assurance: <br/><a style="color:#3754e6">{{$row->closure_id}}</a></h2>
                <h4>Work Order: {{$row->job_id}}</h4>
		    </div>
        </header>
            @php
                $Spliceloc = $row->tray_pic_loc;
                $Comploc = $row->com_pic_loc;
            @endphp

            <table class="table table-bordered">
                <tr>
                    <th width="10%"><strong>Job Name</strong></th>
                    <td><a href="info/{{$row->job_id}}">{{$row->job_id}}</a></td>
                </tr>
                <tr>
                    <th width="10%"><strong>Manhole Name</strong></th>
                    <td href="">{{$row->manhole_id}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Joint Closure Name</strong></th>
                    <td href="">{{$row->closure_id}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Tray Number</strong></th>
                    <td href="">{{$row->tray_number}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Splice Tray Photo</strong></th>
                    <td><a href="{{route('viewImg', ['loc'=>$Spliceloc])}}" class="author" align="center"><img src="images/QA_trays/{{$row->tray_pic_loc}}"></a></td>
                </tr>
                <tr>
                    <th width="10%"><strong>Completed Job Photo</strong></th>
                    <td><a href="{{route('viewImg', ['loc'=>$Comploc])}}" class="author"><img src="images/QA_trays/{{$row->com_pic_loc}}"></a></td>
                </tr>
                <tr>
                    <th width="10%"><strong>Additional Info</strong></th>
                    <td href="">{{$row->AdInfo}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Digital Signature</strong></th>
                    <td href="">{{$row->digital_sign}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Updated At</strong></th>
                    <td href="">{{$row->updated_at}}</td>
                </tr>
            </table>
        @endforeach
     </article>
</div>
@endsection
