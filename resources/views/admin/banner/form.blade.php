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
	<div class="col-md-6">
          <div class="white-box">
            <h3 class="box-title m-b-0">Thêm banner</h3>
            <p class="text-muted m-b-30 font-13"></p>
            <div class="row">
              <div class="col-sm-12 col-xs-12">
                {!! Form::open(['method'=>'POST','url'=>['/admin/banner/create'],'files'=>'true']) !!}
                  <div class="form-group">
                    {!! Form::label('title','Tiêu đề banner')!!}
                    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Nhập tiêu đề ảnh']) !!}
                    @if($errors->first('title'))
                        <span style="color: red;font-style: italic">(*) {{ $errors->first('title') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    {!! Form::label('sort','Thứ tự hiện thị banner')!!}
                    {!! Form::text('sort',null,['class'=>'form-control','placeholder'=>'Nhập thứ tự ảnh']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('labStatus','Hiển thị') !!}
                    <div class="checkbox">
                        {!! Form::checkbox('status','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Status
                    </div>
                  </div>
                  <div class="form-group">
                    {!! Form::label('labView','Chọn khu vực hiển thị') !!}
                    <div class="checkbox">
                        {!! Form::checkbox('banner_center','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Ở giữa
                    </div>
                    <div class="checkbox">
                        {!! Form::checkbox('banner_right','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Ở giữa bên phải
                    </div>
                    <div class="checkbox">
                        {!! Form::checkbox('banner_bottom','1',null,['class'=>'js-switch','data-color'=>'#99d683']) !!} Ở cuối trang
                    </div>
                	</div>
                	<div class="form-group">
                    <div class="white-box">
                        <h3 class="box-title">Ảnh đại diện </h3>
                        <p>(banner ở giữa = 666x450) (banner phải = 234x450) (banner cuối = 570x120)</p>
                        <input type="file" id="input-file-disable-remove" name="avatar" class="dropify" data-show-remove="true" multiple value="" />
                        @if($errors->first('name'))
                            <span style="color: red;font-style: italic">(*) {{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
</div>
@stop