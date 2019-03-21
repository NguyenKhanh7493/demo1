<?php

namespace App\Http\Controllers\Home;

use Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('frontend/cart/view_cart',compact('arr_menu'));
    }
//    public function cart(Request $request){
//        if($request->isMethod('post')){
////            $this->data['title'] = 'gio hang cua ban';
//            $product_id = $request->get('product_id');
//            $product = Product::find($product_id);
//            $cartInfo = [
//                'id' => $product_id,
//                'name' => $product->name,
//                'price' => $product->price_old,
//                'qty' => '1',
//                'options' => [
//                    'avatar' => $product->avatar,
//                    'price_new' => $product->price_new
//                ]
//            ];
//            Cart::add($cartInfo);
//        }
//        return $this->Get_cart();
//    }
//    public function Get_cart(){
//        $menu = Cate::where('menu_top',1)->where('status',1)->select('id','name','alias','parent_id')->get()->toArray();
//        $arr_menu = [];
//        foreach ($menu as $menus){
//            $arr_child = [];
//            if($menus['parent_id'] == 0){
//                $id = $menus['id'];
//                foreach ($menu as $menus2){
//                    if($menus2['parent_id'] == $id){
//                        array_push($arr_child, $menus2);
//                    }
//                }
//                $temp = ['parent' => $menus, 'child' => $arr_child];
//                array_push( $arr_menu, $temp);
//            }
//        }
//        $cart = Cart::content();
//        $this->data['cart'] = $cart;
////        $product = Product::find(7);
////        echo "<pre>";
////        print_r($cart);die();
////        echo "</pre>";
//        return view('frontend/cart/view_cart',$this->data,compact('arr_menu'));
//    }
    public function addCart($id){
        $product_buy = Product::where('id',$id)->first();
        $cartInfo = [
            'id' => $product_buy->id,
            'name' => $product_buy->name,
            'price' => $product_buy->price_old,
            'qty' => 1,
            'options' => [
                'avatar' => $product_buy->avatar,
                 'price_new' => $product_buy->price_new
            ]
        ];
        Cart::add($cartInfo);
        $cart = Cart::content();
        return redirect()->route('cart_index');
//        echo "<pre>";
//        print_r($cart);
//        echo "</pre>";die();
    }
    public function listCart(){
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
        $cart = Cart::content();
        $total = $this->total();
        return view('frontend/cart/view_cart',compact('cart','arr_menu','total'));
    }
    public function total(){
        $total = 0;
        foreach (Cart::content() as $val){
            if ($val->options->price_new != null){
                $total = $val->qty * $val->options->price_new + $total;
            }elseif($val->price){
                $total = $val->subtotal + $total;
            }
        }
        return $total;
    }
    public function updateCart(Request $request){
        if ($request->ajax()){
            $id = $request->get('id');
            $qty = $request->get('qty');
            Cart::update($id,$qty);
        }
    }
    public function delete($id){
        Cart::remove($id);
        return redirect()->route('cart_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
