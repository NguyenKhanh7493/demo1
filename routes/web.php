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
        Route::delete('/delete','Admin\UserController@destroy');
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
        Route::get('/abc/{id}','Admin\ProductController@listProductImages');
        Route::post('/create','Admin\ProductController@store')->name('postPro');
        Route::get('/edit/{id}','Admin\ProductController@edit')->name('getProEdit');
        Route::patch('/edit/{id}','Admin\ProductController@update')->name('postProEdit');
        Route::delete('/delete','Admin\ProductController@delImg')->name('deleteImg');
        Route::delete('/deleteItem','Admin\ProductController@destroy');
    });
    Route::group(['prefix'=>'post'],function (){
        Route::get('/','Admin\PostController@index')->name('postList');
        Route::get('/create','Admin\PostController@create')->name('postCreate');
        Route::post('/create','Admin\PostController@store');
        Route::get('/edit/{id}','Admin\PostController@edit')->name('postEdit');
        Route::patch('/edit/{id}','Admin\PostController@update');
        Route::delete('/delete','Admin\PostController@delImgPost');
        Route::delete('/deletePost','Admin\PostController@destroy');
    });
    Route::group(['prefix'=>'banner'],function (){
        Route::get('/','Admin\BannerController@index')->name('bannerList');
        Route::get('/create','Admin\BannerController@create')->name('bannerCreate');
        Route::post('/create','Admin\BannerController@store');
         Route::get('/edit/{id}','Admin\BannerController@edit')->name('bannerEdit');
         Route::patch('/edit/{id}','Admin\BannerController@update');
        // Route::delete('/delete','Admin\PostController@delImgPost');
         Route::delete('/deleteBanner','Admin\BannerController@destroy');
    });
    Route::group(['prefix'=>'bill'],function (){
        Route::get('/','Admin\InvoiceDetailController@index')->name('billList');
        Route::get('/view/{id}','Admin\InvoiceDetailController@show')->name('billShow');
        Route::get('/update/{id}','Admin\InvoiceDetailController@edit')->name('billUpdate');
        Route::post('/update/{id}','Admin\InvoiceDetailController@update')->name('postBillUpdate');
        Route::get('/email-bill','Admin\InvoiceDetailController@getEmail')->name('getEmail');
        Route::post('/email-bill','Admin\InvoiceDetailController@postEmail')->name('postEmail');
    });
});

Route::post('login','Auth\LoginController@login')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','Auth\LoginController@logout');

Route::get('/','HomeController@index');
Route::get('/gioi-thieu','HomeController@about')->name('about');
Route::get('/lien-he','Home\ContactController@contact')->name('contact');
Route::post('/lien-he','Home\ContactController@post_contact')->name('PostContact');
Route::get('/chi-tiet/{alias}','Home\Product_detail@productDetail')->name('product_detail');
Route::get('/san-pham/{alias}','Home\Product_detail@productList')->name('product_list');
Route::get('/tin-tuc/{alias}','Home\Post_detail@postDetail')->name('post_detail');
Route::get('/tin-tuc','Home\Post_detail@postList')->name('post_list');
Route::get('/tim-kiem','Home\SearchController@searchProduct');
Route::get('/mua-san-pham/{id}/{name}','Home\CartController@addCart')->name('add_cart');
Route::get('/gio-hang','Home\CartController@listCart')->name('cart_index');
Route::get('/cap-nhat/{id}/{qty}','Home\CartController@updateCart')->name('cart_update');
Route::get('/xoa-san-pham/{id}','Home\CartController@delete')->name('cart_delete');
Route::get('/thanh-toan','Home\PaymentController@payment')->name('cart_payment');
Route::get('/chi-tiet-mua-hang','Home\PaymentController@get_invoice_detail')->name('get-invoice-detail');
Route::post('/chi-tiet-mua-hang','Home\PaymentController@post_invoice_detail')->name('post-invoice-detail');
Route::post('/nhan-email','HomeController@receive_email')->name('post_email');
//Route::get('/insert-user','HomeController@insertUser');