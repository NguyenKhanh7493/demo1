@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Table</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Table</a></li>
                <li class="active">Data Table</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Data Table</h3>
                <p class="text-muted m-b-30">Data table example</p>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Title</th>
                            <th>Hiển thị</th>
                            <th>Thứ tự</th>
                            <th>tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr id="{{ $item->id }}">
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ url('/') }}/public/images/banner/{{ $item->name }}" alt="" style="width: 80px;height: 60px;">
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if($item->banner_center == 1)
                                        {!! "banner_center" !!}
                                    @endif
                                    @if($item->banner_right == 1)
                                        {!! "banner_right" !!}
                                    @endif
                                    @if($item->banner_bottom == 1)
                                        {!! "banner_bottom" !!}
                                    @endif
                                </td>
                                <td>{{ $item->sort }}</td>
                                <td>
                                    <a href="{{ route('bannerEdit',$item->id) }}" id="editItem"><i class="ti-pencil text-success"></i></a> |
                                    <a href="javascript:void(0)" class="DelBanner" data-msg="Bạn muốn xóa?" data-id="{{ $item->id }}" data-token="{{ csrf_token() }}"><i class="ti-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop