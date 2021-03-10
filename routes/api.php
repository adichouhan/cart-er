<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Auth Endpoints
Route::post('login', 'Auth\ApiAuthController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => '\App\Http\Controllers', 'prefix'=>'admin', 'middleware' => 'auth:api' ], function() {
    Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix'=>'products', 'middleware' => 'auth:api' ], function() {
        Route::get('/', 'ProductController@getProductList');
        Route::post('/add', 'ProductController@create');
    });
    Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix'=>'category', 'middleware' => 'auth:api' ], function() {
        // Route::get('/', 'CategoryController@getProductList');
        Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
        Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
        Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
        Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
        Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
        Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');

    });
});
