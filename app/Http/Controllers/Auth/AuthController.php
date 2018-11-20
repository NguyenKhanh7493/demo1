<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getLogin(Request $request){
//        $auth = array([
//            'email' => $request->email,
//            'password' => $request->password
//        ]);
//        if (Auth::attempt($auth)){
//            return redirect()->back();
//        }else{
//            return redirect()->back();
//        }
        echo $request['email']."<br>";
        echo $request['password'];
    }
}
