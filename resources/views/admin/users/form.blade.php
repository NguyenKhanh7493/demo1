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
        <div class="col-sm-7">
            <div class="white-box">
                <h3 class="box-title m-b-0">Sample Basic Forms</h3>
                <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form>
                            <div class="form-group">
                                <label for="name" class="control-label">Tên</label>
                                <input type="text" class="form-control" id="name" placeholder="nhập tên">
                            </div>
                            <div class="form-group">
                                <label for="fullname" class="control-label">Tên đầy đủ</label>
                                <input type="text" class="form-control" id="fullnam" placeholder="Nhập họ tên đầy đủ">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="form-group">
                                <label for="address" class="control-label">Địa chỉ</label>
                                <textarea name="address" id="address" class="form-control" placeholder="Nhập địa chỉ"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1"> Remember me </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="white-box">
                <h3 class="box-title m-b-0">Sample Horizontal form</h3>
                <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Username*</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Website</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Website">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4" class="col-sm-3 control-label">Re Password*</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox33" type="checkbox">
                                <label for="checkbox33">Check me out !</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop