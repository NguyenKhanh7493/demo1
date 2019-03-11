<?php

namespace App\Http\Controllers\Home;

use App\Banner;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
use App\product;
use DB,Session;
class Post_detail extends Controller
{
    public function postList(){
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
        $post_arr_list = Post::where('status',1)->paginate(4);
        //sản phẩm được xem nhiều nhất
        $post_slidebar = Post::where('status',1)->orderBy('view','DESC')->limit(6)->get();
        //lấy banner quảng cáo sản phẩm
        $post_banner = Banner::where('status',1)->where('banner_right',1)->orderBy('id','DESC')->limit(1)->get();
//        echo "<pre>";
//        print_r($post_arr_list);die();
//        echo "</pre>";
        return view('frontend/post/post_list',compact('arr_menu','post_arr_list','post_slidebar','post_banner'));
    }
    public function postDetail($name){
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
        $post_detail = Post::where('status',1)->where('alias','like',$name)->orderBy('id','DESC')->limit(6)->first();
        $postKey = 'post_' . $post_detail->id;
        if (!Session::has($postKey)){
            $post_detail->increment('view');
            Session::put($postKey,1);
        }
        //danh sách liên quan
        $post_list = Post::where('status',1)->orderBy('id','DESC')->limit(6)->get();
        //sản phẩm được xem nhiều nhất
        $post_slidebar = Post::where('status',1)->orderBy('view','DESC')->limit(6)->get();
        //lấy banner quảng cáo sản phẩm
        $post_banner = Banner::where('status',1)->where('banner_right',1)->orderBy('id','DESC')->limit(1)->get();
        //lấy ảnh bên bảng images
        $post_image = DB::table('posts')
                      ->join('images','posts.id','=','images.item_id')
                      ->where('alias','like',$name)
                      ->where('item_type',2)
                      ->where('status',1)
                      ->select('images.image_name','images.title','images.id')->orderBy('id','DESC')->limit(1)->get();
//        echo "<pre>";
//        print_r($post_image);die();
//        echo "</pre>";
        return view('frontend/post/post_detail',compact('arr_menu','post_detail','post_list','post_slidebar','post_banner','post_image'));
    }
}
