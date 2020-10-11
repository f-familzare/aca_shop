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

Auth::routes();


// Site Routes
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@index')->name('home');

    Route::get('category/{category}', 'CategoryController@show')->name('site.category');

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'ProductController@index')->name('site.product');
        Route::get('/{product}', 'ProductController@show')->name('site.product.show');
        Route::get('/special', 'ProductController@special')->name('site.product.special');
    });
    //Cart Routes
    Route::group(['prefix' => 'cart','middleware'=>'auth'], function () {
        Route::get('/','CartController@index')->name('cart');
        Route::post('/store','CartController@store')->name('cart.store');

    });

});

// User Routes
Route::group(['namespace' => 'User', 'prefix' => 'user', ['middleware' => 'auth', 'isVerified', 'user']], function () {
    Route::get('/', 'MemberController@index')->name('user');
});

// Admin Routes
Route::group(['namespace' => 'Panel', 'prefix' => 'admin', 'middleware' => ['auth', 'isVerified', 'user'
]], function () {
    Route::get('/', 'PanelController@index')->name('panel');
    Route::get('/search', 'PanelController@search')->name('search');
    Route::resource('/user', 'UserController');
    Route::resource('/account', 'AccountController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');
    Route::resource('/role', 'RoleController');
    Route::resource('/permission', 'PermissionController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/filter', 'FilterController');


//    Route::resource('/gallery','GalleryController')->except(['show', 'edit']);;
    Route::post('/gallery/upload', 'GalleryController@upload')->name('gallery.upload');
    Route::get('/gallery/{product_id}', 'GalleryController@gallery')->name('product.gallery');

});

//Laravel Socialite
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

// Optional Routes
Route::get('/country', 'OptionalController@country')->name('country');
Route::get('/state/{country_id}', 'OptionalController@state')->name('state');
Route::get('/city/{state_id}', 'OptionalController@city')->name('city');
Route::post('/search', 'OptionalController@search')->name('search');

