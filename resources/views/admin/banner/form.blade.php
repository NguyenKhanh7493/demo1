@extends('layouts.backend.index')
@section('content')
<div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Quản lý banner</h4>
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
	<div class="col-md-3"></div>
    @if(!isset($banner))
    {!! Form::open(['method'=>'POST','url'=>['/admin/banner/create'],'files'=>'true']) !!}
	    @include('admin.banner.form_banner')
    {!! Form::close() !!}
    @else
        {!! Form::model($banner,['method'=>'PATCH','url'=>['/admin/banner/edit',$banner->id],'files'=>'true']) !!}
        @include('admin.banner.form_banner')
        {!! Form::close() !!}
    @endif
    <div class="col-md-3"></div>
</div>
@stop