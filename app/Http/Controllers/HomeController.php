<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Cate;
use App\Post;
use App\Product;
use App\Receive_email;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use View;
use Cart;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //lấy ip
//        $ip = $_SERVER['REMOTE_ADDR'];
//        $arr_ip = geoip()->getLocation($ip);
//        $result = [
//            'ip' => $ip,
//            'country' => $arr_ip['country'],
//            'region' => $arr_ip['city']
//        ];
//        $count_ip = count($result['ip']);
        //lấy ip
//        echo "<pre>";
//        print_r($count_ip);
//        echo "</pre>";die();
        $banner = Banner::where('banner_center',1)->where('status',1)->orderBy('id','DESC')->limit(3)->select('name','title','sort')->get();
        $banner_right = Banner::where('banner_right',1)->where('status',1)->orderBy('id','DESC')->limit(1)->select('name','title','sort')->get();
        $banner_bottom = Banner::where('banner_bottom',1)->where('status',1)->orderBy('id','DESC')->limit(2)->select('name','title','sort')->get();
        $menu = Cate::where('menu_top',1)->where('status',1)->select('id','name','alias','parent_id')->get()->toArray();
        $best_sale = Product::where('best_sale',1)->orderBy('id','DESC')->limit(6)->get();

        $bestseller = Product::orderBy('view','DESC')->limit(6)->get();

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
        $product_new = Product::where('status',1)->where('new',1)->orderBy('id','DESC')->limit(6)->get();
        $product_seeds = Product::where('status',1)->where('home',1)->orderBy('id','DESC')->limit(6)->get();
        $news_post = Post::where('status',1)->where('new',1)->orderBy('id','DESC')->limit(6)->get();
        $total = total();
        return view('frontend/index',
            compact('banner','banner_right','banner_bottom','menu','arr_menu','best_sale','product_new','product_seeds','news_post','total','bestseller')
        );
    }
    public function about(){
        $menu = Cate::where('menu_top',1)->where('status',1)->select('id','name','alias','parent_id')->get()->toArray();
        $arr_menu = [];
        foreach ($menu as $menus){
            $arr_child = [];
//            echo "<pre>";
//            print_r($menus);
//            echo "</pre>";
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
        return view('frontend/about/about',compact('arr_menu','total'));
    }
    public function receive_email(Request $request){
        $requestData = new Receive_email();
        $requestData->email = $request->email;
        $requestData->save();
        if ($requestData){
            echo "<script>
                        window.location = '".url('/')."'
                        alert('Bạn đã đăng ký email thành công..Xin cảm ơn bạn');
                    </script>";
        }
    }
    public function errors(){
        $error = [
            'name' => 'Bạn không có quyền truy cập',
            'title' => 'Nếu có thắc mắc bạn hãy liên hệ với ban quản trị để biết thêm thông tin',
            'description' => '',
            'content' => ''
        ];
        View::share('error_message', $error);
        return view('admin/error/errors');
    }
}
