@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Trang sản phẩm</h4>
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
        {!! Form::open(['method'=>'POST','url'=>['/admin/product/create'],'name'=>'namePro','file'=>'true']) !!}
        <div class="col-md-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Thêm mới sản phẩm</h3>
                <p class="text-muted m-b-30 font-13"></p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            {!! Form::label('labName','Tên sản phẩm') !!}
                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nhập tên sản phẩm']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labAlias','alias') !!}
                            {!! Form::text('alias',null,['class'=>'form-control','readonly']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labTitle','Tiêu đề') !!}
                            {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Nhập tiêu đề']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labIntro','Giới thiệu') !!}
                            {!! Form::textarea('introduction',null,['class'=>'form-control','placeholder'=>'Nhập nội dung giới thiệu']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labContent','Nội dung') !!}
                            {!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Nhập nội dung']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labKey','Từ khóa (SEO)') !!}
                            {!! Form::textarea('keywords',null,['class'=>'form-control','placeholder'=>'Nhập nội dung từ khóa']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labDes','Mô tả (SEO)') !!}
                            {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Nhập nội dung mô tả']) !!}
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
                            {!! Form::label('labNum','Số lượng') !!}
                            {!! Form::number('num','0',['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labPrice_old','Giá bán hiện tại') !!}
                            {!! Form::number('price_old','0',['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labPrice_new','Giá bán mới (Nếu có)') !!}
                            {!! Form::number('price_new','0',['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labCate','Chọn cate') !!}
                            <select class="form-control" data-placeholder="Choose a Category" name="cate_id" tabindex="1">
                                <?php cate_parent($parent)?>
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('labUser','Người đăng sản phẩm') !!}
                            {!! Form::select('user_id',$user,null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('labStatus','Hiển thị') !!}
                            <div class="checkbox">
                                {{--<input type="checkbox" id="status" value="1" name="status"  class="js-switch" data-color="#99d683"/> status--}}
                                {!! Form::checkbox('status','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Status
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('labView','Chọn danh mục hiển thị') !!}
                            <div class="checkbox">
                                {{--<input type="checkbox" id="menu_top" value="1" name="menu_top"  class="js-switch" data-color="#99d683"/> Hiển thị menu trang chủ--}}
                                {{--{!! Form::label('labCheckbox','Hiển thị menu trang chủ') !!}--}}
                                {!! Form::checkbox('home','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Hiển thị ở đầu trang
                            </div>
                            <div class="checkbox">
                                {{--<input type="checkbox" id="menu_right" value="1" name="menu_right"  class="js-switch" data-color="#99d683"/> Hiển thị danh mục--}}
                                {!! Form::checkbox('new','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Sản phẩm mới
                            </div>
                            <div class="checkbox">
                                {{--<input type="checkbox" id="footer" value="1" name="footer"  class="js-switch" data-color="#99d683"/> Hiển thị cuối trang--}}
                                {!! Form::checkbox('hot','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Sản phẩm hot
                            </div>
                            <div class="checkbox">
                                {{--<input type="checkbox" id="footer" value="1" name="footer"  class="js-switch" data-color="#99d683"/> Hiển thị cuối trang--}}
                                {!! Form::checkbox('best_sale','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Sản phẩm giảm giá
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="white-box">
                                <h3 class="box-title">Ảnh đại diện </h3>
                                <input type="file" id="input-file-disable-remove" name="avatar" class="dropify" data-show-remove="true" multiple value="" />
                                {{--{!! Form::file('avatar',null,['class'=>'dropify','id'=>'input-file-disable-remove','data-show-remove'=>true,'multiple']) !!}--}}
                                {{--@if ($errors->first('avatar'))--}}
                                    {{--<span style="color:red; font-style:italic;">(*) {{ $errors->first('avatar') }}</span>--}}
                                {{--@endif()--}}
                            </div>
                        </div>
                        <div id="showInput"></div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-success" id="addImg"> <i class="ti-plus"></i> Thêm ảnh</button>
                        </div>
                        {{--@if(isset($detail) && $detail->avatar != '')--}}
                            <div id="showImg" style="text-align: center">
                                <div class="form-group" name="parentImg">
                                    <img src="" alt="" width="150">
                                </div>
                            </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>



@stop