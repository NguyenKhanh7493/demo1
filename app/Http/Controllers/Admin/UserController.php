<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use App\Permission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Helpers\MyHelper;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    private $path_file = 'public/images/user';
    public function index()
    {
        $list = User::all();
//        echo "<pre>";
//        print_r($list);die();
//        echo "</pre>";
        return view('admin/users/list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!\Entrust::can('create-user')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $permission = Permission::all();
        $route = "post_create";
//        echo "<pre>";
//        print_r($permission);
//        echo "</pre>";die();
        return view('admin/users/form',['permission'=>$permission,'route'=>$route]);
    }

    public function store(UserAddRequest $request)
    {
        if (!Auth::user()->hasRole('admin')){
            Session::flash('danger','Bạn không phải là admin');
            return redirect()->route('create_user');
        }
        //code upload hình ảnh
//        if ($request->hasFile('avatar')){
//            $file = $request->file('avatar');
//            $name_not_ext = str_slug( strtolower( trim( pathinfo( $file->getClientOriginalName(),PATHINFO_FILENAME ) ) ) );
//            $ext = $file->getClientOriginalExtension();
//            $filename = $full_name = $name_not_ext . '-' . time() . '.' . $ext;
//            $file->move($this->path_file, $filename);
//            \MyHelpers::createThumbnail('user',$filename);
//        }else{
//            Session::flash('danger','Upload ảnh không thành công');
//            return redirect()->back();
//        }
        if(Input::hasFile('avatar')){
            $avatar 	        = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move($this->path_file,$avatar);
        }else{
            Session::flash('danger','Upload ảnh không thành công');
            return redirect()->back();
        }
        //end upload
        $requestData = $request->all();
        $requestData['avatar'] = URL::asset( $this->path_file . '/' . $avatar);
        $requestData['password'] = Hash::make($request->password);
        if (User::create($requestData)){
            Session::flash('danger','Thêm quản trị thành công');
            return redirect()->back();
        }else{
            Session::flash('danger','thành công');
            return redirect()->back();
        }
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!\Entrust::can('edit-user')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $user = User::find($id);
        $permission = Permission::all();
        $route = "editGet";
        return view('admin/users/form',['user'=>$user,'permission'=>$permission,'route'=>$route]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        if (\Entrust::can('edit-user')){
            Session::flash('danger','Bạn không phải là admin');
            return redirect('admin/error');
        }
        $user = User::findOrFail($id);
        if (Input::hasFile('avatar')){
            $avatar = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move($this->path_file,$avatar);
        }else{
            $avatar = $user->avatar;
        }
        $requestData = $request->all();
        $requestData['avatar'] = URL::asset($this->path_file . '/' . $avatar);
        $pass = '';
        if ($request->password != ''){
            $requestData['password'] = Hash::make($request->password);
        }else{
            $pass = $user->password;
        }
        if (User::create($requestData)){
            Session::flash('danger','Update thanh cong');
            return redirect()->back();
        }else{
            Session::flash('danger','Update that bai');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
