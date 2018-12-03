<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAddRequest;
use App\Permission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
//        echo "<pre>";
//        print_r($permission);
//        echo "</pre>";die();
        return view('admin/users/form',compact('permission'));
    }

    public function store(UserAddRequest $request)
    {
        if (!Auth::user()->hasRole('admin')){
            Session::flash('danger','Bạn không phải là admin');
            return redirect()->route('create_user');
        }
        //
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
        //
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
        //
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
