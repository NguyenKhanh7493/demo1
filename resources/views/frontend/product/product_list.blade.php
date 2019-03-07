@extends('layouts.frontend.index')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Fashion</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                @include('frontend.product.product_slidebar_left')
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <div id="view-product-list" class="view-product-list">
                        <h2 class="page-heading">
                            <span class="page-heading-title">DANH SÁCH SẢN PHẨM</span>
                        </h2>
                        <ul class="display-product-option">
                            <li class="view-as-grid selected">
                                <span>grid</span>
                            </li>
                            <li class="view-as-list">
                                <span>list</span>
                            </li>
                        </ul>
                        <!-- PRODUCT LIST -->
                        <ul class="row product-list grid">
                            @foreach($product_list as $item)
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="detail.html">
                                            <img class="img-responsive" alt="product" src="{{ url('/') }}/public/images/product/avatar/{{ $item->avatar }}" />
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
                                        <h5 class="product-name"><a href="detail.html">{{ $item->name }}</a></h5>
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                        {{--</div>--}}
                                        <div class="content_price">
                                            @if(!empty($item->price_new))
                                                <span class="price product-price">{{ number_format($item->price_new) }} <u>đ</u></span>
                                                <span class="price old-price">{{ number_format($item->price_old) }} <u>đ</u></span>
                                            @else
                                                <span class="price product-price">{{ number_format($item->price_old) }} <u>đ</u></span>
                                            @endif
                                        </div>
                                        <div class="info-orther">
                                            <p>Mã-sp: #{{ $item->id }}</p>
                                            <p class="availability">Tình trạng: <span>Còn hàng</span></p>
                                            <div class="product-desc">
                                                {{ $item->introduction }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <!-- ./PRODUCT LIST -->
                    </div>
                    <!-- ./view-product-list-->
                    <div class="sortPagiBar">
                        <div class="bottom-pagination">
                            <nav>
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">Next &raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="show-product-item">
                            <select name="">
                                <option value="">Show 18</option>
                                <option value="">Show 20</option>
                                <option value="">Show 50</option>
                                <option value="">Show 100</option>
                            </select>
                        </div>
                        <div class="sort-product">
                            <select>
                                <option value="">Product Name</option>
                                <option value="">Price</option>
                            </select>
                            <div class="sort-product-icon">
                                <i class="fa fa-sort-alpha-asc"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@stop