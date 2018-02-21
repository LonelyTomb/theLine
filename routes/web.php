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

Route::get('/', 'SiteController@index')->name('home');
Route::get('/shop', 'SiteController@shop')->name('shop');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/faqs', 'SiteController@faqs')->name('faqs');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::get('/adminSite', 'SiteController@adminSite')->name('adminSite');

Auth::routes();

Route::prefix('admin')->group(function () {

	Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

//	Reset Admin Password
	Route::prefix('password')->group(function () {
		Route::get('/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');   // step 1
		Route::post('/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');    // step 2
		Route::get('/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');   // step 3
		Route::post('/reset', 'Auth\AdminResetPasswordController@reset');   // step 4
	});


});
Route::prefix('user')->group(function () {
	//	Reset Password
	Route::prefix('password')->group(function () {
		Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');   // step 1
		Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');    // step 2
		Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');   // step 3
		Route::post('/reset', 'Auth\ResetPasswordController@reset');    // step 4
	});
});

Route::prefix('collection')->group(function () {

});
Route::prefix('product')->group(function () {
});

Route::resource('product', 'ProductController');
Route::resource('collection', 'CollectionController');
Route::resource('user', 'UserController');
Route::resource('admin', 'AdminController');