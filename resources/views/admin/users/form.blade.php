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
        <form action="" method="post">
            <div class="col-sm-7">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Sample Basic Forms</h3>
                    <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="name" class="control-label">Tên</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="nhập tên">
                                </div>
                                <div class="form-group">
                                    <label for="fullname" class="control-label">Tên đầy đủ</label>
                                    <input type="text" class="form-control" name="fullname" id="fullnam" placeholder="Nhập họ tên đầy đủ">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="control-label">Địa chỉ</label>
                                    <textarea name="address" id="address" class="form-control" placeholder="Nhập địa chỉ"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label">Điện thoại</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
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
                    </div>
                    <div class="form-group">
                        <label for="status" class="control-label">status</label>
                        <input type="text" class="form-control" id="status" name="status" placeholder="Nhập status">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Level</label>
                            <select class="form-control" name="level_user">
                                <option value="0">Chọn level</option>
                                <option value="0">admin</option>
                                <option value="0">Biên tập viên</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Quyền hạn của user mới</label>
                        <div class="input-group">
                            <div class="col-sm-12">
                            <ul class="icheck-list">
                                <li>
                                    <input type="checkbox" class="check" id="minimal-checkbox-1">
                                    <label for="minimal-checkbox-1">Thêm</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="check" id="minimal-checkbox-2">
                                    <label for="minimal-checkbox-1">Sửa</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="check" id="minimal-checkbox-3">
                                    <label for="minimal-checkbox-1">Xóa</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="check" id="minimal-checkbox-4">
                                    <label for="minimal-checkbox-1">Xem</label>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="white-box">
                            <h3 class="box-title">Ảnh đại diện </h3>
                            <input type="file" id="input-file-disable-remove" name="avatar" class="dropify" data-show-remove="true" multiple value="" />
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