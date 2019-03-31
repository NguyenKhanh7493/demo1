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
    public function index()
    {
        $banner = Banner::where('banner_center',1)->where('status',1)->orderBy('id','DESC')->limit(3)->select('name','title','sort')->get();
        $banner_right = Banner::where('banner_right',1)->where('status',1)->orderBy('id','DESC')->limit(1)->select('name','title','sort')->get();
        $banner_bottom = Banner::where('banner_bottom',1)->where('status',1)->orderBy('id','DESC')->limit(2)->select('name','title','sort')->get();
        $menu = Cate::where('menu_top',1)->where('status',1)->select('id','name','alias','parent_id')->get()->toArray();
        $best_sale = Product::where('best_sale',1)->orderBy('id','DESC')->limit(6)->get();
//        $bestseller = DB::table('invoice_details')
//            ->join('products','invoice_details.product_id','=','products.id')
//            ->select('products.name','products.id','products.price_old',
//                'products.price_new','products.alias','products.status','products.view')
//            ->orderBy('view','DESC')
//            ->get()->toArray();
        $bestseller = Product::orderBy('view','DESC')->limit(6)->get();
//                    echo "<pre>";
//            print_r($bestseller);
//            echo "</pre>";die();
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
        $product_new = Product::where('status',1)->where('new',1)->orderBy('id','DESC')->limit(6)->get();
        $product_seeds = Product::where('status',1)->where('home',1)->orderBy('id','DESC')->limit(6)->get();
        $news_post = Post::where('status',1)->where('new',1)->orderBy('id','DESC')->limit(6)->get();
        $total = total();
//        echo "<pre>";
//        print_r($news_post);
//        echo "</pre>";
//        die();
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
//    public function productDetail(){
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
//        $best_sale = Product::where('best_sale',1)->get();
////                    echo "<pre>";
////            print_r($best_sale);
////            echo "</pre>";
//        return view('frontend/product/product_detail',compact('arr_menu','best_sale'));
//    }

   // public function insertUser()
   // {
   //     $user = new User;

   //     $user->name = 'Xuân Hiếu';
   //     $user->fullname = 'Đoàn THị Xuân Hiếu';
   //     $user->address = 'QUẢNG TRỊ';
   //     $user->phone = '0972024098';
   //     $user->gender = '1';
   //     $user->avatar = 'hieu';
   //     $user->status = '1';
   //     $user->level = '1';
   //     $user->email = 'xuanhieu7496@gmail.com';
   //     $user->password = Hash::make('123456');
   //     $user->save();
   // }
    public function receive_email(Request $request){
        $requestData = new Receive_email();
        $requestData->email = $request->email;
        $requestData->save();
        if ($requestData){
            return redirect()->route('/');
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
