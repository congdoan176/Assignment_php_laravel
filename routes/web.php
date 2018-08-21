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

Route::get('/xe', function () {
    return view('layout.master');
});
Route::resource('xe/product','ProductController');
Route::resource('xe/category','CategoryController');