<?php

namespace App\Http\Controllers\Admin;

use App\Cate;
use App\Http\Requests\CateAddRequest;
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
//        return view('admin/cates/form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function update(Request $request, $id)
    {
        $cate = Cate::find($id);
        $requestData = $request->all();
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
    public function destroy($id)
    {
        //
    }
}
