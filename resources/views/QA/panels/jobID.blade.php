@extends('layout.mainlayout')
@section('content')
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Quality Assurance for ODF: {{$pID}}</h2>
                <h4>Relevant Work Orders</h4>
		    </div>
        </header>
        <table>
            <thead>
                <tr>
                    <th><strong>Job Name</strong><th>
                    <th><strong>Status</strong></th>
                </tr>
            </thead>
            @foreach($WorkOrders as $rows)
            <tr>
                <td><a href="{{route('qa_panel', ['panID'=>$rows->product_id, 'jobID'=>$rows->job_id])}}">{{$rows->job_id}}</a></td>
                @if ($rows->status == "Priority")
                    <td><a style="color: #de4dff"> {{$rows->status}}</a> </td>
                @elseif ($rows->status == "Assigned")
                    <td><a style="color:#37ff00">{{$rows->status}}</a></td>
                @elseif ($rows->status == "In Progress")
                    <td><a style="color:#ffbb00">{{$rows->status}}</a></td>
                @elseif ($rows->status == "Closed")
                    <td><a style="color:#ff0000">{{$rows->status}}</a></td>
                @endif
            </tr>
            @endforeach
        </table>
    </article>
</div>
@endsection
