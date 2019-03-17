<?php

namespace App\Http\Controllers\Home;

use App\Post;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
use App\Banner;

class SearchController extends Controller
{
    public function searchProduct(Request $request){
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
        $key = $request->search;
        $product = Product::where('name','like','%'.$request->search.'%')
                            ->orWhere('price_old','like','%'.$request->search.'%')
                            ->orWhere('price_new','like','%'.$request->search.'%')->orderBy('id','DESC')->paginate(9);
        $product_view = Product::where('status',1)->orderBy('view','DESC')->limit(5)->get();
        $post_banner = Banner::where('status',1)->where('banner_right',1)->orderBy('id','DESC')->limit(1)->get();

        //post
        $post = Post::where('name','like','%'.$request->search.'%')
            ->orWhere('introduction','like','%'.$request->search.'%')
            ->orWhere('content','like','%'.$request->search.'%')->paginate(9);
        //sản phẩm được xem nhiều nhất
        $post_slidebar = Post::where('status',1)->orderBy('view','DESC')->limit(6)->get();
        return view('frontend/search/search_product',compact('product','key','arr_menu','product_view','post_banner','post_slidebar','post'));
    }
    public function searchPost(Request $request){
        $key = $request->search;
        $post = Post::where('name','like','%'.$request->search.'%')
            ->orWhere('introduction','like','%'.$request->search.'%')
            ->orWhere('content','like','%'.$request->search.'%')->paginate(9);
        return view('frontend/search/search_post',compact('key','post'));
    }
}
