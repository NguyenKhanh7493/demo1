@extends('layouts.frontend.index')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <div class="page-content checkout-page">
                {{--<h3 class="checkout-sep">1. Checkout Method</h3>--}}
                <div class="box-border">
                    <div class="row">
                        <div class="col-sm-12">
                            {{--<h4>Checkout as a Guest or Register</h4>--}}
                            {{--<p>Register with us for future convenience:</p>--}}
                            {{--<ul>--}}
                                {{--<li><label><input type="radio" name="radio1">Checkout as Guest</label></li>--}}
                                {{--<li><label><input type="radio" name="radio1">Register</label></li>--}}
                            {{--</ul>--}}
                            {{--<br>--}}
                            {{--<h4>Register and save time!</h4>--}}
                            {{--<p>Register with us for future convenience:</p>--}}
                            <p style="text-align: center;font-size: 25px;color: #13065a;"><i class="fa fa-check-circle text-primary" style="color: #22d248;"></i> Đặt hàng thành công</p>
                            <p style="text-align: center">Hệ thống đã gửi email hóa đơn cho quý khách ! Xin cảm ơn.</p>
                            <a href="{{ url('/') }}"><p style="text-align: center;color: #15bbac;"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Về trang chủ</p></a>
                            {{--<button class="button">Continue</button>--}}
                        </div>
                        {{--<div class="col-sm-6">--}}
                            {{--<h4>Login</h4>--}}
                            {{--<p>Already registered? Please log in below:</p>--}}
                            {{--<label>Email address</label>--}}
                            {{--<input type="text" class="form-control input">--}}
                            {{--<label>Password</label>--}}
                            {{--<input type="password" class="form-control input">--}}
                            {{--<p><a href="#">Forgot your password?</a></p>--}}
                            {{--<button class="button">Login</button>--}}
                        {{--</div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop