@extends('layouts.frontend.index')
@section('content')
    @if(!empty($product))
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
                                <span class="page-heading-title">Tìm kiếm : {{ $key }} có {{ count($product) }} kết quả</span>
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
                                @foreach($product as $item)
                                    <li class="col-sx-12 col-sm-4">
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="{{ url('/chi-tiet',$item->alias) }}">
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
                                                <h5 class="product-name"><a href="{{ url('/chi-tiet',$item->alias) }}">{{ $item->name }}</a></h5>
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
    @elseif(!empty($post))
        <div class="columns-container">
            <div class="container" id="columns">
                <!-- breadcrumb -->
                <div class="breadcrumb clearfix">
                    <a class="home" href="{{ url('/') }}" title="Return to Home">Trang chủ</a>
                    <span class="navigation-pipe">&nbsp;</span>
                    <span class="navigation_page">Tin tức</span>
                </div>
                <!-- ./breadcrumb -->
                <!-- row -->
                <div class="row">
                    <!-- Left colunm -->
                @include('frontend.post.post_slidebar_left')
                <!-- ./left colunm -->
                    <!-- Center colunm-->
                    <div class="center_column col-xs-12 col-sm-9" id="center_column">
                        <h2 class="page-heading">
                            <span class="page-heading-title2" style="color: #333333;">Tìm kiếm {{ $key }} có {{ count($post) }} bài viết</span>
                        </h2>
                        <div class="sortPagiBar clearfix">

                        </div>
                        <ul class="blog-posts">
                            @foreach($post as $val)
                                <li class="post-item">
                                    <article class="entry">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="entry-thumb">
                                                    <a href="{{ route('post_detail',$val->alias) }}">
                                                        <img src="{{ url('/') }}/public/images/post/avatar/{{ $val->avatar }}" alt="Blog">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="entry-ci">
                                                    <h3 class="entry-title"><a href="{{ route('post_detail',$val->alias) }}" style="color: #ff0909;font-size: 21px;">{{ $val->name }}</a></h3>
                                                    <div class="entry-meta-data">
                                                        {{--<span class="author">--}}
                                                        {{--<i class="fa fa-user"></i>--}}
                                                        {{--by: <a href="#">Admin</a></span>--}}
                                                        {{--<span class="cat">--}}
                                                        {{--<i class="fa fa-folder-o"></i>--}}
                                                        {{--<a href="#">News, </a>--}}
                                                        {{--<a href="#">Promotions</a>--}}
                                                        {{--</span>--}}
                                                        {{--<span class="comment-count">--}}
                                                        {{--<i class="fa fa-comment-o"></i> 3--}}
                                                        {{--</span>--}}
                                                        {{--<span class="date"><i class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>--}}
                                                    </div>
                                                    <div class="post-star">
                                                        {{--<i class="fa fa-star"></i>--}}
                                                        {{--<i class="fa fa-star"></i>--}}
                                                        {{--<i class="fa fa-star"></i>--}}
                                                        {{--<i class="fa fa-star"></i>--}}
                                                        {{--<i class="fa fa-star-half-o"></i>--}}
                                                        {{--<span>(7 votes)</span>--}}
                                                    </div>
                                                    <div class="entry-excerpt">
                                                        {{ $val->introduction }}
                                                    </div>
                                                    <div class="entry-more">
                                                        <a href="{{ route('post_detail',$val->alias) }}">Xem thêm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                        <div class="sortPagiBar clearfix">
                            <div class="bottom-pagination">
                                <nav>
                                    <ul class="pagination">
                                        {{--<li>--}}
                                        {{--<a href="#" aria-label="Next">--}}
                                        {{--<span aria-hidden="true">pre &raquo;</span>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="active"><a href="#">1</a></li>--}}
                                        {{--<li><a href="#">2</a></li>--}}
                                        {{--<li><a href="#">3</a></li>--}}
                                        {{--<li><a href="#">4</a></li>--}}
                                        {{--<li><a href="#">5</a></li>--}}
                                        {{--<li>--}}
                                        {{--<a href="#" aria-label="Next">--}}
                                        {{--<span aria-hidden="true">Next &raquo;</span>--}}
                                        {{--</a>--}}
                                        {{--</li>--}}


                                        @if($post_arr_list->currentPage() != 1)
                                            <li><a href="{!! $post_arr_list->url($post_arr_list->currentPage()-1) !!}" aria-label="left"><span aria-hidden="true"><<</span></a></li>
                                            @for($i=$post_arr_list->currentPage();$i <= $post_arr_list->lastPage();$i=$i+1)
                                                <li class="{!! $post_arr_list->currentPage() == $i?'active':'' !!}"><a href="{!! $post_arr_list->url($i) !!}" >{!! $i !!}</a></li>
                                                @if($i == $post_arr_list->currentPage()+5)
                                                    <li><a href="#">...</a></li>
                                                    <li><a href="{!! $post_arr_list->url($i) !!}">{!! $post_arr_list->lastPage() !!}</a></li>
                                                    @break($i == $post_arr_list->currentPage()+5);
                                                @endif
                                            @endfor
                                        @endif
                                        @if($post_arr_list->currentPage() == 1)
                                            @for($i = 1;$i <= $post_arr_list->lastPage();$i = $i +1)
                                                <li class="{!! $post_arr_list->currentPage() == $i?'active':'' !!}"><a href="{!! $post_arr_list->url($i) !!}" >{!! $i !!}</a></li>
                                                @if($i==5)
                                                    <li><a href="#">...</a></li>
                                                    <li><a href="{!! $post_arr_list->url($i) !!}">{!! $post_arr_list->lastPage() !!}</a></li>
                                                    @break($i==5);
                                                @endif
                                            @endfor
                                        @endif
                                        @if($post_arr_list->currentPage() != $post_arr_list->lastPage())
                                            <li><a href="{!! $post_arr_list->url($post_arr_list->currentPage()+1) !!}" aria-label="Next"><span aria-hidden="true">>></span></a></li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- ./ Center colunm -->
                </div>
                <!-- ./row-->
            </div>
        </div>
    @endif()
@stop