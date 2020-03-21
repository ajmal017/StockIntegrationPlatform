<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/basic_info', 'FrontController@basic_info');
Route::get('/news', 'FrontController@news');
Route::get('/history', 'FrontController@history');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
