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
                <h3><b>Chi tiết hóa đơn</b> <span class="pull-right">#5669626</span></h3>
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
                            <div class="col-md-4">
                                <form action="">
                                    <div class="form-group">
                                        {!! Form::label('labCate','Tình trạng đơn hàng',['style'=>'color:#1cb735']) !!}
                                        <select class="form-control" data-placeholder="Choose a Category" name="status" tabindex="1">
                                            <option value="1">Chưa xử lý</option>
                                            <option value="2">Đã xử lý</option>
                                            <option value="3">Đã giao hàng</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="margin-top: -21px;">Submit</button>
                                </form>
                                <div class="form-group">
                                    <div class="input-group m-t-10">
                                        <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" value="{{ $bill_detail[0]->email }}" placeholder="Email">
                                        <span class="input-group-btn">
                                      <button type="button" class="btn waves-effect waves-light btn-info">Gửi</button>
                                      </span> </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                        {{--<div  class="pull-right text-right">--}}
                            {{--<address>--}}
                                {{--<h3>To,</h3>--}}
                                {{--<h4 class="font-bold">Gaala & Sons,</h4>--}}
                                {{--<p class="text-muted m-l-30">E 104, Dharti-2, <br/>--}}
                                    {{--Nr' Viswakarma Temple, <br/>--}}
                                    {{--Talaja Road, <br/>--}}
                                    {{--Bhavnagar - 364002</p>--}}
                                {{--<p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> 23rd Jan 2017</p>--}}
                                {{--<p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p>--}}
                            {{--</address>--}}
                        {{--</div>--}}
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
                            <button class="btn btn-danger" type="submit"> Xử lý đơn hàng </button>
                            <button onClick="javascript:window.print();" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Quay lại</span> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop