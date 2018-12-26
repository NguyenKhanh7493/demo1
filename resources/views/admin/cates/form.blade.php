@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Trang category</h4>
        </div>
        {{--<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">--}}
            {{--<a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#">Dashboard</a></li>--}}
                {{--<li><a href="#">Ui Elements</a></li>--}}
                {{--<li class="active">Notifications</li>--}}
            {{--</ol>--}}
        {{--</div>--}}
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <p class="text-right">
                @if(isset($cate))
                    <a href="{{ route('createCate') }}">
                        <span class="btn btn-success btn-md" style="text-align: center">
                            <i  class="fa fa-plus-circle text-white" aria-hidden="true"></i>
                            Thêm mới</span>
                    </a>
                @endif
                <a href="{{ route('listCate') }}">
                        <span class="btn btn-success" style="text-align: center">
                            <i class="fa fa-list-ul text-white" aria-hidden="true"></i>
                            Danh sách</span>
                </a>
            </p>
        </div>
    </div>
    <div class="row">
        @if(!isset($cate))
        {!! Form::open(array('url'=>'/admin/cates/create','method'=>'POST','name'=>'cateId')) !!}
            @include('admin.cates.form_cates')
        {!! Form::close() !!}
        @else
            {!! Form::model($cate,['method'=>'PATCH','url'=>['/admin/cates/edit',$cate->id],'name'=>'cateEdit']) !!}
            @include('admin.cates.form_cates')
            {!! Form::close() !!}
        @endif
    </div>
@stop