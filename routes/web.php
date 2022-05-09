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

Route::get('/', 'HomeController@home')->name('home');
Route::get('category/product/{slug}', 'HomeController@categoryProduct')->name('category.product');

Route::get('login', 'Auth\LoginController@loginForm')->name('login');
Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');

Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('product', 'Admin\ProductController');
    Route::resource('slider', 'Admin\SliderController');

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});


