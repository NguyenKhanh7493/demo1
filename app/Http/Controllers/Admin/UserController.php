<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Helpers\MyHelper;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use File;
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
        $role = Role::pluck('name','id')->toArray();
        $route = "post_create";
//        echo "<pre>";
//        print_r($role);
//        echo "</pre>";die();
        return view('admin/users/form',['permission'=>$permission,'route'=>$route,'role'=>$role]);
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
//        $requestData['avatar'] = $this->path_file . '/' . $avatar; lấy toàn bộ đường dẫn
        $requestData['avatar'] = $avatar;
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

    public function update(UserEditRequest $request, $id)
    {
        if (!\Entrust::can('edit-user')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $user = User::findOrFail($id);
        if (Input::hasFile('avatar')){
            $avatar = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move($this->path_file,$avatar);
            $usersImage = ("public/images/user/{$user->avatar}");
            if (File::exists($usersImage)) {
                File::delete($usersImage);
            }
        }else{
            $avatar = $user->avatar;
        }
        $requestData = $request->all();
//        $requestData['avatar'] = URL::asset($this->path_file . '/' . $avatar); lấy cả đường url ví dụ : http://demo1.site/upload/image/user/1.jpg
        $requestData['avatar'] = $avatar;
        if ($user->update($requestData)){
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
