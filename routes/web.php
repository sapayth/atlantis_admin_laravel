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

Route::get('/admin', function () {
    return view('admins.master');
});

// Route::get("/admin", "Admin\ProductController@index")->name('product.index');

Route::prefix('/admin/product')->name('products.')->group(function() {	
	Route::get("/", "Admin\ProductController@index")->name('index');
	Route::get("/create", "Admin\ProductController@create")->name('create');
	Route::post("/create", "Admin\ProductController@store")->name('store');
	Route::get("/edit/{id}", "Admin\ProductController@edit")->name('edit');
	Route::post("/update", "Admin\ProductController@update")->name('update');
	Route::delete("/delete/{id}", "Admin\ProductController@destroy")->name('delete');
});