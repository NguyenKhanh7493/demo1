@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">CHÀO BẠN</h4>
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
                <div class="user-bg"> <img width="100%" alt="user" src="{!! url('/') !!}/public/images/user/abc.jpg">
                    <div class="overlay-box">
                        <div class="user-content"> <a href="javascript:void(0)"><img src="{!! url('/') !!}/public/images/user/{{ Auth::user()->avatar }}" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white">{{ Auth::user()->fullname }}</h4>
                            <h5 class="text-white">{{ Auth::user()->email }}</h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box">
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple">Sản phẩm</p>
                        <h1>{{ $product }}</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-blue">Bài viết</p>
                        <h1>{{ $post }}</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger">Lượt mua</p>
                        <h1>{{ $invoice }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@stop