<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class InvoiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice_list = Invoice::paginate(12);
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
                                'invoices.phone','invoices.address','invoices.email','invoices.other','invoices.total','invoices.created_at','products.price_old','products.price_new')->orderBy('bill_id','DESC')->get();
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
        //
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
        //
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
