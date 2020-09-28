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
				<h2>Work Orders</h2>
			</div>
            <div class="meta">
                <span class="image fit"><img src="{{asset('images/keltech_logo.jpg')}}"></span>
            </div>
        </header>

            <a href="{{route('work_order_create')}}" class="button"><span>Add</span></a>
            <br/>
            <br/>
            <h3>Search by Job ID</h3>
            <form class="search-form d-none d-md-block" action="{{route('search_job_id')}}" method="post">
                <input type="text" class="form-control" name="ID" placeholder="Search Here" title="Search here">
                @csrf
            </form>
            <br/>

            <table class="table table-bordered" id="WOTable">
            <thead>
            <tr>
                <th>No. </th>
                <th onclick="sortTable(1)"><strong>Job ID<i class="icon-arrow-down mr-2"></i> </strong></th>
                <th onclick="sortTable(2)"><strong>Age <i class="icon-arrow-down mr-2"></i></strong></th>
                <th><strong>Product</strong></th>
                <th onclick="sortTable(4)"><strong>Status <i class="icon-arrow-down mr-2"></i></strong></th>
            </tr>
            </thead>
            <tbody>

            @php
                $i = 0;
            @endphp

            @foreach($WorkOrderData as $row)
            @php
                $i++;
            @endphp
                <tr>
                <td>{{$i}}</td>
                <td><a href="info/{{$row->job_id}}"> {{$row->job_id}} </a></td>
              @if($row->status == "Closed")
                <td>Closed At: {{$row->updated_at}}</td>
              @else
                <td> {{$Age[$i]}} days</td>
              @endif
                <td>{{$row->product_id}}</td>
                @if ($row->status == "Priority")
                    <td><a style="color: #de4dff"> {{$row->status}}</a> </td>
                @elseif ($row->status == "Assigned")
                    <td><a style="color:#37ff00">{{$row->status}}</a></td>
                @elseif ($row->status == "In Progress")
                    <td><a style="color:#ffbb00">{{$row->status}}</a></td>
                @elseif ($row->status == "Closed")
                    <td><a style="color:#ff0000">{{$row->status}}</a></td>
                @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </article>
</div>

@endsection
