<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductAddRequest;
use App\Http\Requests\ProductEditRequest;
use App\Images;
use App\Product;
use Faker\Provider\DateTime;
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
        $pro = Product::all();
        return view('admin/product/list',['pro'=>$pro]);
    }
    public function create()
    {
        if (!\Entrust::can('create-product')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        $user = User::pluck('name','id')->toArray();
        return view('admin/product/form',['parent'=>$parent,'user'=>$user]);
    }
    public function store(ProductAddRequest $request)
    {
        if (!\Entrust::can('create-product')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        if (Input::hasFile('avatar')){
            $avatar = $request->file('avatar')->getClientOriginalName();
            $proImage = ("public/images/product/avatar/{$avatar}");
            if (File::exists($proImage)){
                Session::flash('danger','Trùng file ảnh');
                return redirect()->back();
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
                        if ($pImages->image_name == $file->getClientOriginalName()){
                            $test = Images::where('image_name','like',$pImages->image_name)->where('item_type',1)->get()->toArray();
                            if ($test != null){
                                Session::flash('danger','Trùng tên ảnh sản phẩm nè');
                                return redirect()->back();
                            }
                        }
                        $file->move($this->path_file_pro,$file->getClientOriginalName());
                        $pImages->save();
                    }
                }
            }
            Session::flash('success','Thêm thành công');
            return redirect()->route('getProEdit',$proId);
        }else{
            Session::flash('danger','Thêm Thất bại');
            return redirect()->back();
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        if (!\Entrust::can('edit-product')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $product = Product::find($id);
        $pImg = Images::select('image_name','item_id','id as id_img')->where('item_id',$product->id)->get()->toArray();
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        $user = User::pluck('name','id')->toArray();
        return view('admin/product/form',['product'=>$product,'parent'=>$parent,'user'=>$user,'pImg'=>$pImg]);
    }

    public function update(ProductEditRequest $request, $id)
    {
        if (!\Entrust::can('edit-product')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $product = Product::findOrFail($id);
        if (Input::hasFile('avatar')){
            $avatar = $request->file('avatar')->getClientOriginalName();
            $checkImg = Product::where('avatar','like',$avatar)->get()->toArray();
            if ($checkImg != null){
                Session::flash('danger','Trùng tên ảnh avatar');
                return redirect()->back();
            }
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
            $ldate = date('Y-m-d H:i:s');
            $product->update_at = $ldate;
            if (Input::hasFile('images')){
                foreach (Input::file('images') as $file){
                    $pImages = new Images();
                    if (isset($file)){
                        $pImages->image_name = $file->getClientOriginalName();
                        $pImages->item_id = $proId;
                        $pImages->title = $proTitle;
                        $pImages->item_type = 1;
                        if ($pImages->image_name == $file->getClientOriginalName()){
                            $test = Images::where('image_name','like',$pImages->image_name)->where('item_type',1)->get()->toArray();
                            if ($test != null){
                                Session::flash('danger','Trùng tên ảnh sản phẩm nè');
                                return redirect()->back();
                            }
                        }
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
    public function listProductImages($id){
        $product = Product::findOrFail($id);
        $img = Images::select('id','image_name')->where('item_id',$product->id)->get()->toArray();
        echo "<pre>";
        print_r($img);
        echo "</pre>";
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
        $img = Images::findOrFail($request->id);
        if ($request->ajax()){
//            Images::destroy($request->id);
            $img->delete($request->id);
            File::delete(public_path('/images/product/image_product/'.$img->image_name));
            return response(['id'=>$request->id]);
        }
    }
    public function destroy(Request $request)
    {
        if (!\Entrust::can('delete-product')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $product = Product::findOrFail($request->id);
        if ($request->ajax()){
            File::delete(public_path('/images/product/avatar/'.$product->avatar));
            $product->delete($request->id);
            return response(['id'=>$request->id]);
        }
    }
}
