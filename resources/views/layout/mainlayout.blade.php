<!DOCTYPE html>
<html lang="en">
   @include('layout.partials.head')

<body>
<div id="wrapper">
@include('layout.partials.nav')
@yield('content')
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
<!-- container-scroller -->

@include('layout.partials.footer-scripts')
 </body>
</html>
