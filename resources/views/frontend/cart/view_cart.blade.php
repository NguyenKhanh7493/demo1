@extends('layouts.frontend.index')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="#" title="Return to Home">Home</a>
                <span class="navigation-pipe">&nbsp;</span>
                <span class="navigation_page">Giỏ hàng</span>
            </div>
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading no-line">
                <span class="page-heading-title2">Giỏ hàng của bạn</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content page-order">
                {{--<ul class="step">--}}
                    {{--<li class="current-step"><span>01. Giỏ hàng</span></li>--}}
                    {{--<li><span>02. Sign in</span></li>--}}
                    {{--<li><span>03. Address</span></li>--}}
                    {{--<li><span>04. Shipping</span></li>--}}
                    {{--<li><span>05. Payment</span></li>--}}
                {{--</ul>--}}
                @if(count($cart))
                <div class="heading-counter warning">Sản phẩm trong giỏ hàng của bạn:
                    <span style="color: red;">{{ Cart::count() }} Sản phẩm</span>
                </div>
                <div class="order-detail-content">
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                            <tr>
                                <th class="cart_product">Ảnh SP</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                {{--<th>Unit price</th>--}}
                                <th>Giá</th>
                                <th>Tổng giá</th>
                                <th  class="action"><i class="fa fa-trash-o"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @foreach($cart as $item)
                            <tr>
                                <td class="cart_product">
                                    <a href="#"><img src="{{ url('/') }}/public/images/product/avatar/<?php echo $item->options->avatar; ?>" alt="Product"></a>
                                </td>
                                <td class="cart_description">
                                    <p class="product-name"><a href="#">{{ $item->name }} </a></p>
                                    <small class="cart_ref">Product ID : #{{ $item->id }}</small><br>
                                    {{--<small><a href="#">Color : Beige</a></small><br>--}}
                                    {{--<small><a href="#">Size : S</a></small>--}}
                                </td>
                                <td class="qty">
                                    <input class="form-control input-sm qty-cart" type="text" value="{{ $item->qty }}">
                                    <a href="" class="updateCart" id="{{ $item->rowId }}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-minus" aria-hidden="true"></i></a>
                                </td>
                                {{--<td class="cart_avail"><span class="label label-success">In stock</span></td>--}}
                                <td class="price">
                                    @if($item->options->has('price_new') && $item->options->price_new != 0)
                                        <span style="font-size: 15px; "> {{ number_format($item->options->price_new) }} <u>đ</u></span> <br/>
                                        <span style="font-size: 13px; color: #9e9898;"> <strike>{{ number_format($item->price) }} <u>đ</u></strike></span>
                                    @else
                                        <span style="font-size: 15px;"> {{ number_format($item->price) }} <u>đ</u></span> <br/>
                                    @endif
                                </td>
                                @if($item->options->has('price_new') && $item->options->price_new != 0)
                                <td class="price" style="font-size: 15px;"><span>{{ number_format($item->options->price_new * $item->qty) }}</span></td>
                                @else
                                    <td class="price" style="font-size: 15px;"><span>{{ number_format($item->price * $item->qty) }}</span></td>
                                @endif
                                <td class="action">
                                    <a href="{{ url('/xoa-san-pham',$item->rowId) }}" class="delete-cart"><i class="fa fa-times" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </form>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="3"><strong>Tổng tiền</strong></td>
                            <td colspan="2" style="color:#e61212;font-size: 18px;"><strong>{{ number_format($total) }} <u>đ</u></strong></td>
                        </tr>
                        </tfoot>
                    </table>
                    @endif
                    <div class="cart_navigation">
                        <a class="prev-btn" href="{{ url('/') }}">Quay lại trang mua hàng</a>
                        <a class="next-btn" href="#">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop