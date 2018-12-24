@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            @if(!isset($cate))
            <h4 class="page-title">Thêm mới menu</h4>
            @else
                <h4 class="page-title">Sửa menu</h4>
            @endif
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Ui Elements</a></li>
                <li class="active">Notifications</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
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