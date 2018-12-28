<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::get('/','Admin\AdminController@index')->name('admin');
    Route::get('error','HomeController@errors');

    Route::group(['prefix'=>'user'],function (){
        Route::get('/','Admin\UserController@index')->name('listUser');
        Route::get('/create','Admin\UserController@create')->name('create_user');
        Route::post('/create','Admin\UserController@store')->name('post_create');
        Route::get('/edit/{id}','Admin\UserController@edit')->name('editGet');
        Route::patch('edit/{id}',['as'=>'edit_post','uses'=>'Admin\UserController@update']);
        Route::delete('delete','Admin\UserController@destroy');
        Route::get('change-password/{id}','Admin\UserController@ShowChangePassword')->name('changerPass');
        Route::post('handle-change-password/{id}','Admin\UserController@postChangePassword')->name('postChange');
    });
    Route::group(['prefix'=>'cates'],function (){
        Route::get('/','admin\CateController@index')->name('listCate');
        Route::get('/create','admin\CateController@create')->name('createCate');
        Route::post('/create','admin\CateController@store')->name('postCreate');
        Route::get('/edit/{id}','admin\CateController@edit')->name('editCate');
        Route::patch('/edit/{id}','admin\CateController@update')->name('postupdate');
        Route::delete('/delete','admin\CateController@destroy');
    });
    Route::group(['prefix'=>'product'],function (){
        Route::get('/','Admin\ProductController@index')->name('listPro');
        Route::get('/create','Admin\ProductController@create')->name('proCreate');
        Route::post('/create','Admin\ProductController@store')->name('postPro');
    });
});

Route::post('login','Auth\LoginController@login')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','Auth\LoginController@logout');

//Route::get('/insert-user','HomeController@insertUser');