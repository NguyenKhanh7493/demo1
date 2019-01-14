@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Trang sản phẩm</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <p class="text-right">
                @if(isset($product))
                    <a href="{{ route('proCreate') }}">
                        <span class="btn btn-success btn-md" style="text-align: center">
                            <i  class="fa fa-plus-circle text-white" aria-hidden="true"></i>
                            Thêm mới</span>
                    </a>
                @endif
                <a href="{{ route('listPro') }}">
                        <span class="btn btn-success" style="text-align: center">
                            <i class="fa fa-list-ul text-white" aria-hidden="true"></i>
                            Danh sách</span>
                </a>
            </p>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        @if(!isset($product))
        {!! Form::open(['method'=>'POST','url'=>['/admin/product/create'],'name'=>'namePro','files'=>'true']) !!}
            @include('admin.product.form_product')
        {!! Form::close() !!}
        @else
        {!! Form::model($product,[
        'method' => 'PATCH',
        'url'=>['/admin/product/edit',$product->id],
        'files'=> true,
        'name'=>'editName'
        ])!!}
            @include('admin.product.form_product')
        {!! Form::close() !!}
        @endif
    </div>



@stop