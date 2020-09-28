@extends('layout.mainlayout')
@section('content')
<div id="main">

  @foreach($Data as $row)
    <article class="post">
        <header>
		    <div class="title" align="center">
			    <h2>Quality Assurances: <br/> <a style="color:#3754e6">{{$row->WP_id}}</a></h2>
                <h4>Work Order: {{$row->job_id}}</h4>
		    </div>
        </header>
            @php
                $Comploc = $row->com_pic_loc;
            @endphp

            <table class="table table-bordered">
                <tr>
                    <th width="10%"><strong>Job Name</strong></th>
                    <td><a href="info/{{$row->job_id}}">{{$row->job_id}}</a></td>
                </tr>
                <tr>
                    <th width="10%"><strong>Work Point Name</strong></th>
                    <td href="">{{$row->WP_id}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Work Point Type</strong></th>
                    <td href="">{{$row->WP_type}}</td>
                </tr>
                <tr>
                    <th width="10%"><strong>Completed Job Photo</strong></th>
                    <td><a href="{{route('qa_wp_view', ['loc'=>$Comploc])}}" class="author"><img src="images/QA_WP/{{$row->com_pic_loc}}"></a></td>
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
