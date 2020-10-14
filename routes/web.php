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

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('{path}', function () {
    return view('admin.admin');
})->where('path', '(.*)');


//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/admin', function () {
//    return view('admin.admin');
//});
//
//
//
//Route::group(['namespace' => '\App\Http\Controllers' ], function() {
//    Route::get('/product_list', 'ProductController@getIndex');
//});
//
////Route::group(['namespace' => '\App\Http\Controllers' ], function() {
////
////    Route::get('/product_list', 'ProductController@getIndex');
////
////
////});
//
//Route::group(['namespace' => '\App\Http\Controllers\Admin' ], function() {
//
//    Route::post('/add/product', 'ProductController@getStoredProduct');
//    Route::get('admin/product_list', 'ProductController@getProductList');
//    Route::get('admin/create_product', 'ProductController@getCreateProduct');
//    Route::get('admin/get/product_list', 'ProductController@getIndex');
//
//});
//
