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
Route::get('category-product/{slug}', 'HomeController@categoryProduct')->name('category.product');
Route::get('product-details/{slug}', 'HomeController@productDetails')->name('product.details');
Route::get('contact-us', 'HomeController@contactUs')->name('contact.us');
Route::post('contact-store', 'HomeController@contactStore')->name('contact.store');

//order
Route::get('order', 'HomeController@order')->name('order');
Route::post('order-store', 'HomeController@orderStore')->name('order.store');

Route::get('login', 'Auth\LoginController@loginForm')->name('login');
Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');

Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('category', 'Admin\CategoryController');
    Route::get('product-list', 'Admin\ProductController@index')->name('product.list');
    Route::resource('product', 'Admin\ProductController');
    Route::get('slider-list', 'Admin\SliderController@index')->name('slider.list');
    Route::resource('slider', 'Admin\SliderController');

    //order route
    Route::get('order-list', 'Admin\OrderController@orderList')->name('order.list');
    Route::get('contact-list', 'Admin\OrderController@contactList')->name('contact.list');

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});


