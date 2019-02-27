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
        //Hiển thị chi tiết sản phẩm
        $product_detail = Product::where('alias','like',$name)->get();
        //end
//        echo "<pre>";
//        print_r($product_detail);
//        echo "</pre>";die();
        $cate_pro = $product_detail[0]['cate_id'];
        $cate_pro_id = $product_detail[0]['id'];
        //lấy ảnh sản phẩm
        $product_images = DB::table('products')
                            ->join('images','products.id','=','images.item_id')
                            ->where('alias','like',$name)
                            ->where('images.item_type',1)
                            ->where('products.status',1)
                            ->select('images.image_name','images.title','images.id','products.avatar')
                            ->orderBy('id','DESC')->limit(6)
                            ->get()->toArray();
        //end
//        echo "<pre>";
//        print_r($product_images);
//        echo "</pre>";die();
        //lấy sản phẩm liên quan
        $product_item = DB::table('products')
                        ->join('cates','products.cate_id','=','cates.id')
                        ->where('cates.id','=',$cate_pro)
                        ->where('products.id','!=',$cate_pro_id)
                        ->where('products.status',1)
                        ->select('products.id','products.name','products.alias','products.price_old','products.price_new','products.avatar','products.title')
                        ->orderBy('products.id','DESC')->limit(6)->get();
        //end

        return view('frontend/product/product_detail',compact('arr_menu','product_detail','product_images','product_item'));
    }
}
