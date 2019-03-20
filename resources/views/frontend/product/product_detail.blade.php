@extends('layouts.frontend.index')
@section('content')
    @if(!empty($product_images))
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="{{ URL::previous() }}" title="Quay lại trang sản phẩm">Sản phẩm</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="{{ url('/chi-tiet',$product_detail['alias']) }}" title="Chi tiết sản phẩm">{{ $product_detail['name'] }}</a>
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
                                        @foreach($product_images as $image)
                                        <li>
                                            <a href="#" data-image="{{url('/')}}/public/images/product/image_product/{{ $image->image_name }}" data-zoom-image="{{url('/')}}/public/images/product/image_product/{{ $image->image_name }}">
                                                <img id="product-zoom"  src="{{url('/')}}/public/images/product/image_product/{{ $image->image_name }}" />
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- product-imge-->
                        </div>
                        <div class="pb-right-column col-xs-12 col-sm-7">
                            <h1 class="product-name">{{ $product_detail['name'] }}</h1>
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
                                @if(!empty($product_detail['price_new']))
                                    <span class="price">{{ number_format($product_detail['price_new']) }} <u style="font-size: 16px;">đ</u></span>
                                @else
                                    <span class="price">{{ number_format($product_detail['price_old']) }} <u style="font-size: 16px;">đ</u></span>
                                @endif
                                {{--<span class="old-price">{{ $product_detail[0]->price_old }}</span>--}}
                                {{--<span class="discount">-30%</span>--}}
                            </div>
                            <div class="info-orther" style="font-weight: 600;">
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Product ID : {{ $product_detail['id'] }}</p>
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Đặt hoa online</p>
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Giao hàng miễn phí</p>
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Giao hàng nhận tiền</p>
                                <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Hỗ trợ nhiệt tình</p>
                            </div>
                            <div class="product-desc" style="font-weight: 600;font-size: 18px;color: #2280d2;">
                                <i class="fa fa-truck" aria-hidden="true" style="font-size: 27px;color: #22d248;"></i> Cam kết giao hàng đúng thời gian và đúng mẫu mã quý khách đã mua !
                            </div>
                                <div class="form-action">
                                    <div class="button-group">
                                        {{--<button type="submit" class="btn-buy btn-lg"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mua hàng</button>--}}
                                        <a class="btn-buy" href="{{ url('/mua-san-pham',[$product_detail['id'],$product_detail['alias']]) }}">Mua hàng</a>
                                        {{--<a class="btn-buy" href="#">Thêm vào giỏ</a>--}}
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- tab product -->
                    <div class="product-tab">
                        <ul class="nav-tab">
                            <li class="active">
                                <a aria-expanded="false" data-toggle="tab" href="#product-detail">Thông tin sản phẩm</a>
                            </li>
                        </ul>
                        <div class="tab-container">
                            <div id="product-detail" class="tab-panel active">
                                {!! $product_detail['content'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="page-product-box">
                        <h3 class="heading">Sản phẩm liên quan</h3>
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            @if(!empty($product_item))
                                @foreach($product_item as $item)
                                    <li>
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="{{ route('product_detail',$item->alias) }}">
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
                                                <h5 class="product-name"><a href="{{ route('product_detail',$item->alias) }}">{{ $item->name }}</a></h5>
                                                {{--<div class="product-star">--}}
                                                    {{--<i class="fa fa-star"></i>--}}
                                                    {{--<i class="fa fa-star"></i>--}}
                                                    {{--<i class="fa fa-star"></i>--}}
                                                    {{--<i class="fa fa-star"></i>--}}
                                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                                {{--</div>--}}
                                                <div class="content_price">
                                                    @if(!isset($item->price_new))
                                                        <span class="price product-price">{{ number_format($item->price_old) }} <u>đ</u></span>
                                                    @else
                                                        <span class="price product-price">{{ number_format($item->price_new) }} <u>đ</u></span>
                                                        <span class="price old-price">{{ number_format($item->price_old) }} <u>đ</u></span>
                                                    @endif
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
                    <a href="#" title="Return to Home">{{ $product_detail['name'] }}</a>
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
                                    <h1 class="product-name">{{ $product_detail['name'] }}</h1>
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
                                        @if(!empty($product_detail['price_new']))
                                            <span class="price">{{ number_format($product_detail['price_new']) }} <u style="font-size: 16px;">đ</u></span>
                                        @else
                                            <span class="price">{{ number_format($product_detail['price_old']) }} <u style="font-size: 16px;">đ</u></span>
                                        @endif
                                        {{--<span class="old-price">{{ $product_detail[0]->price_old }}</span>--}}
                                        {{--<span class="discount">-30%</span>--}}
                                    </div>
                                    <div class="info-orther" style="font-weight: 600;">
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Product ID : {{ $product_detail['id'] }}</p>
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Đặt hoa online</p>
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Giao hàng miễn phí</p>
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Giao hàng nhận tiền</p>
                                        <p><i class="fa fa-hand-o-right" aria-hidden="true" style="color: #22d248;"></i> Hỗ trợ nhiệt tình</p>
                                    </div>
                                    <div class="product-desc" style="font-weight: 600;font-size: 18px;color: #2280d2;">
                                        <i class="fa fa-truck" aria-hidden="true" style="font-size: 27px;color: #22d248;"></i> Cam kết giao hàng đúng thời gian và đúng mẫu mã quý khách đã mua !
                                    </div>
                                    {{--<div class="form-option">--}}
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
                                        {{--<div class="attributes">--}}
                                            {{--<div class="attribute-label">SL:</div>--}}
                                            {{--<div class="attribute-list product-qty">--}}
                                                {{--<div class="qty">--}}
                                                    {{--<input id="option-product-qty" type="text" value="1">--}}
                                                {{--</div>--}}
                                                {{--<div class="btn-plus">--}}
                                                    {{--<a href="#" class="btn-plus-up">--}}
                                                        {{--<i class="fa fa-caret-up"></i>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="btn-plus-down">--}}
                                                        {{--<i class="fa fa-caret-down"></i>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
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
                                    {{--</div>--}}
                                        <div class="form-action">
                                            <div class="button-group">
                                                <a class="btn-buy" href="{{ url('/mua-san-pham',[$product_detail['id'],$product_detail['alias']]) }}">Mua hàng</a>
                                                {{--<a class="btn-buy" href="#">Thêm vào giỏ</a>--}}
                                            </div>
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
                                        <a aria-expanded="false" data-toggle="tab" href="#product-detail">Thông tin sản phẩm</a>
                                    </li>
                                </ul>
                                <div class="tab-container">
                                    <div id="product-detail" class="tab-panel active">
                                        {!! $product_detail['content'] !!}
                                    </div>
                                </div>
                            </div>
                            <!-- ./tab product -->
                            <!-- box product -->
                            <div class="page-product-box">
                                <h3 class="heading">Sản phẩm liên quan</h3>
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    @if(!empty($product_item))
                                        @foreach($product_item as $item)
                                    <li>
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="{{ route('product_detail',$item->alias) }}">
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
                                                <h5 class="product-name"><a href="{{ route('product_detail',$item->alias) }}">{{ $item->name }}</a></h5>
                                                {{--<div class="product-star">--}}
                                                    {{--<i class="fa fa-star"></i>--}}
                                                    {{--<i class="fa fa-star"></i>--}}
                                                    {{--<i class="fa fa-star"></i>--}}
                                                    {{--<i class="fa fa-star"></i>--}}
                                                    {{--<i class="fa fa-star-half-o"></i>--}}
                                                {{--</div>--}}
                                                <div class="content_price">
                                                    @if(!isset($item->price_new))
                                                        <span class="price product-price">{{ number_format($item->price_old) }} <u>đ</u></span>
                                                        @else
                                                        <span class="price product-price">{{ number_format($item->price_new) }} <u>đ</u></span>
                                                        <span class="price old-price">{{ number_format($item->price_old) }} <u>đ</u></span>
                                                    @endif
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