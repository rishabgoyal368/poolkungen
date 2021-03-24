<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//------------movie-listing-----------------
Route::get('/movie-list', 'Api\MovieController@index');
//------------movie-listing-----------------


Route::post('/register', 'ApiController@user_registration');
Route::post('/login', 'ApiController@user_login');
Route::post('/logout','ApiController@logout'); 
Route::post('/forgot-password','ApiController@forgot_password');
Route::post('/reset-password','ApiController@reset_password');
Route::post('/get-profile','ApiController@profile'); 
Route::post('/update-profile','ApiController@updateProfile'); 
