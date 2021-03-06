<?php

namespace App\Http\Controllers\Admin;

use App\Cate;
use App\Http\Requests\CateAddRequest;
use App\Http\Requests\CateEditRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $cate_product   = Cate::where(['type'=>3])->get();
//        $cate_post      = Cate::where(['type'=>2])->get();
//        $cate_page      = Cate::where(['type'=>1])->get();
        $cate = Cate::all();
        return view('admin/cates/list',compact('cate'));
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
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin/cates/form',['parent'=>$parent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CateAddRequest $request)
    {
        if (!\Entrust::can('create-user')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $requestData = $request->all();
        $requestData['alias'] = changeTitle($request->name);
        $cate_add = Cate::create($requestData);
        if ($cate_add){
            Session::flash('danger','Thêm menu thành công');
            return redirect()->route('editCate',$cate_add->id);
        }else{
            Session::flash('danger','Thất bại');
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
        if (!\Entrust::can('edit-user')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $cate = Cate::findOrFail($id);
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin/cates/form',['cate'=>$cate,'parent'=>$parent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CateEditRequest $request, $id)
    {
        if (!\Entrust::can('edit-user')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $cate = Cate::find($id);
        $requestData = $request->all();
//        echo "<pre>";
//        print_r($requestData);
//        echo "</pre>";die();
        if (!isset($requestData['status'])){
            $requestData['status'] = 0;
        }
        if (!isset($requestData['menu_top'])){
            $requestData['menu_top'] = 0;
        }
        if (!isset($requestData['menu_right'])){
            $requestData['menu_right'] = 0;
        }
        if (!isset($requestData['footer'])){
            $requestData['footer'] = 0;
        }

        if ($cate->update($requestData)){
            Session::flash('danger','Sửa thành công');
            return redirect()->route('editCate',$cate->id);
        }else{
            Session::flash('danger','Sửa không thành công');
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
        if (!\Entrust::can('delete-user')){
            Session::flash('danger','Bạn không có quyền này');
            return redirect('admin/error');
        }
        $cate = Cate::findOrFail($request->id);
        if ($request->ajax()){
//            Cate::destroy($request->id);
            $cate->delete($request->id);
            return response(['id'=>$request->id]);
        }
    }
}
