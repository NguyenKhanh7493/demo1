@extends('layouts.backend.index')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Table</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <p class="text-right">
                <a href="{{ route('billList') }}">
                        <span class="btn btn-success" style="text-align: center">
                            <i class="fa fa-list-ul text-white" aria-hidden="true"></i>
                            Danh sách</span>
                </a>
            </p>
        </div>
    </div>
    <div class="row">
        <form action="{{ url('/admin/bill/update',$status_bill['id']) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-6">
            <div class="white-box">
                <h3 class="box-title m-b-0">Thông tin khách hàng</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ tên khách hàng</label>
                                <input type="text" class="form-control" value="{{ $bill_update[0]->name_invoice }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" value="{{ $bill_update[0]->email }}" name="email_bill" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text" class="form-control" value="{{ $bill_update[0]->phone }}" readonly>
                            </div>
                            <div class="form-group" style="margin-bottom: 35px;">
                                <label for="exampleInputEmail1">Tình trạng đơn hàng</label>
                                <select name="status">
                                    <option value="0" <?php if (isset($status_bill) && $status_bill['status'] == 0) echo 'selected' ?>>Chưa xử lý</option>
                                    <option value="1" <?php if (isset($status_bill) && $status_bill['status'] == 1) echo 'selected'?>>Đã xử lý</option>
                                    <option value="2" <?php if (isset($status_bill) && $status_bill['status'] == 2) echo 'selected'?>>Đã giao hàng</option>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="white-box">
                <p class="text-muted m-b-30 font-13"> </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ</label><br/>
                                <textarea name="address" id="" cols="50" rows="5" readonly>{{ $bill_update[0]->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Yêu cầu khách hàng</label><br/>
                                <textarea name="address" id="" cols="50" rows="5" readonly>{{ $bill_update[0]->other }}</textarea>
                            </div>
                            {{--<div class="form-group">--}}
                            {{--<label for="exampleInputPassword1">Password</label>--}}
                            {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="exampleInputPassword1">Password</label>--}}
                            {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<div class="checkbox checkbox-success">--}}
                            {{--<input id="checkbox1" type="checkbox">--}}
                            {{--<label for="checkbox1"> Remember me </label>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="white-box">
                <div class="table-responsive m-t-40">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">id</th>
                            <th>Tên sản phẩm</th>
                            <th class="text-right">Số lượng</th>
                            <th class="text-right">Thành tiền</th>
                            <th class="text-right">Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bill_update as $item)
                        <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td class="text-right">
                                <input type="number" style="width: 60px;" value="{{ $item->num }}" name="num">
                                <a href="" style="margin-left: 5px;" title="cập nhật"><i class="fa fa-undo" aria-hidden="true"></i></a>
                            </td>
                            @if ($item->price_new && $item->price_new != 0)
                            <td class="text-right"> {{ number_format($item->price_new) }} <u>đ</u></td>
                            @else
                                <td class="text-right"> {{ number_format($item->price_old) }} <u>đ</u></td>
                            @endif

                            @if ($item->price_new && $item->price_new != 0)
                                <td class="text-right"> {{ number_format($item->price_new * $item->num) }} <u>đ</u></td>
                            @else
                                <td class="text-right"> {{ number_format($item->price_old * $item->num) }} <u>đ</u></td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pull-right m-t-30 text-right">
                {{--<p>Sub - Total amount: $13,848</p>--}}
                {{--<p>vat (10%) : $138 </p>--}}
                <hr>
                <h3><b>Total :</b> {{ number_format($item->total) }} <u>vnđ</u></h3>
            </div>

            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Cập nhật</button>
            {{--<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>--}}
        </div>
        </form>
    </div>
@stop