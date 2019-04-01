<div class="category-featured">
    <nav class="navbar nav-menu nav-menu-red show-brand">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{ url('/') }}/public/front-end/assets/data/fashion.png" />Hạt giống - Cây giống</a></div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a style="color: #1c99c7;font-weight: 600;font-size: 15px;">Chúng tôi chuyên cung cấp những hạt giống và cây giống chất lượng cao !</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->

    </nav>
    <div class="category-banner">
        <div class="col-sm-6 banner">
            <a href="#"><img alt="ads2" class="img-responsive" src="{{ url('/') }}/public/front-end/assets/data/ads2.jpg" /></a>
        </div>
        <div class="col-sm-6 banner">
            <a href="#"><img alt="ads2" class="img-responsive" src="{{ url('/') }}/public/front-end/assets/data/ads3.jpg" /></a>
        </div>
    </div>
    <div class="product-featured clearfix">
        <div class="banner-featured">
            <div class="banner-img">
                <a href="#"><img alt="Featurered 1" src="{{ url('/') }}/public/images/favicon/choinon4.jpg" /></a>
            </div>
        </div>
        <div class="product-featured-content">
            <div class="product-featured-list">
                <div class="tab-container">
                    <!-- tab product -->
                    <div class="tab-panel active" id="tab-4">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            @foreach($product_seeds as $item)
                            <li style="border: 1px solid #eaeaea;">
                                <div class="left-block">
                                    <a href="{{ route('product_detail',$item->alias) }}">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/images/product/avatar/{{ $item->avatar }}" /></a>
                                    {{--<div class="add-to-cart">--}}
                                        {{--<a title="Add to Cart" href="#">Thêm vào giỏ</a>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="{{ route('product_detail',$item->alias) }}">{{ $item->name }}</a></h5>
                                    <div class="content_price">
                                        @if(isset($item->price_new))
                                            <span class="price product-price">{{ number_format($item->price_new) }} <u>đ</u></span>
                                            <span class="price old-price">{{ number_format($item->price_old) }} <u>đ</u></span>
                                        @endif
                                        <span class="price product-price">{{ number_format($item->price_old) }} <u>đ</u></span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- tab product -->
                    <div class="tab-panel" id="tab-5">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            <li>
                                <div class="left-block">
                                    <a href="detail.html">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/04_nice-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Nice Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="detail.html">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/05_flowers-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Flowers Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="detail.html">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/06_red-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Red Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/01_blue-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="detail.html">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Blue Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="detail.html">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/02_yellow-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Yellow Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="detail.html">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/03_cyan-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Cyan Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="detail.html">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/04_nice-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Nice Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="detail.html">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/05_flowers-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Flowers Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="detail.html">
                                        <img class="img-responsive" alt="product" src="{{ url('/') }}/public/front-end/assets/data/06_red-dress.jpg" /></a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="detail.html">Red Dress</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>