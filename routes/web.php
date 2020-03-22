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
Route::get('/', 'FrontController@index');
Route::get('/news', 'FrontController@news');
Route::get('/news/{id}', 'FrontController@news_detail');
Route::get('/products', 'FrontController@products');
Route::get('/products/{id}', 'FrontController@product_detail');
Route::post('/product/cart_add', 'FrontController@add_cart');
Route::get('/product/cart_total', 'FrontController@total_cart');
Route::post('/product/cart_total/upload/{id}', 'FrontController@total_cart_upload');
Route::post('/product/cart_total/delete/{id}', 'FrontController@total_cart_delete');
Route::get('/product/cart_checkout', 'FrontController@cart_checkout');

Route::get('/ecpay/notify', 'FrontController@sendOrder');



Route::get('/contact', 'FrontController@contact');
Route::post('/contact', 'FrontController@contact_form');


Route::get('/stock', 'PythonController@stock');
Route::post('/stock_store', 'PythonController@stock_store');

Route::get('/bband', 'PythonController@bband'); //布林通道


//發財通道
Route::get('/BBands', 'PythonController@BBands');



Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'home'], function () {
    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => 'news'], function () {
        Route::get('/', 'NewsController@index');
        Route::get('/create', 'NewsController@create');
        Route::post('/store', 'NewsController@store');
        Route::get('/edit/{id}', 'NewsController@edit');
        Route::post('/update/{id}', 'NewsController@update');
        Route::post('/delete/{id}', 'NewsController@delete');
        Route::post('/ajax_delete_news_imgs', 'NewsController@ajax_delete_news_imgs');
        Route::post('/ajax_sort_news_imgs', 'NewsController@ajax_sort_news_imgs');
    });
    Route::resources([
        'product' => 'ProductController',
        'productTypes' => 'ProductTypeController',
        'contact' => 'ContactController'
    ]);

    Route::post('/upload/ajax_upload_img', 'UploadController@ajax_upload_img');
    Route::post('/upload/ajax_delete_img', 'UploadController@ajax_delete_img');
});
