@extends('layouts.frontend.index')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <div class="page-content checkout-page">
                <h3 class="checkout-sep">Thông tin của bạn</h3>
                {!! Form::open(array('url'=>'/chi-tiet-mua-hang','method'=>'POST')) !!}
                <div class="box-border">
                    <ul>
                        <li class="row">
                            <div class="col-sm-6">
                                <div class="form-group gender-pay">
                                    <label for="radio_button_5">{!! Form::radio('gender','1',null,['checked']) !!} Anh</label>
                                    <label for="radio_button_6" style="margin-left: 21px;">{!! Form::radio('gender','2',null) !!} Chị</label>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('labName','Họ và tên (*)') !!}
                                    {{--<input type="text" name="" class="input form-control" id="company_name" placeholder="Nhập họ tên">--}}
                                    {!! Form::text('name',null,['class'=>'input form-control','placeholder'=>'Nhập họ tên']) !!}
                                    @if($errors->first('name'))
                                        <span style="color: red;font-style: italic">(*) {{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{--<label for="company_name">Sđt (*)</label>--}}
                                    {{--<input type="text" name="" class="input form-control" id="company_name" placeholder="Nhập sđt">--}}
                                    {!! Form::label('labPhone','Số điện thoại (*)') !!}
                                    {!! Form::text('phone',null,['class'=>'input form-control','placeholder'=>'Nhập số điện thoại']) !!}
                                    @if($errors->first('phone'))
                                        <span style="color: red;font-style: italic">(*) {{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{--<label for="company_name">Email (*)</label>--}}
                                    {{--<input type="email" name="" class="input form-control" id="company_name" placeholder="Nhập Email">--}}
                                    {!! Form::label('labEmail','Email (*)') !!}
                                    {!! Form::email('email',null,['class'=>'input form-control','placeholder'=>'Nhập email']) !!}
                                    @if($errors->first('email'))
                                        <span style="color: red;font-style: italic">(*) {{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{--<label for="company_name">Email (*)</label>--}}
                                    {{--<input type="email" name="" class="input form-control" id="company_name" placeholder="Nhập Email">--}}
                                    {!! Form::label('labAddress','Địa chỉ (*)') !!}
                                    {!! Form::text('address',null,['class'=>'input form-control','placeholder'=>'Nhập địa chỉ']) !!}
                                    @if($errors->first('address'))
                                        <span style="color: red;font-style: italic">(*) {{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{--<label for="company_name">Yêu cầu khác (Không bắt buộc)</label>--}}
                                    {!! Form::label('labOther','Yêu cầu khác (Không bắt buộc)') !!}
                                    {!! Form::textarea('other',null,['class'=>'form-control','placeholder'=>'Nhập nội dung']) !!}
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
                                                <td>{{ number_format($val->price * $val->qty) }} <u>đ</u></td>
                                            @endif
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td>
                                                <div class="back-buy-cart">
                                                    <a class="prev-btn cart-buy" href="{{ url('/gio-hang') }}"><i class="fa fa-chevron-left" aria-hidden="true"></i> Về giỏ hàng</a>
                                                </div>
                                            </td>
                                            <td style="font-weight: 600;">Tổng giá</td>
                                            <td style="font-size: 19px;color: #e01b1b;font-weight: 600;" id="total_product">{{ number_format($total) }} <u>đ</u></td>
                                        </tr>
                                    </table>
                                    <h4>Hình thức giao hàng !</h4>
                                    {{--<p>Register with us for future convenience:</p>--}}
                                    <p><i class="fa fa-check-circle text-primary"></i> Được giao hàng tại nhà miễn phí.</p>
                                    <p><i class="fa fa-check-circle text-primary"></i> Nhận hàng xong mới thanh toán.</p>
                                    <p><i class="fa fa-check-circle text-primary"></i> Giao hàng trong thời gian 3 ngày.</p>
                                </div>
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="buy-now">
                            <button class="button" style="background: #22d248 !important;">Thanh toán</button>
                        </li>
                    </ul>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop