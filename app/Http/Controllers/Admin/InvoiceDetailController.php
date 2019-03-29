<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Session,Mail;
class InvoiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $invoice_list = Invoice::orderBy('id','DESC')->get()->toArray();
        $invoice_list = DB::table('invoices')->orderBy('id','DESC')->paginate(20);
//        echo "<pre>";
//        print_r($invoice_list);
//        echo "</pre>";die();
        return view('admin/invoice/list',compact('invoice_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('billList');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('createEmail');
    }
    public function getEmail(){
        return view('admin/submit_email/invoice_email');
    }
    public function postEmail(){}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bill_detail = DB::table('invoices')
                       ->join('invoice_details','invoices.id','=','invoice_details.id_invoice')
                       ->join('products','invoice_details.product_id','=','products.id')
                       ->where('invoices.id',$id)
                       ->select('products.name','products.id','invoice_details.num','invoices.id as bill_id','invoices.name as name_invoice','invoices.gender',
                                'invoices.phone','invoices.address','invoices.email','invoices.other','invoices.total','invoices.created_at','products.price_old','products.price_new','invoices.status')->orderBy('bill_id','DESC')->get();
//        echo "<pre>";
//        print_r($bill_detail);
//        echo "</pre>";die();
        return view('admin/invoice/invoiceView',compact('bill_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill_update = DB::table('invoices')
            ->join('invoice_details','invoices.id','=','invoice_details.id_invoice')
            ->join('products','invoice_details.product_id','=','products.id')
            ->where('invoices.id',$id)
            ->select('products.name','products.id','invoice_details.num','invoices.id as bill_id','invoices.name as name_invoice','invoices.gender',
                'invoices.phone','invoices.address','invoices.email','invoices.other','invoices.total','invoices.time_buy',
                'products.price_old','products.price_new','invoices.status')->get();
        $status_bill = Invoice::find($id);
//        echo "<pre>";
//        print_r($bill_update);
//        echo "</pre>";die();
        return view('admin/invoice/updateBill',compact('bill_update','status_bill'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status_bill = Invoice::find($id);

        $bill_update = DB::table('invoices')
            ->join('invoice_details','invoices.id','=','invoice_details.id_invoice')
            ->join('products','invoice_details.product_id','=','products.id')
            ->where('invoices.id',$id)
            ->select('products.name','products.id','invoice_details.num','invoices.id as bill_id','invoices.name as name_invoice','invoices.gender',
                'invoices.phone','invoices.address','invoices.email','invoices.other','invoices.total','invoices.time_buy',
                'products.price_old','products.price_new','invoices.status')->get();

        $bill = [];
        foreach ($bill_update as $val){
            array_push($bill,['id'=>$val->id,'name'=>$val->name,'num'=>$val->num,'price_old'=>$val->price_old,'price_new'=>$val->price_new,'total'=>$val->total]);
        }
        $requestData = $request->all();
        $requestData['status'] = $request->status;
//        $requestData['created_at'] = date('m/d/Y');
//        echo $date;die();
        if ($status_bill->update($requestData)){
            $data = ['hoten'=>$request->input('name'),
                'status'=>$request->input('status'),
                'id_invoice'=>$request->input('id_hd'),
                'address'=>$request->input('address'),
                'email'=>$request->input('email_bill'),
                'date'=>$request->input('time_buy'),
                'total'=>$status_bill['total'],
                'product'=>$bill,
                'phone'=>$request->input('phone')];
//        echo "<pre>";
//        print_r($bill);
//        echo "</pre>";die();
            //use ($request) thêm vào function để thêm email
            Mail::send('admin.submit_email.invoice_email',$data,function ($message) use ($request){
                $message->from('khanhoideptrairua@gmail.com','Shop hoa');
                $message->to($request->input('email_bill'))->subject('Chi tiết hóa đơn mua hàng');
            });
            Session::flash('success','Sửa thành công');
            return redirect()->route('billUpdate',$status_bill->id);
        }else{
            Session::flash('danger','Thêm thất bại');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
