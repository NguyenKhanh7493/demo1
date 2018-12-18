@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Đổi mật khẩu</h4>
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
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        {!! Form::model($user,['method' => 'POST','route'=>['postChange',$user->id],'name'=>'changeID']) !!}

                        {{ method_field('POST') }}
                        @if(Session::has('danger'))
                            <div class="my-alert">
                                <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                            </div>
                        @endif
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mật khẩu hiện tại</label>
                                {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu hiện tại">--}}
                                {!! Form::password('current_password',['class'=>'form-control','id'=>'current_pass','placeholder'=>'Nhập mật khẩu hiện tại']) !!}
                                @if($errors->first('current_password'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('current_password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mật khẩu mới</label>
                                {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu mới">--}}
                                {!! Form::password('password',['class'=>'form-control','id'=>'pass','placeholder'=>'Nhập mật khẩu mới']) !!}
                                @if($errors->first('password'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nhập lại mật khẩu mới</label>
                                {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu mới">--}}
                                {!! Form::password('respassword',['class'=>'form-control','id'=>'respass','placeholder'=>'Nhập lại mật khẩu']) !!}
                                @if($errors->first('respassword'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('respassword') }}</span>
                                @endif
                            </div>
                            {{--<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Đổi mật khẩu</button>--}}
                            {!! Form::button('Đổi mật khẩu',['class'=>'btn btn-success waves-effect waves-light m-r-10','type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@stop