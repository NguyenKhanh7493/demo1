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
        {!! Form::open(array('url'=>'/admin/cates/create','method'=>'POST','name'=>'cateId')) !!}
        <div class="col-md-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Thêm mới menu</h3>
                <p class="text-muted m-b-30 font-13"></p>
                @if(Session::has('danger'))
                    <div class="my-alert">
                        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                {!! Form::label('labName','Tên menu') !!}
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nhập tên menu']) !!}
                                @if($errors->first('name'))
                                    <span style="color: red;font-style: italic">(*) {{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('labAlias','Alias') !!}
                                {!! Form::text('alias',null,['class'=>'form-control','readonly']) !!}
                            </div>
                            {{--<div class="form-group">--}}
                                {{--{!! Form::label('labParent','Chọn danh mục') !!}--}}
                                {{--{!! Form::select('parent_id',['1'=>'thư mục cha'],null,['class'=>'form-control']) !!}--}}
                            {{--</div>--}}
                            <div class="form-group">
                                {!! Form::label('labParent','Chọn danh mục') !!}
                                <select class="form-control" data-placeholder="Choose a Category" name="parent_id" tabindex="1">
                                    <option value="0">Thư mục cha</option>
                                    <?php cate_parent($parent)?>
                                </select>
                            </div>
                            <div class="form-group">
                                {!! Form::label('labIcon','Nhập icon (nếu có)') !!}
                                {!! Form::text('icon',null,['class'=>'form-control','placeholder'=>'Nhập Icon']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('labIcon','Nhập keyword') !!}
                                {!! Form::text('keywords',null,['class'=>'form-control','placeholder'=>'Nhập keyword']) !!}
                                @if($errors->first('keywords'))
                                    <span style="color: red;font-style: italic">(*) {{ $errors->first('keywords') }}</span>
                                @endif
                            </div>
                        <div class="form-group">
                            {!! Form::label('labIcon','Nhập description') !!}
                            {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Nhập tiêu đề']) !!}
                            @if($errors->first('description'))
                                <span style="color: red;font-style: italic">(*) {{ $errors->first('description') }}</span>
                            @endif
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
                                    <input type="checkbox" id="status" value="1" name="status"  class="js-switch" data-color="#99d683"/> status
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Chọn danh mục hiển thị</label>
                                {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">--}}
                                <div class="checkbox">
                                    <input type="checkbox" id="menu_top" value="1" name="menu_top"  class="js-switch" data-color="#99d683"/> Hiển thị menu trang chủ
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="menu_right" value="1" name="menu_right"  class="js-switch" data-color="#99d683"/> Hiển thị danh mục
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="footer" value="1" name="footer"  class="js-switch" data-color="#99d683"/> Hiển thị cuối trang
                                </div>
                            </div>
                            {{----}}
                            <div class="form-checkbox">
                            <label for="" class="control-label">Loại danh mục</label>
                            <div class="radio">
                                <input type="radio" value="1" name="type"  class="check" data-radio="iradio_flat-green" id="type"/> Bài viết
                            </div>
                            <div class="radio">
                                <input type="radio" value="2" name="type"  class="check" data-radio="iradio_flat-green" id="type"/> Danh mục tin
                            </div>
                            <div class="radio">
                                <input type="radio" value="3" name="type"  class="check" data-radio="iradio_flat-green" id="type"/> Danh mục sản phẩm
                            </div>
                        </div>
                            {{----}}
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop