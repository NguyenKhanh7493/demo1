<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title">SẢN PHẨM MỚI</span>
                </h2>
                <div class="latest-deals-product">
                    {{--<span class="count-down-time2">--}}
                    {{--<span class="icon-clock"></span>--}}
                    {{--<span>end in</span>--}}
                    {{--<span class="countdown-lastest" data-y="2016" data-m="7" data-d="1" data-h="00" data-i="00" data-s="00"></span>--}}
                    {{--</span>--}}
                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        {{--<li>--}}
                        {{--<div class="left-block">--}}
                        {{--<a href="detail2.html"><img class="img-responsive" alt="product" src="{{url('/')}}/public/front-end/assets/data/ld9.jpg" /></a>--}}
                        {{--<div class="quick-view">--}}
                        {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                        {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                        {{--<a title="Quick view" class="search" href="#"></a>--}}
                        {{--</div>--}}
                        {{--<div class="add-to-cart">--}}
                        {{--<a title="Add to Cart" href="#">Add to Cart</a>--}}
                        {{--</div>--}}
                        {{--<div class="price-percent-reduction2">--}}
                        {{---30% OFF--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="right-block">--}}
                        {{--<h5 class="product-name"><a href="detail2.html">Luxury Perfume</a></h5>--}}
                        {{--<div class="content_price">--}}
                        {{--<span class="price product-price">$38,95</span>--}}
                        {{--<span class="price old-price">$52,00</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                        @if(!empty($product_new))
                            @foreach($product_new as $product_news)
                                <li>
                                    <div class="left-block">
                                        <div class="featured-text"><span>New</span></div>
                                        <a href="{{ route('product_detail',$product_news->alias) }}"><img class="img-responsive" alt="product" src="{{url('/')}}/public/images/product/avatar/{{ $product_news->avatar }}" /></a>
                                        <div class="quick-view">
                                            {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                            {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                            {{--<a title="Quick view" class="search" href="#"></a>--}}
                                        </div>
                                        {{--<div class="add-to-cart">--}}
                                            {{--<a title="Thêm vào giỏ" href="#">Thêm vào giỏ</a>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="{{ route('product_detail',$product_news->alias) }}">{{ $product_news->name }}</a></h5>
                                        <div class="content_price">
                                            @if(isset($product_news->price_new))
                                                <span class="price product-price">{{ number_format($product_news->price_new) }} <u>đ</u></span>
                                                <span class="price old-price">{{ number_format($product_news->price_old) }} <u>đ</u></span>
                                            @else
                                                <span class="price product-price">{{ number_format($product_news->price_old) }} <u>đ</u></span>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>