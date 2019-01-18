@extends('layouts.frontend.index')
@section('content')
@include('frontend.sub_index.banner')
@include('frontend.sub_index.best_sale')
<!---->
<div class="content-page">
    <div class="container">
        <!-- featured category fashion -->
        @include('frontend.sub_index.bestseller')
        <!-- end featured category fashion -->
        <!-- featured category sports -->
        @include('frontend.sub_index.hot_product')
        <!-- end featured category sports-->

        <!-- featured category electronic -->
        @include('frontend.sub_index.new_product')
        <!-- end featured category electronic-->
        <!-- featured category Digital -->
        {{--<div class="category-featured">--}}
            {{--<nav class="navbar nav-menu nav-menu-blue show-brand">--}}
                {{--<div class="container">--}}
                    {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
                    {{--<div class="navbar-brand"><a href="#"><img alt="fashion" src="{{url('/')}}/public/front-end/assets/data/digital.png" />Digital</a></div>--}}
                    {{--<span class="toggle-menu"></span>--}}
                    {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
                    {{--<div class="collapse navbar-collapse">--}}
                        {{--<ul class="nav navbar-nav">--}}
                            {{--<li class="active"><a data-toggle="tab" href="#tab-10">Best Seller</a></li>--}}
                            {{--<li><a data-toggle="tab" href="#tab-11">Most Viewed</a></li>--}}
                            {{--<li><a href="#">Mobile</a></li>--}}
                            {{--<li><a href="#">Camera</a></li>--}}
                            {{--<li><a href="#">Laptop</a></li>--}}
                            {{--<li><a href="#">Notebook</a></li>--}}
                        {{--</ul>--}}
                    {{--</div><!-- /.navbar-collapse -->--}}
                {{--</div><!-- /.container-fluid -->--}}
                {{--<div id="elevator-4" class="floor-elevator">--}}
                    {{--<a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>--}}
                    {{--<a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>--}}
                {{--</div>--}}
            {{--</nav>--}}
            {{--<div class="category-banner">--}}
                {{--<div class="col-sm-6 banner">--}}
                    {{--<a href="#"><img alt="ads2" class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/ads10.jpg" /></a>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6 banner">--}}
                    {{--<a href="#"><img alt="ads2" class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/ads11.jpg" /></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="product-featured clearfix">--}}
                {{--<div class="banner-featured">--}}
                    {{--<div class="featured-text"><span>featured</span></div>--}}
                    {{--<div class="banner-img">--}}
                        {{--<a href="#"><img alt="Featurered 1" src="{{url('/')}}/public/front-end/assets/data/f4.jpg" /></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="product-featured-content">--}}
                    {{--<div class="product-featured-list">--}}
                        {{--<div class="tab-container autoheight">--}}
                            {{--<!-- tab product -->--}}
                            {{--<div class="tab-panel active" id="tab-10">--}}
                                {{--<ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p22.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p23.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p24.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p25.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p23.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<!-- tab product -->--}}
                            {{--<div class="tab-panel" id="tab-11">--}}
                                {{--<ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p25.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p24.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p23.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p23.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p22.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p23.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- end featured category Digital-->--}}
        {{--<!-- featured category furniture -->--}}
        {{--<div class="category-featured">--}}
            {{--<nav class="navbar nav-menu nav-menu-blue2 show-brand">--}}
                {{--<div class="container">--}}
                    {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
                    {{--<div class="navbar-brand"><a href="#"><img alt="fashion" src="{{url('/')}}/public/front-end/assets/data/furniture.png" />furniture</a></div>--}}
                    {{--<span class="toggle-menu"></span>--}}
                    {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
                    {{--<div class="collapse navbar-collapse">--}}
                        {{--<ul class="nav navbar-nav">--}}
                            {{--<li class="active"><a data-toggle="tab" href="#tab-12">Best Seller</a></li>--}}
                            {{--<li><a data-toggle="tab" href="#tab-13">Most Viewed</a></li>--}}
                            {{--<li><a href="#">Television</a></li>--}}
                            {{--<li><a href="#">Air Conditional</a></li>--}}
                            {{--<li><a href="#">Theater</a></li>--}}
                            {{--<li><a href="#">Accessories</a></li>--}}
                        {{--</ul>--}}
                    {{--</div><!-- /.navbar-collapse -->--}}
                {{--</div><!-- /.container-fluid -->--}}
                {{--<div id="elevator-5" class="floor-elevator">--}}
                    {{--<a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>--}}
                    {{--<a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>--}}
                {{--</div>--}}
            {{--</nav>--}}
            {{--<div class="category-banner">--}}
                {{--<div class="col-sm-6 banner">--}}
                    {{--<a href="#"><img alt="ads2" class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/ads12.jpg" /></a>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6 banner">--}}
                    {{--<a href="#"><img alt="ads2" class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/ads13.jpg" /></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="product-featured clearfix">--}}
                {{--<div class="banner-featured">--}}
                    {{--<div class="featured-text"><span>featured</span></div>--}}
                    {{--<div class="banner-img">--}}
                        {{--<a href="#"><img alt="Featurered 1" src="{{url('/')}}/public/front-end/assets/data/f5.jpg" /></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="product-featured-content">--}}
                    {{--<div class="product-featured-list">--}}
                        {{--<div class="tab-container autoheight">--}}
                            {{--<!-- tab product -->--}}
                            {{--<div class="tab-panel active" id="tab-12">--}}
                                {{--<ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p26.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p27.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p28.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p29.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p28.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<!-- tab product -->--}}
                            {{--<div class="tab-panel" id="tab-13">--}}
                                {{--<ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p29.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p28.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p28.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p27.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p26.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- end featured category furniture-->--}}
        {{--<!-- featured category jewelry -->--}}
        {{--<div class="category-featured">--}}
            {{--<nav class="navbar nav-menu nav-menu-gray show-brand">--}}
                {{--<div class="container">--}}
                    {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
                    {{--<div class="navbar-brand"><a href="#"><img alt="fashion" src="{{url('/')}}/public/front-end/assets/data/jewelry.png" />jewelry</a></div>--}}
                    {{--<span class="toggle-menu"></span>--}}
                    {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
                    {{--<div class="collapse navbar-collapse">--}}
                        {{--<ul class="nav navbar-nav">--}}
                            {{--<li class="active"><a data-toggle="tab" href="#tab-14">Best Seller</a></li>--}}
                            {{--<li><a data-toggle="tab" href="#tab-15">Most Viewed</a></li>--}}
                            {{--<li><a href="#">Mobile</a></li>--}}
                            {{--<li><a href="#">Camera</a></li>--}}
                            {{--<li><a href="#">Laptop</a></li>--}}
                            {{--<li><a href="#">Notebook</a></li>--}}
                        {{--</ul>--}}
                    {{--</div><!-- /.navbar-collapse -->--}}
                {{--</div><!-- /.container-fluid -->--}}
                {{--<div id="elevator-6" class="floor-elevator">--}}
                    {{--<a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>--}}
                    {{--<a href="#" class="btn-elevator disabled down fa fa-angle-down"></a>--}}
                {{--</div>--}}
            {{--</nav>--}}
            {{--<div class="category-banner">--}}
                {{--<div class="col-sm-6 banner">--}}
                    {{--<a href="#"><img alt="ads2" class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/ads14.jpg" /></a>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6 banner">--}}
                    {{--<a href="#"><img alt="ads2" class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/ads15.jpg" /></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="product-featured clearfix">--}}
                {{--<div class="banner-featured">--}}
                    {{--<div class="featured-text"><span>featured</span></div>--}}
                    {{--<div class="banner-img">--}}
                        {{--<a href="#"><img alt="Featurered 1" src="{{url('/')}}/public/front-end/assets/data/f6.jpg" /></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="product-featured-content">--}}
                    {{--<div class="product-featured-list">--}}
                        {{--<div class="tab-container autoheight">--}}
                            {{--<!-- tab product -->--}}
                            {{--<div class="tab-panel active" id="tab-14">--}}
                                {{--<ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p30.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p31.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p32.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}

                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p33.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p31.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<!-- tab product -->--}}
                            {{--<div class="tab-panel" id="tab-15">--}}
                                {{--<ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p33.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p31.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p31.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p32.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p31.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="detail.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/p30.jpg" /></a>--}}
                                            {{--<div class="quick-view">--}}
                                                {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="detail.html">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- end featured category jewelry-->

        <!-- Baner bottom -->
        <div class="row banner-bottom">
            <div class="col-sm-6">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/ads17.jpg" /></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/ads17.jpg" /></a>
                </div>
            </div>
        </div>
        <!-- end banner bottom -->
    </div>
</div>

{{--<div class="container">--}}
    {{--<div class="brand-showcase">--}}
        {{--<h2 class="brand-showcase-title">--}}
            {{--brand showcase--}}
        {{--</h2>--}}
        {{--<div class="brand-showcase-box">--}}
            {{--<ul class="brand-showcase-logo owl-carousel" data-loop="true" data-nav = "true" data-dots="false" data-margin = "1" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":2},"600":{"items":5},"1000":{"items":8}}'>--}}
                {{--<li data-tab="showcase-1" class="item active"><img src="assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
                {{--<li data-tab="showcase-2" class="item"><img src="{{url('/')}}/public/front-end/assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
                {{--<li data-tab="showcase-3" class="item"><img src="{{url('/')}}/public/front-end/assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
                {{--<li data-tab="showcase-4" class="item"><img src="{{url('/')}}/public/front-end/assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
                {{--<li data-tab="showcase-5" class="item"><img src="{{url('/')}}/public/front-end/assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
                {{--<li data-tab="showcase-6" class="item"><img src="{{url('/')}}/public/front-end/assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
                {{--<li data-tab="showcase-7" class="item"><img src="{{url('/')}}/public/front-end/assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
                {{--<li data-tab="showcase-8" class="item"><img src="{{url('/')}}/public/front-end/assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
                {{--<li data-tab="showcase-9" class="item"><img src="{{url('/')}}/public/front-end/assets/data/gucci.png" alt="logo" class="item-img" /></li>--}}
            {{--</ul>--}}
            {{--<div class="brand-showcase-content">--}}
                {{--<div class="brand-showcase-content-tab active" id="showcase-1">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p24.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p25.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p26.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p27.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="brand-showcase-content-tab" id="showcase-2">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p10.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p11.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p12.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="#">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p13.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="brand-showcase-content-tab" id="showcase-3">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p14.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p15.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p16.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="#"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p17.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="brand-showcase-content-tab" id="showcase-4">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p18.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p19.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p20.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p21.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="brand-showcase-content-tab" id="showcase-5">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p22.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p23.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p24.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p25.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="brand-showcase-content-tab" id="showcase-6">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p26.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p27.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p28.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p29.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="brand-showcase-content-tab" id="showcase-7">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p30.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p31.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p32.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p15.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="brand-showcase-content-tab" id="showcase-8">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="#"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p25.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p21.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="assets/data/p10.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p23.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="brand-showcase-content-tab" id="showcase-9">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12 col-sm-4 trademark-info">--}}
                            {{--<div class="trademark-logo">--}}
                                {{--<a href="detail.html"><img src="{{url('/')}}/public/front-end/assets/data/trademark.jpg" alt="trademark"></a>--}}
                            {{--</div>--}}
                            {{--<div class="trademark-desc">--}}
                                {{--Whatever the occasion, complete your outfit with one of Hermes Fashion’s stylish women’s bags. Discover our spring collection.--}}
                            {{--</div>--}}
                            {{--<a href="#" class="trademark-link">shop this brand</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-12 col-sm-8 trademark-product">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-repon" src="{{url('/')}}/public/front-end/assets/data/p24.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p14.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p30.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 product-item">--}}
                                    {{--<div class="image-product hover-zoom">--}}
                                        {{--<a href="detail.html"><img class="img-responsive" src="{{url('/')}}/public/front-end/assets/data/p29.jpg" alt=""></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="info-product">--}}
                                        {{--<a href="detail.html">--}}
                                            {{--<h5>Maecenas consequat mauris</h5>--}}
                                        {{--</a>--}}
                                        {{--<span class="product-price">$38.87</span>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                        {{--<a class="btn-view-more" title="View More" href="#">View More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}

{{--<div id="content-wrap">--}}
    {{--<div class="container">--}}
        {{--<div id="hot-categories" class="row">--}}
            {{--<div class="col-sm-12 group-title-box">--}}
                {{--<h2 class="group-title ">--}}
                    {{--<span>Hot categories</span>--}}
                {{--</h2>--}}
            {{--</div>--}}

            {{--<div class="col-sm-6  col-lg-3 cate-box">--}}
                {{--<div class="cate-tit" >--}}
                    {{--<div class="div-1" style="width: 46%;">--}}
                        {{--<div class="cate-name-wrap">--}}
                            {{--<p class="cate-name">Electronics</p>--}}
                        {{--</div>--}}
                        {{--<a href="" class="cate-link link-active" data-ac="flipInX" ><span>shop now</span></a>--}}
                    {{--</div>--}}
                    {{--<div class="div-2" >--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('/')}}/public/front-end/assets/data/cate-product1.png" alt="Electronics" class="hot-cate-img" />--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="cate-content">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Batteries & Chargers</a></li>--}}
                        {{--<li><a href="#">Headphone, Headset</a></li>--}}
                        {{--<li><a href="#">Home Audio</a></li>--}}
                        {{--<li><a href="#">Mp3 Player Accessories</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div> <!-- /.cate-box -->--}}

            {{--<div class="col-sm-6  col-lg-3 cate-box">--}}
                {{--<div class="cate-tit" >--}}
                    {{--<div class="div-1" style="width: 46%;">--}}
                        {{--<div class="cate-name-wrap">--}}
                            {{--<p class="cate-name">Sport & Outdoors</p>--}}
                        {{--</div>--}}
                        {{--<a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>--}}
                    {{--</div>--}}
                    {{--<div class="div-2" >--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('/')}}/public/front-end/assets/data/cate-product2.png" alt="Electronics" class="hot-cate-img" />--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="cate-content">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Golf Supplies</a></li>--}}
                        {{--<li><a href="#">Outdoor & Traveling Supplies</a></li>--}}
                        {{--<li><a href="#">Camping & Hiking</a></li>--}}
                        {{--<li><a href="#">Fishing</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div> <!-- /.cate-box -->--}}
            {{--<div class="col-sm-6  col-lg-3 cate-box">--}}
                {{--<div class="cate-tit" >--}}
                    {{--<div class="div-1" style="width: 46%;">--}}
                        {{--<div class="cate-name-wrap">--}}
                            {{--<p class="cate-name">Fashion</p>--}}
                        {{--</div>--}}
                        {{--<a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>--}}
                    {{--</div>--}}
                    {{--<div class="div-2" >--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('/')}}/public/front-end/assets/data/cate-product3.png" alt="Electronics" class="hot-cate-img"/>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="cate-content">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Batteries & Chargers</a></li>--}}
                        {{--<li><a href="#">Headphone, Headset</a></li>--}}
                        {{--<li><a href="#">Home Audio</a></li>--}}
                        {{--<li><a href="#">Mp3 Player Accessories</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div> <!-- /.cate-box -->--}}
            {{--<div class="col-sm-6  col-lg-3 cate-box">--}}
                {{--<div class="cate-tit" >--}}
                    {{--<div class="div-1" style="width: 46%;">--}}
                        {{--<div class="cate-name-wrap">--}}
                            {{--<p class="cate-name">Health & Beauty</p>--}}
                        {{--</div>--}}
                        {{--<a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>--}}
                    {{--</div>--}}
                    {{--<div class="div-2" >--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('/')}}/public/front-end/assets/data/cate-product4.png" alt="Electronics" class="hot-cate-img" />--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="cate-content">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Bath & Body</a></li>--}}
                        {{--<li><a href="#">Shaving & Hair Removal</a></li>--}}
                        {{--<li><a href="#">Fragrances</a></li>--}}
                        {{--<li><a href="#">Salon & Spa Equipment</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div> <!-- /.cate-box -->--}}
            {{--<div class="col-sm-6  col-lg-3 cate-box">--}}
                {{--<div class="cate-tit" >--}}
                    {{--<div class="div-1" style="width: 46%;">--}}
                        {{--<div class="cate-name-wrap">--}}
                            {{--<p class="cate-name">Jewelry & Watches</p>--}}
                        {{--</div>--}}
                        {{--<a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>--}}
                    {{--</div>--}}
                    {{--<div class="div-2" >--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('/')}}/public/front-end/assets/data/cate-product5.png" alt="Electronics" class="hot-cate-img" />--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="cate-content">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Men Watches</a></li>--}}
                        {{--<li><a href="#">Wedding Rings</a></li>--}}
                        {{--<li><a href="#">Earring</a></li>--}}
                        {{--<li><a href="#">Necklaces</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div> <!-- /.cate-box -->--}}

            {{--<div class="col-sm-6  col-lg-3 cate-box">--}}
                {{--<div class="cate-tit" >--}}
                    {{--<div class="div-1" style="width: 46%;">--}}
                        {{--<div class="cate-name-wrap">--}}
                            {{--<p class="cate-name">Digital</p>--}}
                        {{--</div>--}}
                        {{--<a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>--}}
                    {{--</div>--}}
                    {{--<div class="div-2" >--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('/')}}/public/front-end/assets/data/cate-product6.png" alt="Electronics" class="hot-cate-img" />--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="cate-content">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Accessories for iPhone</a></li>--}}
                        {{--<li><a href="#">Accessories for iPad</a></li>--}}
                        {{--<li><a href="#">Accessories for Tablet PC</a></li>--}}
                        {{--<li><a href="#">Tablet PC</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div><!-- /.cate-box -->--}}
            {{--<div class="col-sm-6  col-lg-3 cate-box">--}}
                {{--<div class="cate-tit" >--}}
                    {{--<div class="div-1" style="width: 46%;">--}}
                        {{--<div class="cate-name-wrap">--}}
                            {{--<p class="cate-name">Furniture</p>--}}
                        {{--</div>--}}
                        {{--<a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>--}}
                    {{--</div>--}}
                    {{--<div class="div-2" >--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('/')}}/public/front-end/assets/data/cate-product7.png" alt="Electronics" class="hot-cate-img" />--}}
                        {{--</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="cate-content">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Batteries & Chargers</a></li>--}}
                        {{--<li><a href="#">Headphone, Headset</a></li>--}}
                        {{--<li><a href="#">Home Audio</a></li>--}}
                        {{--<li><a href="#">Mp3 Player Accessories</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div> <!-- /.cate-box -->--}}
            {{--<div class="col-sm-6  col-lg-3 cate-box">--}}
                {{--<div class="cate-tit" >--}}
                    {{--<div class="div-1" style="width: 46%;">--}}
                        {{--<div class="cate-name-wrap">--}}
                            {{--<p class="cate-name">Toys & Hobbies</p>--}}
                        {{--</div>--}}
                        {{--<a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>--}}
                    {{--</div>--}}
                    {{--<div class="div-2" >--}}
                        {{--<a href="#">--}}
                            {{--<img src="{{url('/')}}/public/front-end/assets/data/cate-product8.png" alt="Electronics" class="hot-cate-img" />--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="cate-content">--}}
                    {{--<ul>--}}
                        {{--<li><a href="#">Walkera</a></li>--}}
                        {{--<li><a href="#">Fpv System & Parts</a></li>--}}
                        {{--<li><a href="#">RC Cars & Parts</a></li>--}}
                        {{--<li><a href="#">Helicopters & Part</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div><!-- /.cate-box -->--}}
        {{--</div> <!-- /#hot-categories -->--}}

    {{--</div> <!-- /.container -->--}}
{{--</div>--}}
@stop