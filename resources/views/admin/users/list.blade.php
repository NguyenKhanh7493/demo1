@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">TRANG QUẢN TRỊ</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            {{--<a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#">Admin</a></li>--}}
                {{--<li class="active">User</li>--}}
                {{--<li class="active">List</li>--}}
            {{--</ol>--}}
            <p class="text-right">
                <a href="{{ route('create_user') }}">
                   <span class="btn btn-success" style="text-align: center">
                        <i  class="fa fa-plus-circle text-white" aria-hidden="true"></i>
                           Thêm mới</span>
                </a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">-- Danh sách quản trị viên --</h3>
                <p class="text-muted m-b-30"></p>
                <div class="table-responsive">
                    <form action="" method="post" name="frmList">
                    <table id="myTable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Ảnh</th>
                            <th>SĐT</th>
                            <th>Chức vụ</th>
                            <th>active</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                        <tr id="{{ $item->id_user }}">
                            <td>{{ $item->id_user }}</td>
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->email }}</td>
                            <td><img src="{{ url('/') }}/public/images/user/{{ $item->avatar }}" alt="" style="width: 80px;height: 60px;"></td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->role_name }}</td>
                            <td>
                                <a href="{{ route('editGet',$item->id_user) }}" id="editItem"><i class="ti-pencil text-success"></i></a> |
                                <a href="javascript:void(0)" class="delItem" data-msg="Bạn muốn xóa?" data-id="{{ $item->id_user }}" data-token="{{ csrf_token() }}"><i class="ti-trash text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--<script type="text/javascript">--}}
{{--//         $(document).ready(function () {--}}
{{--//            $("a#delItem").on('click',function () {--}}
{{--//                alert(1111);--}}
{{--//            })--}}
{{--//         });--}}
{{--//$(document).on('click','#delItem',function (e) {--}}
{{--//    alert(111);--}}
{{--//});--}}
{{--//function deleteAjax(id) {--}}
{{--//    if (confirm('bạn có muốn xóa không '+id+'?')){}}--}}
    {{--</script>--}}
@stop