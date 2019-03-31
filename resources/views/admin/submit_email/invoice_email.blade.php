<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                        </td>

                        <td>
                            <span>Tình trạng đơn hàng</span><br>
                            @if($status == 0)
                                <span style="color: red;font-weight: 600;font-size: 20px;">Đang xử lý</span>
                            @elseif($status == 1)
                                <span style="color: red;font-weight: 600;font-size: 20px;">Đã xử lý</span>
                            @elseif($status == 2)
                                <span style="color: red;font-weight: 600;font-size: 20px;">Đang vận chuyển</span>
                            @elseif($status == 3)
                                <span style="color: red;font-weight: 600;font-size: 20px;">Đã giao hàng</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            Anh/chị : {{ $hoten }}<br>
                            SĐT : {{ $phone }}<br>
                            ĐC : {{ $address }}<br>
                            Email : {{ $email }}
                        </td>

                        <td>
                            Mã hóa đơn #: {{ $id_invoice }}<br>
                            Ngày mua : {{ $date }}<br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <div class="table-responsive m-t-40">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th class="text-right">id</th>
                    <th class="text-right">Tên sản phẩm</th>
                    <th class="text-right">Số lượng</th>
                    <th class="text-right">Giá</th>
                    <th class="text-right">Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $item)
                <tr style="border: 2px solid #ffff00;">
                    <td class="text-center">{{ $item['id'] }}</td>
                    <td class="name-invoice bill-detail" style="text-align: left;">{{ $item['name'] }}</td>
                    <td class="text-right">{{ $item['num'] }} </td>
                    @if($item['price_new'] && $item['price_new'] != 0)
                    <td class="text-right"> {{ number_format($item['price_new']) }} <u>đ</u></td>
                    @else
                    <td class="text-right"> {{ number_format($item['price_old']) }} <u>đ</u></td>
                    @endif

                    @if($item['price_new'] && $item['price_new'] != 0)
                        <td class="text-right"> {{ number_format($item['price_new'] * $item['num']) }} <u>đ</u></td>
                    @else
                        <td class="text-right"> {{ number_format($item['price_old'] * $item['num']) }} <u>đ</u></td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="test" style="margin-left: 540px;">
                <div class="pull-right">
                    <p></p>
                    <p style="font-weight: 600;">Tổng giá : <span style="color: #ea0b0b;">{{ number_format($total) }} <u>đ</u></span></p>
                </div>
            </div>
            <hr>
            <p style="text-align: center;color: #0e4bf0;">Chúng tôi xin chân thành cảm ơn quý khách đã mua sản phẩm của chúng tôi !</p>
        </div>
    </table>
</div>
</body>
</html>
