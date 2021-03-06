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

Route::get('/', function () {
	return view('user.index');
});

Route::get('/faq', function () {
	return view('user.index');
});

Route::get('about-us', function () {
	return view('user.about-us');
});

Route::get('booking', function () {
	return view('user.booking');
});

Route::get('Design-pool', function () {
	return view('user.Design-pool');
});

Route::get('inspiration', function () {
	return view('user.inspiration');
});

Route::get('pool-expert', function () {
	return view('user.pool-expert');
});

Route::get('pool-shape', function () {
	return view('user.pool-shape');
});


Route::get('products', function () {
	return view('user.products');
});

Route::get('spabad', function () {
	return view('user.spabad');
});

Route::get('support', function () {
	return view('user.support');
});

// Route::match(['get','post'],'/','AuthController@login');
Route::match(['get','post'],'/admin','AuthController@login');
Route::match(['get','post'],'/admin/login','AuthController@login');
Route::match(['get','post'],'/forgot-password','AuthController@forgot_password');
Route::match(['get','post'],'/set-password/{security_code}/{user_id}','AuthController@set_password');
Route::match(['get','post'],'/logout','AuthController@logout');

Route::group(['prefix'=>'admin','middleware'=>'CheckAdminAuth'],function()
{
	//------Dahboard---------------------------------------------------------------------------
	Route::get('/home','Admin\AdminController@index');

	//------Dahboard---------------------------------------------------------------------------
	Route::match(['get','post'],'/reset-password','AuthController@reset_password');
    Route::match(['get','post'],'/my-profile','AuthController@my_profile');

	Route::get('/manage-inventory','Admin\InventoryController@list');
	Route::get('/edit-inventory/{id}','Admin\InventoryController@edit');
	Route::post('/save-inventory','Admin\InventoryController@edit');
	Route::post('/delete-image','Admin\InventoryController@deleteImage');
});


// Artisan Commands
Route::get('migrate', function() {
	\Artisan::call('migrate');
	dd('migrated');
});

Route::get('db-seed', function() {
	\Artisan::call('db:seed');
	dd('DB seed successful');
});