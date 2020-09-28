@extends ('layout.mainlayout')
@section('content')
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("WOTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
<div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>Manholes</h2>
		    </div>
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/keltech_logo.jpg')}}"></span>
            </div>
        </header>

            <a href="{{url('manholes/create')}}" class="button"><span>Add</span></a>
            <br/>
            <br/>
            <h3>Search by Manhole ID</h3>
            <form class="search-form d-none d-md-block" action="{{route('search_man_id')}}" method="post">
                <input type="text" class="form-control" name="ID" placeholder="Search Here" title="Search here">
                @csrf
            </form>
            <br/>

            <table class="table table-bordered" id="WOTable">
            <thead>
            <tr>
                <th onclick="sortTable(0)"><strong>No.</strong><th>
                <th<strong>Manhole ID</strong></th>
                <th><strong>Function</strong></th>
                <th><strong>Type</strong></th>
                <th><strong>Location</strong></th>
                <th><strong>Created At</strong></th>
            </tr>
            </thead>
            <tbody>

            @php
                $i=0;
            @endphp

            @foreach($ManholeData as $row)

                @php
                    $i++;
                @endphp

                <tr>
                <td>{{$i}}</td>
                <td><a href="{{route('man_search', ['manID'=>$row->manhole_id])}}"> {{$row->manhole_id}} </a></td>
                <td> {{$row->funct}} </td>
                <td> {{$row->type}} </td>
                <td><a href="map/{{$row->lat}}/{{$row->long}}/{{$row->manhole_id}}"> {{$row->location}}</a> </td>
                <td>{{$row->created_at}}</td>
                <td><a href="edit_man/{{$row->manhole_id}}"><span>Edit</span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </article>
</div>

@endsection
