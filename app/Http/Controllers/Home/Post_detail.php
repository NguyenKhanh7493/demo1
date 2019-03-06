<?php

namespace App\Http\Controllers\Home;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
use App\product;

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
        $post_arr_list = Post::where('status',1)->paginate(1);
//        echo "<pre>";
//        print_r($post_arr_list);die();
//        echo "</pre>";
        return view('frontend/post/post_list',compact('arr_menu','post_arr_list'));
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
        $post_detail = Post::where('status',1)->where('alias','like',$name)->orderBy('id','DESC')->limit(6)->get();
        $post_list = Post::where('status',1)->orderBy('id','=','DESC')->limit(6)->get();
        $post_slidebar = Post::where('status',1)->orderBy('view','DESC')->limit(6)->get();
//        echo "<pre>";
//        print_r($post_slidebar);die();
//        echo "</pre>";
        return view('frontend/post/post_detail',compact('arr_menu','post_detail','post_list','post_slidebar'));
    }
}
