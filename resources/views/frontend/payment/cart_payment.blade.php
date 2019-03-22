@extends('layouts.frontend.index')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <div class="page-content checkout-page">
                <h3 class="checkout-sep">Thông tin của bạn</h3>
                <div class="box-border">
                    <ul>
                        <li class="row">
                            <div class="col-sm-6">
                                <div class="form-group gender-pay">
                                    <label for="radio_button_5"><input type="radio" checked name="radio_4" id="radio_button_5">Anh</label>
                                    <label for="radio_button_6" style="margin-left: 21px;"><input type="radio" name="radio_4" id="radio_button_6">Chị</label>
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Họ tên bạn</label>
                                    <input type="text" name="" class="input form-control" id="company_name" placeholder="Nhập họ tên">
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Sđt</label>
                                    <input type="text" name="" class="input form-control" id="company_name" placeholder="Nhập sđt">
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Email</label>
                                    <input type="text" name="" class="input form-control" id="company_name" placeholder="Nhập Email">
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Yêu cầu khác (Không bắt buộc)</label>
                                    {!! Form::textarea('keywords',null,['class'=>'form-control','placeholder'=>'Nhập nội dung']) !!}
                                </div>
                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <h3 class="checkout-sep">Sản phẩm bạn đã mua</h3>
                                <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="200">Tên SP</th>
                                            <th>SL & giá</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                        @foreach(Cart::content() as $val)
                                        <tr>
                                            <td style="color: #0097ff;">{{ $val->name }}</td>
                                            @if($val->options->has('price_new') && $val->options->price_new != 0)
                                            <td>{{ $val->qty }} x {{ number_format($val->options->price_new) }} <u>đ</u></td>
                                            @else
                                                <td>{{ $val->qty }} x {{ number_format($val->price) }} <u>đ</u></td>
                                            @endif
                                            {{--thành tiền--}}
                                            @if($val->options->has('price_new') && $val->options->price_new != 0)
                                                <td >{{ number_format($val->options->price_new * $val->qty) }} <u>đ</u></td>
                                            @else
                                                <td>{{ number_format($item->price * $item->qty) }} <u>đ</u></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="back-buy-cart">
                                                    <a class="prev-btn cart-buy" href="{{ url('/gio-hang') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Về giỏ hàng</a>
                                                </div>
                                            </td>
                                            <td style="font-weight: 600;">Tổng giá</td>
                                            <td style="font-size: 19px;color: #e01b1b;font-weight: 600;">{{ number_format($total) }} <u>đ</u></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="buy-now">
                            <button class="button" style="background: #22d248 !important;">Thanh toán</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop