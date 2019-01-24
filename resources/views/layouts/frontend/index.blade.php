<!DOCTYPE html>
<html>
<head>
    @include('layouts.frontend.head')
</head>
<body class="home option2">
<!-- HEADER -->
@include('layouts.frontend.header')
<!-- end header -->
<!-- Home slideder-->
    @yield('content')

@include('layouts.frontend.footer')
<!-- Footer -->
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
@include('layouts.frontend.script')

</body>
</html>