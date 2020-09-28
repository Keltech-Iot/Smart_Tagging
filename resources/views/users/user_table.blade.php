@extends('layout.mainlayout')
@section('content')
<div id="main">

	<article class="post">
        <header>
			<div class="title">
				<h2>Users</h2>
			</div>
            <div class="meta">
                <span class="image fit"><img src="images/keltech_logo.jpg"></span>
            </div>
        </header>

            <table class="table table-bordered">
            <thead>
            <tr>
                <th><strong>User Id</strong></th>
                <th><strong>Name</strong></th>
                <th><strong>Email</strong></th>
            </tr>
            </thead>
            <tbody>
            @foreach($UserData as $row)
                <tr>
                <td>{{$row->id}}</td>
                <td> {{$row->name}}</td>
                <td> {{$row->email}} </td>
                </tr>
            @endforeach
                                
            </tbody>
        </table>
    </article>
</div>
@endsection
