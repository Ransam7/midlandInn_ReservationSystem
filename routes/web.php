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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/dashboard', 'SuperAdminController@dashboard');

Route::resource('userAccount', 'UserAccountController');

Route::get('/home', 'HomeController@index');

Route::get('/super-admin','SampleController@getIndex')->middleware('role');

Route::get('/gago','SampleController@getGago');

Route::resource('user', 'UserSampleController');
Route::get('api/user', 'UserAccountController@apiUser')->name('api.user');

Route::get('test','PageController@test');