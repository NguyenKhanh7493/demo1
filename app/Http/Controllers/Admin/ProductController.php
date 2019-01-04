<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductAddRequest;
use App\Images;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cate;
use App\User;
use Illuminate\Support\Facades\Input;
use Session,File;

class ProductController extends Controller
{
    private $path_file = 'public/images/product/avatar';
    private $path_file_pro = 'public/images/product/image_product';
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        $user = User::pluck('name','id')->toArray();
//        echo "<pre>";
//        print_r($user);
//        echo "</pre>";die();
        return view('admin/product/form',['parent'=>$parent,'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAddRequest $request)
    {
        if (Input::hasFile('avatar')){
            $avatar = $request->file('avatar')->getClientOriginalName();
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
        if (!isset($requestData['hot'])){
            $requestData['hot'] = 0;
        }
        if (!isset($requestData['best_sale'])){
            $requestData['best_sale'] = 0;
        }
        $requestData['alias'] = changeTitle($request->name);
        $requestData['avatar'] = $avatar;
        $product = Product::create($requestData);
        if ($product){
            $proId = $product['id'];
            $proTitle = $product['title'];
            if (Input::hasFile('images')){
                foreach (Input::file('images') as $file){
                    $pImages = new Images();
                    if (isset($file)){
                        $pImages->image_name = $file->getClientOriginalName();
                        $pImages->item_id = $proId;
                        $pImages->title = $proTitle;
                        $pImages->item_type = 1;
                        $file->move($this->path_file_pro,$file->getClientOriginalName());
                        $pImages->save();
                    }
                }
            }
            Session::flash('success','Thêm thành công');
            return redirect()->route('proCreate');
        }else{
            Session::flash('danger','Thêm Thất bại');
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
        $product = Product::find($id);
//        $pImg = Product::findOrFail($id)->pImages;
        $pImg = Images::select('image_name','item_id','id as id_img')->where('item_id',$product->id)->get()->toArray();
//        echo "<pre>";
//        print_r($pImg);
//        echo "</pre>";die();
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        $user = User::pluck('name','id')->toArray();
        return view('admin/product/form',['product'=>$product,'parent'=>$parent,'user'=>$user,'pImg'=>$pImg]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if (Input::hasFile('avatar')){
            $avatar = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move($this->path_file,$avatar);
            $proImage = ("public/images/product/avatar/{$product->avatar}");
            if (File::exists($proImage)) {
                File::delete($proImage);
            }
        }else{
            $avatar = $product->avatar;
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
        if (!isset($requestData['hot'])){
            $requestData['hot'] = 0;
        }
        if (!isset($requestData['best_sale'])){
            $requestData['best_sale'] = 0;
        }
        $requestData['alias'] = changeTitle($request->name);
        $requestData['avatar'] = $avatar;
        if ($product->update($requestData)){
            $proId = $product['id'];
            $proTitle = $product['title'];
            if (Input::hasFile('images')){
                foreach (Input::file('images') as $file){
                    $pImages = new Images();
                    if (isset($file)){
                        $pImages->image_name = $file->getClientOriginalName();
                        $pImages->item_id = $proId;
                        $pImages->title = $proTitle;
                        $pImages->item_type = 1;
                        $file->move($this->path_file_pro,$file->getClientOriginalName());
                        $pImages->save();
                    }
                }
            }
            Session::flash('success','Sửa thành công thành công');
            return redirect()->route('getProEdit',$product->id);
        }else{
            Session::flash('danger','Sửa thất bại');
            return redirect()->back();
        }
    }

    public function delImg(Request $request){
//        if (Request::ajax()){
//            $id = Request::get('id');
//            $proImg = Images::findOrFail($id);
//            $proImg->delete($id);
//            die('ok');
//        }else{
//            die(0);
//        }
        if ($request->ajax()){
            Images::destroy($request->id);
            return response(['id'=>$request->id]);
        }
    }
    public function destroy($id)
    {
        //
    }
}
