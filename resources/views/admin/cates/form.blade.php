@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Thêm category</h4>
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
        <div class="col-md-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Thêm mới menu</h3>
                <p class="text-muted m-b-30 font-13"></p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                {!! Form::label('labName','Tên menu') !!}
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nhập tên menu']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('labAlias','Alias') !!}
                                {!! Form::text('alias',null,['class'=>'form-control','readonly']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('labParent','Chọn danh mục') !!}
                                {!! Form::text('parent_id',null,['class'=>'form-control','placeholder'=>'Nhập tên menu']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('labIcon','Nhập icon (nếu có)') !!}
                                {!! Form::text('icon',null,['class'=>'form-control','placeholder'=>'Nhập Icon']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('labIcon','Nhập keyword') !!}
                                {!! Form::text('keywords',null,['class'=>'form-control','placeholder'=>'Nhập keyword']) !!}
                            </div>
                        <div class="form-group">
                            {!! Form::label('labIcon','Nhập description') !!}
                            {!! Form::text('description',null,['class'=>'form-control','placeholder'=>'Nhập tiêu đề']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="checkbox">
                                    <input type="checkbox" id="home" value="1" name="home"  class="js-switch" data-color="#99d683"/> status
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Chọn danh mục hiển thị</label>
                                {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">--}}
                                <div class="checkbox">
                                    <input type="checkbox" id="home" value="1" name="home"  class="js-switch" data-color="#99d683"/> Hiển thị menu trang chủ
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="home" value="1" name="home"  class="js-switch" data-color="#99d683"/> Hiển thị danh mục
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="home" value="1" name="home"  class="js-switch" data-color="#99d683"/> Hiển thị cuối trang
                                </div>
                            </div>
                            {{----}}
                            <div class="form-checkbox">
                            <label for="" class="control-label">Loại danh mục</label>
                            <div class="radio">
                                <input type="radio" value="1" name="type"  class="check" data-radio="iradio_flat-green" id="radio-"/> Bài viết
                            </div>
                            <div class="radio">
                                <input type="radio" value="2" name="type"  class="check" data-radio="iradio_flat-green" id="radio"/> Danh mục tin
                            </div>
                            <div class="radio">
                                <input type="radio" value="3" name="type"  class="check" data-radio="iradio_flat-green" id="radio"/> Danh mục sản phẩm
                            </div>
                        </div>
                            {{----}}
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop