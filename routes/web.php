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
        Route::get('/','Admin\UserController@index');
        Route::get('/create','Admin\UserController@create');
    });
});

Route::post('login','Auth\LoginController@login')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','Auth\LoginController@logout');

//Route::get('/insert-user','HomeController@insertUser');