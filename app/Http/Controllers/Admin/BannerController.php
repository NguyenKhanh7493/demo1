<?php

namespace App\Http\Controllers\Admin;
use App\Banner;
use App\Http\Requests\BannerAddRequest;
use App\Http\Requests\BannerEditRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File,Session;
use DateTime;
class BannerController extends Controller
{
    private $file = 'public/images/banner';
    public function index()
    {
        $list = Banner::all();
        return view('admin/banner/list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/banner/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerAddRequest $request)
    {
        if (Input::hasFile('name')){
            $avatar = $request->file('name')->getClientOriginalName();
            $path_file = ("public/images/banner/{$avatar}");
            if (file_exists($path_file)){
                Session::flash('danger','trùng file ảnh');
                return redirect()->back();
            }
            $request->file('name')->move($this->file,$avatar);
        }else{
            Session::flash('danger','Upload ảnh không thành công');
        }
        $requestData = $request->all();
        $requestData['name'] = $avatar;
        if (!isset($requestData['status'])){
            $requestData['status'] = 0;
        }
        if (!isset($requestData['banner_center'])){
            $requestData['banner_center'] = 0;
        }
        if (!isset($requestData['banner_right'])){
            $requestData['banner_right'] = 0;
        }
        if (!isset($requestData['banner_bottom'])){
            $requestData['banner_bottom'] = 0;
        }
        $banner = Banner::create($requestData);
        if ($banner){
            $banner = new  DateTime();
            Session::flash('success','Thêm banner thành công');
            return redirect()->route('bannerEdit',$banner->id);
        }else{
            Session::flash('danger','Thêm banner thất bại');
            return redirect()->route('bannerCreate');
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
        $banner = Banner::findOrFail($id);
        return view('admin/banner/form',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerEditRequest $request, $id)
    {
        $banner = Banner::find($id);
        if (Input::hasFile('name')){
            $avatar = $request->file('name')->getClientOriginalName();
            $checkImg = Banner::where('name','like',$avatar)->get()->toArray();
            if ($checkImg != null){
                Session::flash('danger','Banner đã tồn tại');
                return redirect()->back();
            }
            $request->file('name')->move($this->file,$avatar);
            $proImage = ("public/images/banner/{$banner->name}");
            if (File::exists($proImage)) {
                File::delete($proImage);
            }
        }else{
            $avatar = $banner->name;
        }
        $requestData = $request->all();
        $requestData['name'] = $avatar;
        if (!isset($requestData['status'])){
            $requestData['status'] = 0;
        }
        if (!isset($requestData['banner_center'])){
            $requestData['banner_center'] = 0;
        }
        if (!isset($requestData['banner_right'])){
            $requestData['banner_right'] = 0;
        }
        if (!isset($requestData['banner_bottom'])){
            $requestData['banner_bottom'] = 0;
        }
        if ($banner->update($requestData)){
            Session::flash('success','Sửa banner thành công');
            return redirect()->route('bannerEdit',$banner->id);
        }else{
            Session::flash('danger','Sửa banner thất bại');
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
        $img = Banner::findOrFail($request->id);
        if ($request->ajax()){
            $img->delete($request->id);
            File::delete(public_path('/images/banner/'.$img->name));
            return response(['id'=>$request->id]);
        }
    }
}
