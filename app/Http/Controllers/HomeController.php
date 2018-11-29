<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use View;
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
        return view('home');
    }

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
