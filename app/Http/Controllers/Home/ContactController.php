<?php

namespace App\Http\Controllers\Home;

use App\Contact;
use App\Http\Requests\Home\ContactRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
use Carbon\Carbon;
use Session;
class ContactController extends Controller
{
    public function contact(){
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
        return view('frontend/contact/contact',compact('arr_menu','total'));
    }
    public function post_contact(ContactRequest $request){

        $requestData = new Contact();
        $requestData->name = $request->name;
        $requestData->email = $request->email;
        $requestData->description = $request->description;
        $requestData->contents = $request->contents;
        $date =  Carbon::now('Asia/Ho_Chi_Minh');
        $date_bill = $date->format('d/m/Y h:i:s');
        $requestData->date_Day = $date_bill;
        $requestData->save();
        if ($requestData){
            Session::flash('success','Cảm ơn bạn đã liên hệ với chúng tôi, chúng tôi sẽ trả lời cho bạn trong thời gian sớm nhất ! Xin cảm ơn');
            return redirect()->route('contact');
        }else{
            Session::flash('danger','Liên hệ thất bại');
            return redirect()->route('contact');
        }
    }
}
