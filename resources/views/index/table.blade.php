@extends('layout.mainlayout')
@section('content')

<div id="main">
    <article class="post">
        <header>
        <div class="title">
            <h2>Index</h2>
        </div>
        <div class="meta">
            <span class="image fit"><img src="{{asset('images/keltech_logo.jpg')}}"></span>
        </div>
        </header>
    </article>

    <article class="post">
        <div align="center"><h3>ODF's</h3></div>
        <table class="table">
            @foreach($odf as $row)
            <tr>
                <th width="50%">{{$row->nfc}}</th>
                <td>{{$row->panel_name}}</td>
            </tr>
            @endforeach
        </table>
    </article>
    
    <article class="post">
        <div align="center"><h3>Joint Closures</h3></div>
        <table class="table">
            @foreach($jc as $row)
            <tr>
                <th width="50%">{{$row->nfc}}</th>
                <td>{{$row->closure_id}}</td>
            </tr>
            @endforeach
        </table>
    </article>
    
    <article class="post">
        <div align="center"><h3>Cables</h3></div>
        <table class="table">
            @foreach($cable as $row)
            <tr>
                <th width="50%">{{$row->nfc_id}}</th>
                <td>{{$row->cable_id}}</td>
            </tr>
            @endforeach
        </table>
    </article>
    
    <article class="post">
        <div align="center"><h3>Manholes</h3></div>
        <table class="table">
            @foreach($manhole as $row)
            <tr>
                <th width="50%">{{$row->digi_id}}</th>
                <td>{{$row->manhole_id}}</td>
            </tr>
            @endforeach
        </table>
    </article>
    
    <article class="post">
        <div align="center"><h3>Aerial Networks</h3></div>
        <table class="table">
            @foreach($aerial as $row)
            <tr>
                <th width="50%">{{$row->digi_id}}</th>
                <td>{{$row->aerial_id}}</td>
            </tr>
            @endforeach
        </table>
    </article>
</div>

@endsection
