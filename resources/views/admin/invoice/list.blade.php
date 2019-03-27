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
                            <th>Mã HD</th>
                            <th>Tên KH</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Ngày mua</th>
                            <th>Tình trạng</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoice_list as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->created_at }}</td>
                            @if($item->status == 0)
                                <td>Chưa xử lý</td>
                            @elseif($item->status == 1)
                                <td>Đã xử lý</td>
                            @else
                                <td>Đã giao hàng</td>
                            @endif
                            <td>
                                <a href="{{ route('billShow',$item->id) }}" id="viewItem" title="Xem đơn hàng"><i class="fa fa-eye" aria-hidden="true"></i></a> |
                                <a href="{{ route('billUpdate',$item->id) }}" id="editItem" title="Sửa đơn hàng"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                                <a href="javascript:void(0)" class="DelPost" data-msg="Bạn muốn xóa?" data-id="" data-token="{{ csrf_token() }}"><i class="ti-trash text-danger"></i></a>
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