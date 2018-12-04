@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">TRANG QUẢN TRỊ</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li class="active">User</li>
                <li class="active">Create</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('post_create') }}" method="post">
            {{ csrf_field() }}
            <div class="col-sm-7">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Thêm admin quản trị</h3>
                    <p class="text-muted m-b-30 font-13"></p>
                    @if(Session::has('danger'))
                        <div class="my-alert">
                            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Tên</label>
                                    {!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Xin mời nhập tên']) !!}
                                    @if ($errors->first('name'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('name') }}</span>
                                    @endif()
                                </div>
                                <div class="form-group">
                                    <label for="fullname" class="control-label">Tên đầy đủ</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nhập họ tên đầy đủ">
                                    @if ($errors->first('fullname'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('fullname') }}</span>
                                    @endif()
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
                                    @if ($errors->first('email'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('email') }}</span>
                                    @endif()
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">
                                    @if ($errors->first('password'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('password') }}</span>
                                    @endif()
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Nhập mật khẩu">
                                    @if ($errors->first('repassword'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('repassword') }}</span>
                                    @endif()
                                </div>
                                <div class="form-group">
                                    <label for="address" class="control-label">Địa chỉ</label>
                                    <textarea name="address" id="address" class="form-control" placeholder="Nhập địa chỉ"></textarea>
                                    @if ($errors->first('address'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('address') }}</span>
                                    @endif()
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label">Điện thoại</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
                                    @if ($errors->first('phone'))
                                    <span style="color:red; font-style:italic;">(*) {{ $errors->first('phone') }}</span>
                                    @endif()
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="white-box">
                    <h3 class="box-title m-b-0"></h3>
                    <div class="form-group">
                        <label class="control-label">Giới tính</label>
                            <select class="form-control" name="gender">
                                <option value="0">Chọn giới tính</option>
                                <option value="0">Nam</option>
                                <option value="0">Nữ</option>
                                <option value="0">Khác</option>
                            </select>
                            @if ($errors->first('gender'))
                            <span style="color:red; font-style:italic;">(*) {{ $errors->first('gender') }}</span>
                            @endif()
                    </div>
                    <div class="form-group">
                        <label for="status" class="control-label">status</label>
                        <input type="text" class="form-control" id="status" name="status" placeholder="Nhập status">
                        @if ($errors->first('status'))
                        <span style="color:red; font-style:italic;">(*) {{ $errors->first('status') }}</span>
                        @endif()
                    </div>
                    <div class="form-group">
                        <label class="control-label">Level</label>
                            <select class="form-control" name="level_user">
                                <option value="0">Chọn level</option>
                                <option value="0">admin</option>
                                <option value="0">Biên tập viên</option>
                            </select>
                            @if ($errors->first('level_user'))
                            <span style="color:red; font-style:italic;">(*) {{ $errors->first('level_user') }}</span>
                            @endif()
                    </div>
                    <div class="form-group">
                        <label>Quyền hạn của user mới</label>
                        <div class="input-group">
                            <div class="col-sm-12">
                            @foreach($permission as $target)
                            <ul class="icheck-list">
                                <li>
                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                    <label for="minimal-checkbox-1">{{ $target->display_name }}</label>
                                </li>
                            </ul>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="white-box">
                            <h3 class="box-title">Ảnh đại diện </h3>
                            <input type="file" id="input-file-disable-remove" name="avatar" class="dropify" data-show-remove="true" multiple value="" />
                            @if ($errors->first('avatar'))
                            <span style="color:red; font-style:italic;">(*) {{ $errors->first('avatar') }}</span>
                            @endif()
                        </div>
                    </div>
                    {{--@if(isset($detail) && $detail->avatar != '')--}}
                        <div id="showImg">
                            <div class="form-group" id="parentImg">
                                <img src="" alt="" width="150">
                            </div>
                        </div>
                    {{--@endif--}}
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </div>
            </div>
        </form>
    </div>
@stop