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

Route::get('command', function () {
    \Artisan::call('config:cache');
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
});


Route::get('/', 'HomeController@home')->name('home');
Route::get('category-product/{slug}', 'HomeController@categoryProduct')->name('category.product');
Route::get('product-details/{slug}', 'HomeController@productDetails')->name('product.details');
Route::get('contact-us', 'HomeController@contactUs')->name('contact.us');
Route::post('contact-store', 'HomeController@contactStore')->name('contact.store');

//order
Route::get('order', 'HomeController@order')->name('order');
Route::post('order-store', 'HomeController@orderStore')->name('order.store');

//cart controller
Route::post('cart-store', 'CartController@cartStore')->name('cart.store');
Route::get('cart-details', 'CartController@cartDetails')->name('cart.details');
Route::post('submit-order', 'CartController@orderSubmit')->name('submit.order');
Route::post('cart-update', 'CartController@cartUpdate')->name('cart.update');
Route::delete('cart-destroy/{id}', 'CartController@cartDestroy')->name('cart.destroy');

Route::get('login', 'Auth\LoginController@loginForm')->name('login');
Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');

Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('category', 'Admin\CategoryController');
    Route::get('product-list', 'Admin\ProductController@index')->name('products.list');
    //Route::post('product-store', 'Admin\ProductController@store')->name('products.store');
    Route::resource('products', 'Admin\ProductController');
    Route::get('slider-list', 'Admin\SliderController@index')->name('slider.list');
    Route::resource('slider', 'Admin\SliderController');

    //order route
    Route::get('order-list', 'Admin\OrderController@orderList')->name('order.list');
    Route::get('order-details/{id}', 'Admin\OrderController@orderDetails')->name('order.details');
    Route::get('contact-list', 'Admin\OrderController@contactList')->name('contact.list');

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});


