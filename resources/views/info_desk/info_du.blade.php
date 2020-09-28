@extends('layout.mainlayout')
@section('content')

<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>ODF: <a style="color:#3754e6">{{$panel}}</a></h2>
                <h4>Port Type: 48 Fibre</h4>
                <h4>Fibre Status</h4>
		    </div>
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/products/PatchPanel.png')}}"></span>
            </div>
        </header>
        <a href="{{ url()->previous() }}" class="button">Back</a><br/><br/>
    </article>
     <article class="mini-post">
                    <h3 align="center">Terminal 1</h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=1; $i<9; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="fibreport_panel_search/{{$i}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
                   </table>
                </article>
            <article class="mini-post">
                    <h3 align="center">Terminal 2</h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                        @for($i=9; $i<17; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="fibreport_panel_search/{{$i}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
                   </table>
                 </article>
          <article class="mini-post">
                    <h3 align="center">Terminal 3</h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                        @for($i=17; $i<25; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="fibreport_panel_search/{{$i}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
                   </table>
                </article>
           <article class="mini-post">
                    <h3 align="center">Terminal 4</h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                        @for($i=25; $i<33; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="fibreport_panel_search/{{$i}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
                   </table>
                </article>
          <article class="mini-post">
                    <h3 align="center">Terminal 5</h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                        @for($i=33; $i<41; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="fibreport_panel_search/{{$i}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
                   </table>
                  </article>
           <article class="mini-post">
                    <h3 align="center">Terminal 6</h3>
                    <table class="table">
                    <thead>
                       <tr>
                        <th><strong>Fibre</strong></th>
                        <th><strong>Status</strong></th>
                        </tr>
                    </thead>
                    <tbody>

                        @for($i=41; $i<49; $i++)
                        @php
                            $x = 1;
                        @endphp
                        <tr>
                        <td><a href="fibreport_panel_search/{{$i}}">{{$i}}</a></td>
                            @foreach($disp as $r)
                                @if($r->port_id == $i)
                                    @if($r->function == "Active")
                                        <td style="color:#42f545"> Active </td>
                                    @elseif($r->function == "Reserved")
                                    <td  style="color:#f5ce42">Reserved</td>
                                    @elseif($r->function == "Disabled")
                                    <td  style="color:#f54242">Disabled</td>
                                    @endif

                                    @php
                                    $x = 0;
                                    @endphp

                                @endif
                            @endforeach
                            @if($x == 1)
                                <td>Available</td>
                            @endif
                        </tr>
                        @endfor

                    </tbody>
                   </table>
                   </article>
    </div>

@endsection
