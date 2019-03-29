<?php

namespace App\Http\Controllers\Home;

use App\Invoice;
use App\Http\Requests\Home\PaymentRequest;
use App\Invoice_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
use Cart;
use Carbon\Carbon;
use Mail,DB;

class PaymentController extends Controller
{
    public function payment(){
        $menu = Cate::where('menu_top',1)->where('status',1)->select('id','name','alias','parent_id')->get()->toArray();
        $arr_menu = [];
        foreach ($menu as $menus){
            $arr_child = [];
            if($menus['parent_id'] == 0){
                $id = $menus['id'];
                foreach ($menu as $menus2){
                    if($menus2['parent_id'] == $id){
                        array_push($arr_child, $menus2);
                    }
                }
                $temp = ['parent' => $menus, 'child' => $arr_child];
                array_push( $arr_menu, $temp);
            }
        }
        $total = total();
        return view('frontend/payment/cart_payment',compact('arr_menu','total'));
    }
    public function get_invoice_detail(){
        $menu = Cate::where('menu_top',1)->where('status',1)->select('id','name','alias','parent_id')->get()->toArray();
        $arr_menu = [];
        foreach ($menu as $menus){
            $arr_child = [];
            if($menus['parent_id'] == 0){
                $id = $menus['id'];
                foreach ($menu as $menus2){
                    if($menus2['parent_id'] == $id){
                        array_push($arr_child, $menus2);
                    }
                }
                $temp = ['parent' => $menus, 'child' => $arr_child];
                array_push( $arr_menu, $temp);
            }
        }
        $total = total();
        return view('frontend/invoice/invoiceDetail',compact('arr_menu','total'));
    }
    public function post_invoice_detail(PaymentRequest $request){
        $paymentCart = new Invoice();
        $paymentCart->name = $request->name;
        $paymentCart->gender = $request->gender;
        $paymentCart->phone = $request->phone;
        $paymentCart->address = $request->address;
        $paymentCart->email = $request->email;
        $paymentCart->other = $request->other;
//        $total = $request->get('total_product');
        $paymentCart->total = total();
//        $date = date('m/d/Y h:i:s');
        $date =  Carbon::now('Asia/Ho_Chi_Minh');
//        $date->toDateString();
        $date_bill = $date->format('d/m/Y h:i:s');
//        print_r($date->format('d/m/Y h:i:s'));die();
        $paymentCart->time_buy = $date_bill;
        $paymentCart->save();
        if ($paymentCart){
            $invoice_id = $paymentCart['id'];
            foreach (Cart::content() as $item){
                $invoiceDetail = new Invoice_detail();
                $invoiceDetail->id_invoice = $invoice_id;
                $invoiceDetail->product_id = $item->id;
                $invoiceDetail->num = $item->qty;
                $invoiceDetail->save();
                Cart::destroy();
            }
        }

        $bill_update = DB::table('invoices')
            ->join('invoice_details','invoices.id','=','invoice_details.id_invoice')
            ->join('products','invoice_details.product_id','=','products.id')
            ->where('invoices.id',$paymentCart['id'])
            ->select('products.name','products.id','invoice_details.num','invoices.id as bill_id','invoices.name as name_invoice','invoices.gender',
                'invoices.phone','invoices.address','invoices.email','invoices.other','invoices.total','invoices.created_at',
                'products.price_old','products.price_new','invoices.status')->get();
        $bill = [];
        foreach ($bill_update as $val){
            array_push($bill,['id'=>$val->id,'name'=>$val->name,'num'=>$val->num,'price_old'=>$val->price_old,'price_new'=>$val->price_new,'total'=>$val->total]);
        }
        $data = ['hoten'=>$request->input('name'),
            'phone'=>$paymentCart['phone'],
            'id_invoice'=>$paymentCart['id'],
            'email'=>$request->input('email'),
            'address'=>$request->input('address'),
            'total' => $paymentCart['total'],
            'date'=>$paymentCart['time_buy'],
            'status'=>$paymentCart['status'],
            'product'=>$bill
        ];
        Mail::send('frontend.send_mail.payment_email',$data,function ($message) use ($request){
            $message->from('khanhoideptrairua@gmail.com','shop hoa');
            $message->to($request->input('email'))->subject('Chi tiết hóa đơn');
        });
        return redirect()->route('get-invoice-detail');
    }
}
