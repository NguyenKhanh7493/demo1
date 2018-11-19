<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/backend/head')
</head>
<body>
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
@include('layouts/backend/sidebar')
    <div id="page-wrapper">
        <div class="container-fluid">
        @yield('content')
        </div>
        <footer class="footer text-center"> 2018 &copy; NGUYỄN NHƯ KHÁNH </footer>
    </div>
</div>
@include('layouts/backend/script')
</body>
</html>
