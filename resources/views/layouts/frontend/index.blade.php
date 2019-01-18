<!DOCTYPE html>
<html>
<head>
    @include('layouts.frontend.head')
</head>
<body class="home">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<!-- HEADER -->
@include('layouts.frontend.header')
<!-- end header -->
<!-- Home slideder-->
@yield('content')

<!-- Footer -->
@include('layouts.frontend.footer')

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
@include('layouts.frontend.script')

</body>
</html>