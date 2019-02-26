@extends('layouts.frontend.index')
@section('content')
    @if(!empty($product_images))
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{ route('home') }}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="#" title="Return to Home">Sản phẩm</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="#" title="Return to Home">{{ $product_detail[0]->name }}</a>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">

            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-12" id="center_column">
                <!-- Product -->
                <div id="product">
                    <div class="primary-box row">
                        <div class="pb-left-column col-xs-12 col-sm-5">
                            <!-- product-imge-->
                            <div class="product-image">
                                <div class="product-full">
                                    <img id="product-zoom" src='{{url('/')}}/public/images/product/avatar/{{ $product_images[0]->avatar }}' data-zoom-image="{{url('/')}}/public/images/product/avatar/{{ $product_images[0]->avatar }}"/>
                                </div>
                                <div class="product-img-thumb" id="gallery_01">
                                    <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="21" data-loop="false">
                                        <li>
                                            <a href="#" data-image="{{url('/')}}/public/front-end/assets/data/product-s3-420x512.jpg" data-zoom-image="{{url('/')}}/public/front-end/assets/data/product-s3-850x1036.jpg">
                                                <img id="product-zoom"  src="{{url('/')}}/public/images/product/avatar/{{ $product_images[0]->avatar }}" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-image="{{url('/')}}/public/front-end/assets/data/product-s2-420x512.jpg" data-zoom-image="{{url('/')}}/public/front-end/assets/data/product-s2-850x1036.jpg">
                                                <img id="product-zoom"  src="{{url('/')}}/public/images/product/avatar/{{ $product_images[0]->avatar }}" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-image="{{url('/')}}/public/front-end/assets/data/product-420x512.jpg" data-zoom-image="{{url('/')}}/public/front-end/assets/data/product-850x1036.jpg">
                                                <img id="product-zoom"  src="{{url('/')}}/public/images/product/avatar/{{ $product_images[0]->avatar }}" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-image="{{url('/')}}/public/front-end/assets/data/product-s4-420x512.jpg" data-zoom-image="{{url('/')}}/public/front-end/assets/data/product-s4-850x1036.jpg">
                                                <img id="product-zoom"  src="{{url('/')}}/public/images/product/avatar/{{ $product_images[0]->avatar }}" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-image="{{url('/')}}/public/front-end/assets/data/product-s5-420x512.jpg" data-zoom-image="{{url('/')}}/public/front-end/assets/data/product-s5-850x1036.jpg">
                                                <img id="product-zoom"  src="{{url('/')}}/public/images/product/avatar/{{ $product_images[0]->avatar }}" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-image="{{url('/')}}/public/front-end/assets/data/product-s6-420x512.jpg" data-zoom-image="{{url('/')}}/public/front-end/assets/data/product-s6-850x1036.jpg">
                                                <img id="product-zoom"  src="{{url('/')}}/public/images/product/avatar/{{ $product_images[0]->avatar }}" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- product-imge-->
                        </div>
                        <div class="pb-right-column col-xs-12 col-sm-7">
                            <h1 class="product-name">{{ $product_detail[0]->name }}</h1>
                            <div class="product-comments">
                                <div class="product-star">
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star"></i>--}}
                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                </div>
                                <div class="comments-advices">
                                    {{--<a href="#">Based  on 3 ratings</a>--}}
                                    {{--<a href="#"><i class="fa fa-pencil"></i> write a review</a>--}}
                                </div>
                            </div>
                            <div class="product-price-group">
                                <span class="price">{{ number_format($product_detail[0]->price_old) }} Đ</span>
                                {{--<span class="old-price">{{ $product_detail[0]->price_old }}</span>--}}
                                {{--<span class="discount">-30%</span>--}}
                            </div>
                            <div class="info-orther" style="font-weight: 600;">
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Product ID : {{ $product_detail[0]->id }}</p>
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Đặt hoa online</p>
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Giao hàng miễn phí</p>
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Giao hàng nhận tiền</p>
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Hỗ trợ nhiệt tình</p>
                            </div>
                            <div class="product-desc" style="font-weight: 600;font-size: 18px;color: #2280d2;">
                                <i class="fa fa-truck" aria-hidden="true" style="font-size: 27px;color: #22d248;"></i> Cam kết giao hàng đúng thời gian và đúng mẫu mã quý khách đã mua !
                            </div>
                            <div class="form-option">
                                {{--<p class="form-option-title">Available Options:</p>--}}
                                {{--<div class="attributes">--}}
                                    {{--<div class="attribute-label">Color:</div>--}}
                                    {{--<div class="attribute-list">--}}
                                        {{--<ul class="list-color">--}}
                                            {{--<li style="background:#0c3b90;"><a href="#">red</a></li>--}}
                                            {{--<li style="background:#036c5d;" class="active"><a href="#">red</a></li>--}}
                                            {{--<li style="background:#5f2363;"><a href="#">red</a></li>--}}
                                            {{--<li style="background:#ffc000;"><a href="#">red</a></li>--}}
                                            {{--<li style="background:#36a93c;"><a href="#">red</a></li>--}}
                                            {{--<li style="background:#ff0000;"><a href="#">red</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="attributes">
                                    <div class="attribute-label">SL:</div>
                                    <div class="attribute-list product-qty">
                                        <div class="qty">
                                            <input id="option-product-qty" type="text" value="1">
                                        </div>
                                        <div class="btn-plus">
                                            <a href="#" class="btn-plus-up">
                                                <i class="fa fa-caret-up"></i>
                                            </a>
                                            <a href="#" class="btn-plus-down">
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{--<div class="attributes">--}}
                                    {{--<div class="attribute-label">Size:</div>--}}
                                    {{--<div class="attribute-list">--}}
                                        {{--<select>--}}
                                            {{--<option value="1">X</option>--}}
                                            {{--<option value="2">XL</option>--}}
                                            {{--<option value="3">XXL</option>--}}
                                        {{--</select>--}}
                                        {{--<a id="size_chart" class="fancybox" href="{{url('/')}}/public/front-end/assets/data/size-chart.jpg">Size Chart</a>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            </div>
                            <div class="form-action">
                                <div class="button-group">
                                    <a class="btn-buy" href="#">Mua hàng</a>
                                    <a class="btn-buy" href="#">Thêm vào giỏ</a>
                                </div>
                                {{--<div class="button-group">--}}
                                    {{--<a class="wishlist" href="#"><i class="fa fa-heart-o"></i>--}}
                                        {{--<br>Wishlist</a>--}}
                                    {{--<a class="compare" href="#"><i class="fa fa-signal"></i>--}}
                                        {{--<br>--}}
                                        {{--Compare</a>--}}
                                {{--</div>--}}
                            </div>
                            {{--<div class="form-share">--}}
                                {{--<div class="sendtofriend-print">--}}
                                    {{--<a href="javascript:print();"><i class="fa fa-print"></i> Print</a>--}}
                                    {{--<a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>--}}
                                {{--</div>--}}
                                {{--<div class="network-share">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <!-- tab product -->
                    <div class="product-tab">
                        <ul class="nav-tab">
                            <li class="active">
                                <a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
                            </li>
                        </ul>
                        <div class="tab-container">
                            <div id="product-detail" class="tab-panel active">
                                {{ $product_detail[0]->content }}
                            </div>
                        </div>
                    </div>
                    <div class="page-product-box">
                        <h3 class="heading">Related Products</h3>
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            @if(!empty($product_item) && $product_item[0]->id != $product_detail[0]['id'])
                                @foreach($product_item as $item)
                                    <li>
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="{{url('/')}}/public/images/product/avatar/{{ $item->avatar }}" />
                                                </a>
                                                {{--<div class="quick-view">--}}
                                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                                {{--</div>--}}
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#add">Thêm vào giỏ</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">{{ $item->name }}</a></h5>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
    @else

        <div class="columns-container">
            <div class="container" id="columns">
                <!-- breadcrumb -->
                <div class="breadcrumb clearfix">
                    <a class="home" href="{{ route('home') }}" title="Return to Home">Trang chủ</a>
                    <span class="navigation-pipe">&nbsp;</span>
                    <a href="#" title="Return to Home">Sản phẩm</a>
                    <span class="navigation-pipe">&nbsp;</span>
                    <a href="#" title="Return to Home">{{ $product_detail[0]->name }}</a>
                </div>
                <!-- ./breadcrumb -->
                <!-- row -->
                <div class="row">

                    <!-- Center colunm-->
                    <div class="center_column col-xs-12 col-sm-12" id="center_column">
                        <!-- Product -->
                        <div id="product">
                            <div class="primary-box row">
                                <div class="pb-left-column col-xs-12 col-sm-5">
                                    <!-- product-imge-->
                                    <div class="product-image">
                                        <div class="product-full">
                                            <img id="product-zoom" src='' data-zoom-image=""/> <p style="text-align: center;color: red;font-weight: 600;font-size: 25px;">Không có ảnh</p>
                                        </div>
                                    </div>
                                    <!-- product-imge-->
                                </div>
                                <div class="pb-right-column col-xs-12 col-sm-7">
                                    <h1 class="product-name">{{ $product_detail[0]->name }}</h1>
                                    <div class="product-comments">
                                        <div class="product-star">
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                        </div>
                                        <div class="comments-advices">
                                            {{--<a href="#">Based  on 3 ratings</a>--}}
                                            {{--<a href="#"><i class="fa fa-pencil"></i> write a review</a>--}}
                                        </div>
                                    </div>
                                    <div class="product-price-group">
                                        <span class="price">{{ number_format($product_detail[0]->price_old) }} Đ</span>
                                        {{--<span class="old-price">{{ $product_detail[0]->price_old }}</span>--}}
                                        {{--<span class="discount">-30%</span>--}}
                                    </div>
                                    <div class="info-orther" style="font-weight: 600;">
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Product ID : {{ $product_detail[0]->id }}</p>
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Đặt hoa online</p>
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Giao hàng miễn phí</p>
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Giao hàng nhận tiền</p>
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Hỗ trợ nhiệt tình</p>
                                    </div>
                                    <div class="product-desc" style="font-weight: 600;font-size: 18px;color: #2280d2;">
                                        <i class="fa fa-truck" aria-hidden="true" style="font-size: 27px;color: #22d248;"></i> Cam kết giao hàng đúng thời gian và đúng mẫu mã quý khách đã mua !
                                    </div>
                                    <div class="form-option">
                                        {{--<p class="form-option-title">Available Options:</p>--}}
                                        {{--<div class="attributes">--}}
                                        {{--<div class="attribute-label">Color:</div>--}}
                                        {{--<div class="attribute-list">--}}
                                        {{--<ul class="list-color">--}}
                                        {{--<li style="background:#0c3b90;"><a href="#">red</a></li>--}}
                                        {{--<li style="background:#036c5d;" class="active"><a href="#">red</a></li>--}}
                                        {{--<li style="background:#5f2363;"><a href="#">red</a></li>--}}
                                        {{--<li style="background:#ffc000;"><a href="#">red</a></li>--}}
                                        {{--<li style="background:#36a93c;"><a href="#">red</a></li>--}}
                                        {{--<li style="background:#ff0000;"><a href="#">red</a></li>--}}
                                        {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="attributes">
                                            <div class="attribute-label">SL:</div>
                                            <div class="attribute-list product-qty">
                                                <div class="qty">
                                                    <input id="option-product-qty" type="text" value="1">
                                                </div>
                                                <div class="btn-plus">
                                                    <a href="#" class="btn-plus-up">
                                                        <i class="fa fa-caret-up"></i>
                                                    </a>
                                                    <a href="#" class="btn-plus-down">
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="attributes">--}}
                                        {{--<div class="attribute-label">Size:</div>--}}
                                        {{--<div class="attribute-list">--}}
                                        {{--<select>--}}
                                        {{--<option value="1">X</option>--}}
                                        {{--<option value="2">XL</option>--}}
                                        {{--<option value="3">XXL</option>--}}
                                        {{--</select>--}}
                                        {{--<a id="size_chart" class="fancybox" href="{{url('/')}}/public/front-end/assets/data/size-chart.jpg">Size Chart</a>--}}
                                        {{--</div>--}}

                                        {{--</div>--}}
                                    </div>
                                    <div class="form-action">
                                        <div class="button-group">
                                            <a class="btn-buy" href="#">Mua hàng</a>
                                            <a class="btn-buy" href="#">Thêm vào giỏ</a>
                                        </div>
                                        {{--<div class="button-group">--}}
                                        {{--<a class="wishlist" href="#"><i class="fa fa-heart-o"></i>--}}
                                        {{--<br>Wishlist</a>--}}
                                        {{--<a class="compare" href="#"><i class="fa fa-signal"></i>--}}
                                        {{--<br>--}}
                                        {{--Compare</a>--}}
                                        {{--</div>--}}
                                    </div>
                                    {{--<div class="form-share">--}}
                                    {{--<div class="sendtofriend-print">--}}
                                    {{--<a href="javascript:print();"><i class="fa fa-print"></i> Print</a>--}}
                                    {{--<a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="network-share">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            <!-- tab product -->
                            <div class="product-tab">
                                <ul class="nav-tab">
                                    <li class="active">
                                        <a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
                                    </li>
                                </ul>
                                <div class="tab-container">
                                    <div id="product-detail" class="tab-panel active">
                                        {{ $product_detail[0]->content }}
                                    </div>
                                </div>
                            </div>
                            <!-- ./tab product -->
                            <!-- box product -->
                            <div class="page-product-box">
                                <h3 class="heading">Related Products</h3>
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @if(!empty($product_item) && $product_item['id'] != $product_detail['id'])
                                        @foreach($product_item as $item)
                                    <li>
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="{{url('/')}}/public/images/product/avatar/{{ $item->avatar }}" />
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#add">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <!-- Product -->
                    </div>
                    <!-- ./ Center colunm -->
                </div>
                <!-- ./row-->
            </div>
        </div>
    @endif
@stop