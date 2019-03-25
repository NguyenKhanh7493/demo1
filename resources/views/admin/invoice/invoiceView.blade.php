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
                        <div class="pull-center" style="text-align: center;">
                            <address>
                                <h3> &nbsp;<b class="text-danger">THÔNG TIN KHÁCH HÀNG</b></h3>
                                <p style="font-weight: 600;">Họ tên : <span style="font-weight: 300;">Nguyễn Như Khánh</span></p>
                                <p style="font-weight: 600;">SĐT : <span style="font-weight: 300;">0964245027</span></p>
                                <p style="font-weight: 600;">Địa chỉ :
                                    <span style="font-weight: 300;">Vĩnh thủy - Vĩnh Linh - Quảng trị</span>
                                </p>
                                <p style="font-weight: 600;">Email : <span style="font-weight: 300;">nguyenkhanh7493@gmail.com</span></p>
                                <p style="font-weight: 600;">Ngày mua : <span style="font-weight: 300;">17/01/1993</span></p>
                                <p style="font-weight: 600;">Yêu cầu khách hàng : <span style="font-weight: 300;">Giao hàng nhanh nhanh cho tôi 1 xíu nhé..có gì rồi tôi trả thêm tiền cho nghe</span></p>
                            </address>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('labCate','Tình trạng đơn hàng') !!}
                                    <select class="form-control" data-placeholder="Choose a Category" name="cate_id" tabindex="1">
                                        <option value="1">Chưa xử lý</option>
                                        <option value="2">Đã xử lý</option>
                                        <option value="3">Đã giao hàng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('labCate','Gửi mail chi tiết đơn hàng') !!}
                                    <input type="email" value="khanh">
                                </div>
                            </div>
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
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Hoa lan kiếm</td>
                                    <td class="text-right">2 </td>
                                    <td class="text-right">{{ number_format(2000000) }} <u>đ</u></td>
                                    <td class="text-right"> {{ number_format(4000000) }} <u>đ</u></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-right">
                            {{--<p>Sub - Total amount: $13,848</p>--}}
                            {{--<p>vat (10%) : $138 </p>--}}
                            <hr>
                            <h3><b>Tổng đơn hàng :</b> {{ number_format(4000000) }} <u>đ</u></h3>
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