@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">TRANG QUẢN TRỊ</h4>
        </div>
        {{--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">--}}
            {{--<a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#">Dashboard</a></li>--}}
                {{--<li class="active">CRM Dashboard</li>--}}
            {{--</ol>--}}
        {{--</div>--}}
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="{!! url('public/admin') !!}/plugins/images/large/img1.jpg">
                    <div class="overlay-box">
                        <div class="user-content"> <a href="javascript:void(0)"><img src="{!! url('public/admin') !!}/plugins/images/users/15.jpg" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white">{{ Auth::user()->fullname }}</h4>
                            <h5 class="text-white">{{ Auth::user()->email }}</h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box">
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple"><i class="ti-facebook"></i></p>
                        <h1>258</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-blue"><i class="ti-twitter"></i></p>
                        <h1>125</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger"><i class="ti-dribbble"></i></p>
                        <h1>556</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@stop