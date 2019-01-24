<!DOCTYPE html>
<html>
<head>
    @include('layouts.frontend.head')
</head>
<body class="category-page">
<!-- HEADER -->
@include('layouts.frontend.header-2');
<!-- end header -->
<!-- page wapper-->
@yield('content')
<!-- ./page wapper-->
<!-- Footer -->
@include('layouts.frontend.footer')
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
@include('layouts.frontend.script')
</body>
</html>