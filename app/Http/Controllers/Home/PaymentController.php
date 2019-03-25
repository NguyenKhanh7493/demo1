<?php

namespace App\Http\Controllers\Home;

use App\Invoice;
use App\Http\Requests\Home\PaymentRequest;
use App\Invoice_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
use Cart;

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
        return redirect()->route('get-invoice-detail');
    }
}
