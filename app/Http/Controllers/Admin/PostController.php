<?php

namespace App\Http\Controllers\Admin;

use App\Cate;
use App\Http\Requests\PostAddRequest;
use App\Http\Requests\PostEditRequest;
use App\Images;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB,Session,File;

class PostController extends Controller
{
    private $path_file = 'public/images/post/avatar';
    private $path_detail = 'public/images/post/image_detail';
    public function index()
    {
        $post = DB::table('posts')
                ->join('users','users.id','=','posts.user_id')
                ->select('posts.id','posts.name','posts.view','posts.avatar','users.name as nameUser')->get()->toArray();
        return view('admin/post/list',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
//        $user = User::pluck('name','id')->toArray();
        $user = DB::table('users')
                ->join('role_user','role_user.user_id','=','users.id')
                ->join('roles','roles.id','=','role_user.role_id')
                ->join('permission_role','permission_role.role_id','=','roles.id')
                ->join('permissions','permissions.id','=','permission_role.permission_id')
                ->orwhere('permissions.name','like','delete-post')
                ->orwhere('permissions.name','like','create-post')
                ->orwhere('permissions.name','like','edit-post')
                ->select('users.name','users.id')->distinct()->get()->pluck('name','id');
//        $user=array_map(function($item){
//            return (array) $item;
//        },$user);
//                echo "<pre>";
//        print_r($user);
//        echo "</pre>";;die();
//        $test = [];
//        foreach ($user as $item){
//           array_push($test,[$item->name,$item->id]);
//        }
//        $test1 = $test->pluck('name','id');
//        echo "<pre>";
//        print_r($test);
//        echo "</pre>";;die();
//        die();
//        echo "<pre>";
//        print_r($user);
//        echo "</pre>";;die();
        return view('admin/post/form',compact('parent','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostAddRequest $request)
    {
        if (Input::hasFile('avatar')){
            $avatar = $request->file('avatar')->getClientOriginalName();
            $proImage = ("public/images/post/avatar/{$avatar}");
            if (File::exists($proImage)){
                Session::flash('danger','Trùng file ảnh');
                return redirect()->route('postCreate');
            }
            $request->file('avatar')->move($this->path_file,$avatar);
        }else{
            Session::flash('danger','Upload ảnh không thành công');
            return redirect()->back();
        }
        $requestData = $request->all();
        if (!isset($requestData['status'])){
            $requestData['status'] = 0;
        }
        if (!isset($requestData['home'])){
            $requestData['home'] = 0;
        }
        if (!isset($requestData['new'])){
            $requestData['new'] = 0;
        }
        $requestData['avatar'] = $avatar;
        $requestData['alias'] = changeTitle($request->name);
        $post = Post::create($requestData);
        if ($post){
            $postId = $post['id'];
            $titlePost = $post['title'];
            if (Input::hasFile('imagesPost')){
                foreach (Input::file('imagesPost') as $file){
                    $pImgaes = new Images();
                    if (isset($file)){
                        $pImgaes->image_name = $file->getClientOriginalName();
                        $pImgaes->title = $titlePost;
                        $pImgaes->item_type = 2;
                        $pImgaes->item_id = $postId;
                        if ($pImgaes->image_name == $file->getClientOriginalName()){
                            $test = Images::where('image_name','like',$pImgaes->image_name)->where('item_type',2)->get()->toArray();
                            if ($test != null){
                                Session::flash('danger','Trùng tên ảnh sản phẩm');
                                return redirect()->back();
                            }
                        }
                        $file->move($this->path_detail,$file->getClientOriginalName());
                        $pImgaes->save();
                    }
                }
            }
            Session::flash('success','Thêm bài viết thành công');
            return redirect()->route('postEdit',$post->id);
        }else{
            Session::flash('danger','Thêm bài viết không thành công');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $post = Post::findOrFail($id);
        $pImg = Images::select('image_name','item_id','id as id_img')->where('item_id',$post->id)->get()->toArray();
//        echo "<pre>";
//        print_r($pImg);
//        echo "</pre>";die();
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        $user = DB::table('users')
            ->join('role_user','role_user.user_id','=','users.id')
            ->join('roles','roles.id','=','role_user.role_id')
            ->join('permission_role','permission_role.role_id','=','roles.id')
            ->join('permissions','permissions.id','=','permission_role.permission_id')
            ->orwhere('permissions.name','like','delete-post')
            ->orwhere('permissions.name','like','create-post')
            ->orwhere('permissions.name','like','edit-post')
            ->select('users.name','users.id')->distinct()->get()->pluck('name','id');
        return view('admin/post/form',compact('post','parent','pImg','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostEditRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        if (Input::hasFile('avatar')){
            $avatar = $request->file('avatar')->getClientOriginalName();
            if (Input::hasFile('avatar') == $post->avatar){
                Session::flash('danger','Trùng tên ảnh nè');
                return redirect()->back();
            }
            $request->file('avatar')->move($this->path_file,$avatar);
            $proImage = ("public/images/post/avatar/{$post->avatar}");
            if (File::exists($proImage)) {
                File::delete($proImage);
            }
        }else{
            $avatar = $post->avatar;
        }
        $requestData = $request->all();
        if (!isset($requestData['status'])){
            $requestData['status'] = 0;
        }
        if (!isset($requestData['home'])){
            $requestData['home'] = 0;
        }
        if (!isset($requestData['new'])){
            $requestData['new'] = 0;
        }
        $requestData['alias'] = changeTitle($request->name);
        $requestData['avatar'] = $avatar;
        if ($post->update($requestData)){
            $pId = $post->id;
            $title = $post->name;
            if (Input::hasFile('imagesPost')){
                foreach (Input::file('imagesPost') as $file){
                    $pImgaes = new Images();
                    if (isset($file)){
                        $pImgaes->image_name = $file->getClientOriginalName();
                        $pImgaes->title = $title;
                        $pImgaes->item_type = 2;
                        $pImgaes->item_id = $pId;
                        if ($pImgaes->image_name == $file->getClientOriginalName()){
                            $test = Images::where('image_name','like',$pImgaes->image_name)->where('item_type',2)->get()->toArray();
                            if ($test != null){
                                Session::flash('danger','Trùng tên ảnh sản phẩm');
                                return redirect()->back();
                            }
                        }
                        $file->move($this->path_detail,$file->getClientOriginalName());
                        $pImgaes->save();
                    }
                }
            }
            Session::flash('success','Sửa thành công');
            return redirect()->route('postEdit',$post->id);
        }else{
            Session::flash('danger','Thêm thất bại');
            return redirect()->back();
        }
    }

    public function delImgPost(Request $request){
        $img = Images::findOrFail($request->id);
        if ($request->ajax()){
//            Images::destroy($request->id);
            $img->delete($request->id);
            File::delete(public_path('/images/post/image_detail/'.$img->image_name));
            return response(['id'=>$request->id]);
        }
    }
    public function destroy(Request $request)
    {
        $img = Post::findOrFail($request->id);
        if ($request->ajax()){
            $img->delete($request->id);
            File::delete(public_path('/images/post/avatar/'.$img->avatar));
            return response(['id'=>$request->id]);
        }
    }
}
