{{--<div id="home-slider">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-3 slider-left"></div>--}}
            {{--<div class="col-sm-9 header-top-right">--}}
                {{--<div class="homeslider">--}}
                    {{--<div class="content-slide">--}}
                        {{--<ul id="contenhomeslider">--}}
                            {{--@foreach()--}}
                            {{--<li><img src="{{url('/')}}/public/images/banner/{{ $banners->name }}" title="{{ $banners->title }}" /></li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="header-banner banner-opacity">--}}
                    {{--@foreach($banner_right as $banner_rights)--}}
                    {{--<a href="#"><img alt="Funky roots" src="{{url('/')}}/public/images/banner/{{ $banner_rights->name }}" /></a>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="container">--}}
    {{--<div class="service ">--}}
        {{--<div class="col-xs-6 col-sm-3 service-item">--}}
            {{--<div class="icon">--}}
                {{--<img alt="services" src="{{url('/')}}/public/front-end/assets/data/s1.png" />--}}
            {{--</div>--}}
            {{--<div class="info">--}}
                {{--<a href="#"><h3>Free Shipping</h3></a>--}}
                {{--<span>On order over $200</span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-sm-3 service-item">--}}
            {{--<div class="icon">--}}
                {{--<img alt="services" src="{{url('/')}}/public/front-end/assets/data/s2.png" />--}}
            {{--</div>--}}
            {{--<div class="info">--}}
                {{--<a href="#"><h3>30-day return</h3></a>--}}
                {{--<span>Moneyback guarantee</span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-sm-3 service-item">--}}
            {{--<div class="icon">--}}
                {{--<img alt="services" src="{{url('/')}}/public/front-end/assets/data/s3.png" />--}}
            {{--</div>--}}

            {{--<div class="info" >--}}
                {{--<a href="#"><h3>24/7 support</h3></a>--}}
                {{--<span>Online consultations</span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-xs-6 col-sm-3 service-item">--}}
            {{--<div class="icon">--}}
                {{--<img alt="services" src="{{url('/')}}/public/front-end/assets/data/s4.png" />--}}
            {{--</div>--}}
            {{--<div class="info">--}}
                {{--<a href="#"><h3>SAFE SHOPPING</h3></a>--}}
                {{--<span>Safe Shopping Guarantee</span>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 acs">
                <div class="homeslider">
                    <ul id="contenhomeslider">
                        @foreach($banner as $banners)
                            <li><img alt="Funky roots" src="{{url('/')}}/public/images/banner/{{ $banners->name }}" title="{{ $banners->title }}" /></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div id="home-slider">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-3 slider-left"></div>--}}
            {{--<div class="col-sm-12 header-top-right">--}}
                {{--<div class="homeslider">--}}
                    {{--<ul id="contenhomeslider">--}}
                        {{--@foreach($banner as $banners)--}}
                        {{--<li><img alt="Funky roots" src="{{url('/')}}/public/images/banner/{{ $banners->name }}" title="{{ $banners->title }}" /></li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<style type="text/css">
    .homeslider>.bx-wrapper>.bx-viewport{
        border-top: none !important;
    }
</style>