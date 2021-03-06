@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">View Invoice</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">View Invoice</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3><b>Chi tiết hóa đơn</b> <span class="pull-right">#{{ $bill_detail[0]->bill_id }}</span></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">THÔNG TIN KHÁCH HÀNG</b></h3>
                                <p style="font-weight: 600;">Họ tên : <span style="font-weight: 300;">{{ $bill_detail[0]->name_invoice }}</span></p>
                                <p style="font-weight: 600;">SĐT : <span style="font-weight: 300;">{{ $bill_detail[0]->phone }}</span></p>
                                <p style="font-weight: 600;">Địa chỉ :
                                    <span style="font-weight: 300;">{{ $bill_detail[0]->address }}</span>
                                </p>
                                <p style="font-weight: 600;">Email : <span style="font-weight: 300;">{{ $bill_detail[0]->email }}</span></p>
                                <p style="font-weight: 600;">Ngày mua : <span style="font-weight: 300;">{{ $bill_detail[0]->created_at }}</span></p>
                                <p style="font-weight: 600;">Yêu cầu khách hàng : <span style="font-weight: 300;">{{ $bill_detail[0]->other }}</span></p>
                            </address>
                            {{--<div class="col-md-4">--}}
                                {{--<form action="">--}}
                                    {{--<div class="form-group">--}}
                                        {{--{!! Form::label('labCate','Tình trạng đơn hàng',['style'=>'color:#1cb735']) !!}--}}
                                        {{--<select class="form-control" data-placeholder="Choose a Category" name="status" tabindex="1">--}}
                                            {{--<option value="1">Chưa xử lý</option>--}}
                                            {{--<option value="2">Đã xử lý</option>--}}
                                            {{--<option value="3">Đã giao hàng</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                    {{--<button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="margin-top: -21px;">Submit</button>--}}
                                {{--</form>--}}
                                {{--<form action="{{ url('admin/bill/email') }}" method="post">--}}
                                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" value="{{ $bill_detail[0]->email }}">--}}
                                        {{--<input type="submit">--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4"></div>--}}
                            {{--<div class="col-md-4"></div>--}}
                        </div>
                        <div  class="pull-right text-right" style="font-size: 18px;color: #2fa906;font-weight: 600;">
                            <address>
                                <h3>Tình trạng đơn hàng</h3>
                                <p class="text-right">
                                    @if($bill_detail[0]->status == 0)
                                        <i class="fa fa-hand-o-right" aria-hidden="true" style="margin-right: 10px;"></i> Đang xử lý
                                    @elseif($bill_detail[0]->status == 1)
                                        <i class="fa fa-hand-o-right" aria-hidden="true" style="margin-right: 10px;"></i> Đã xử lý
                                    @elseif($bill_detail[0]->status == 2)
                                        <i class="fa fa-hand-o-right" aria-hidden="true" style="margin-right: 10px;"></i> Đang vận chuyển
                                    @elseif($bill_detail[0]->status == 3)
                                        <i class="fa fa-hand-o-right" aria-hidden="true" style="margin-right: 10px;"></i> Đã giao hàng
                                    @endif
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">Mã SP</th>
                                    <th>Tên SP</th>
                                    <th class="text-right">Số Lượng</th>
                                    <th class="text-right">Giá</th>
                                    <th class="text-right">Tổng giá</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bill_detail as $item)
                                <tr>
                                    <td class="text-center">{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="text-right">{{ $item->num }} </td>
                                    @if($item->price_new && $item->price_new != 0)
                                        <td class="text-right">{{ number_format($item->price_new) }} <u>đ</u></td>
                                    @else
                                        <td class="text-right">{{ number_format($item->price_old) }} <u>đ</u></td>
                                    @endif

                                    @if($item->price_new && $item->price_new != 0)
                                        <td class="text-right">{{ number_format($item->price_new * $item->num) }} <u>đ</u></td>
                                    @else
                                        <td class="text-right">{{ number_format($item->price_old * $item->num) }} <u>đ</u></td>
                                    @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-right">
                            {{--<p>Sub - Total amount: $13,848</p>--}}
                            {{--<p>vat (10%) : $138 </p>--}}
                            <hr>
                            <h3><b>Tổng đơn hàng :</b> {{ number_format($item->total) }} <u>đ</u></h3>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <p>
                               <a href="{{ url('/admin/bill') }}">
                                   <span class="btn btn-success btn-md" style="text-align: center">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                            Quay lại
                                   </span>
                               </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop