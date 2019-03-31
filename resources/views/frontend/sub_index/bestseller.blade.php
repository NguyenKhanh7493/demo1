<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title">SẢN PHẨM XEM NHIỀU</span>
                </h2>
                <div class="latest-deals-product">
                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        @if(!empty($bestseller))
                            @foreach($bestseller as $best_sales)
                                <li>
                                    <div class="left-block">
                                        <a href="{{ route('product_detail',$best_sales->alias) }}"><img class="img-responsive" alt="product" src="{{url('/')}}/public/images/product/avatar/{{ $best_sales->avatar }}" /></a>
                                        <div class="quick-view">
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="{{ route('product_detail',$best_sales->alias) }}">{{ $best_sales->name }}</a></h5>
                                        <div class="content_price">
                                            @if(isset($best_sales->price_new))
                                                <span class="price product-price">{{ number_format($best_sales->price_new) }} <u>đ</u></span>
                                                <span class="price old-price">{{ number_format($best_sales->price_old) }} <u>đ</u></span>
                                            @else
                                                <span class="price product-price">{{ number_format($best_sales->price_old) }} <u>đ</u></span>
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