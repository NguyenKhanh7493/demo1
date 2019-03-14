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
                <div class="heading-counter warning">Sản phẩm trong giỏ hàng của bạn:
                    <span style="color: red;">1 Sản phẩm</span>
                </div>
                <div class="order-detail-content">
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                        <tr>
                            <th class="cart_product">Ảnh SP</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            {{--<th>Unit price</th>--}}
                            {{--<th>Qty</th>--}}
                            <th>Total</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="{{ url('/') }}/public/front-end/assets/data/product-100x122.jpg" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">Hoa lan kiếm </a></p>
                                <small class="cart_ref">Product ID : #13</small><br>
                                {{--<small><a href="#">Color : Beige</a></small><br>--}}
                                {{--<small><a href="#">Size : S</a></small>--}}
                            </td>
                            <td class="qty">
                                <input class="form-control input-sm" type="number" value="1">
                                <a href="#" style="background: #098e1f;color: #efe8e8;"><i class="fa fa-undo" aria-hidden="true"></i></a>
                                {{--<a href="#"><i class="fa fa-caret-down"></i></a>--}}
                            </td>
                            {{--<td class="cart_avail"><span class="label label-success">In stock</span></td>--}}
                            {{--<td class="price"><span>61,19 €</span></td>--}}
                            <td class="price">
                                <span> 300.000 <u>đ</u></span>
                            </td>
                            <td class="action">
                                <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="3"><strong>Tổng tiền</strong></td>
                            <td colspan="2" style="color:#e61212;font-size: 18px;"><strong>3000.000 <u>đ</u></strong></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="cart_navigation">
                        <a class="prev-btn" href="#">Quay lại trang mua hàng</a>
                        <a class="next-btn" href="#">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop