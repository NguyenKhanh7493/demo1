<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ChangePassRequest;
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
use File,DB;
class UserController extends Controller
{
    private $path_file = 'public/images/user';
    public function index()
    {
//        $list = User::all();
        $list = DB::table('users')
            ->join('role_user','role_user.user_id','=','users.id')
            ->join('roles','roles.id','=','role_user.role_id')
            //->where('role_id',$role_detail['id'])
            ->select('roles.name as role_name','users.id as id_user','users.fullname','users.email','users.avatar','users.phone')
            ->get()->toArray();
//        $role = DB::table('role_user')->join('roles','role_user.role_id','=','roles.id')->where('user_id',$k[0]->id)->get()->toArray();
//        echo "<pre>";
//        print_r($list);
//        echo "<pre>";
//        die();
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
        $user_add = User::create($requestData);
        if ($user_add){
            $id = $user_add->id;
            $user_add = User::findOrFail($id);
            $user_add->roles()->detach();
            if( isset($requestData['role']) ) {
                $id_role = $requestData['role'];
                $user_add->roles()->attach($id_role);
            }
            $user_add->update($requestData);
            Session::flash('danger','Thêm quản trị thành công');
            return redirect()->route('editGet',$user_add->id);
        }else{
            Session::flash('danger','Thêm thất bại');
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
        $role = Role::pluck('name','id')->toArray();
        $role_user = DB::table('role_user')->where('user_id',$user->id)->select('user_id','role_id')->get()->toArray();
        $role_id = $role_user[0]->role_id;
        $route = "editGet";
        $per_role = DB::table('permission_role')
            ->join('permissions','permission_role.permission_id', '=' , 'permissions.id')
            ->where('role_id',$role_id)
            ->select('permissions.name')
            ->get()->toArray();
//         print_r($per_role);die();
        return view('admin/users/form',['user'=>$user,'permission'=>$permission,'route'=>$route,'role'=>$role,'role_user'=>$role_user,'per_role'=>$per_role]);
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
        $user->roles()->detach();
        if (isset($requestData['role'])){
            $edit_role = $requestData['role'];
            $user->roles()->attach($edit_role);
        }
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
    public function destroy(Request $request)
    {
        if ($request->ajax()){
            User::destroy($request->id);
            return response(['id'=>$request->id]);
        }
    }
    public function ShowChangePassword($id){
        if(!Auth::user()->ability('admin', 'edit-user')){
            Session::flash('danger', 'Bạn không phải là admin');
            return redirect('admin/error');
        }
        $user = User::find($id);
//        echo "<pre>";
//        print_r($user);
//        echo "</pre>";die();
        return view('admin/users/change_password',['user'=>$user]);
    }
    public function postChangePassword(ChangePassRequest $request, $id){
        if (Auth::check()){
            $requestData = $request->all();
            $cur_pass = Auth::user()->password;
            $user = User::find($id);
            if(Hash::check($requestData['current_password'], $cur_pass)){
                $user->password = Hash::make($requestData['password']);
                $user->save();
                Session::flash('danger','Bạn đổi mật khẩu thành công');
                return redirect()->route('editGet',$user->id);
            }else{
                Session::flash('danger','Bạn nhập mật khẩu hiện tại không chính xác');
                return redirect()->route('changerPass',$user->id);
            }
        }
    }
}
