<?php

namespace App\Http\Controllers\Home;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
use DB;

class Product_detail extends Controller
{
    public function productDetail($name){
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
        $product_detail = Product::where('alias','like',$name)->get();
        $product_images = DB::table('products')
                            ->join('images','products.id','=','images.item_id')
                            ->where('alias','like',$name)
                            ->where('images.item_type',1)->get();
//        echo "<pre>";
//        print_r($product_images);die();
//        echo "</pre>";
        return view('frontend/product/product_detail',compact('arr_menu','product_detail','product_images'));
    }
}
