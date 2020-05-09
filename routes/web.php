<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*index shop*/
Route::match(['get', 'post'], '/', 'IndexController@index');
/*auth*/
Auth::routes();
/*admin*/
Route::namespace('Admin')->group(function () {
    /*login*/
    Route::match(['get', 'post'], '/admin/login', 'AdminController@login')->name('loginadmin');

    Route::middleware('auth')->group(function () {
        /*dashbroad*/
        Route::get('admin/dashbroad', 'AdminController@dashbroad');
        /*san pham*/
        /*		Route::get('/admin/product/add', 'ProductController@create');
                Route::post('/admin/product/add', 'ProductController@store');
                Route::get('/admin/product/', 'ProductController@index');*/
        Route::resource('/admin/product', 'ProductController');
    });

    /*logout*/
    Route::get('admin/logout', 'AdminController@logout');

});
