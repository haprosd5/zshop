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

// Route::get('/', function () {
//     return view('welcome');
// });

/*index shop*/
<<<<<<< HEAD
Route::match(['get', 'post'], '/', 'IndexController@index');


/*admin*/
Route::namespace('Admin')->group(function () {
	/*login*/
	Route::match(['get', 'post'], '/admin/login', 'AdminController@login')->name('loginadmin');

	Route::middleware('auth')->group(function () {
		/*dashbroad*/
		Route::get('admin/dashbroad', 'AdminController@dashbroad');
		/*san pham*/
		Route::get('/admin/product/add', 'ProductController@create');
		Route::post('/admin/product/add', 'ProductController@store');
        Route::get('/admin/product/', 'ProductController@index');
	});
	
	/*logout*/
	Route::get('admin/logout', 'AdminController@logout');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::match(['get', 'post'], '', 'IndexController');
>>>>>>> 234047ed7b9ea2b64155870b21eea11d8342b2dd
