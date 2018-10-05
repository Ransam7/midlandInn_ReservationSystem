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


Route::get('/shits', 'PageController@test');
Route::get('/', function () {
    return view('home');
});

Route::post('post-payment','PageController@postPayment');

Auth::routes();

Route::get('/dashboard', 'SuperAdminController@dashboard')->middleware('role');

Route::get('/reservationSteps', 'RoomReservationController@reservationSteps');

Route::get('/storeDates', 'RoomReservationController@storeDates');

Route::get('/searchAvailability', 'RoomReservationController@searchAvailability');

Route::get('/storeDatesAndRooms', 'RoomReservationController@storeDatesAndRooms');

// Route::get('/selectDates', 'SuperAdminController@select_dates');

Route::resource('userAccount', 'UserAccountController')->middleware('role:SuperAdmin');

Route::resource('manageRoom', 'ManageRoomController')->middleware('role:SuperAdmin');

Route::resource('manageRoomType', 'RoomTypeController')->middleware('role:SuperAdmin');

Route::resource('manageAmenity', 'AmenityController')->middleware('role:SuperAdmin');

Route::resource('roomReservation', 'RoomReservationController')->middleware('role');

Route::get('/dashboard', 'SuperAdminController@dashboard')->name('dashboard')->middleware('role');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('api/user', 'UserAccountController@apiUser')->name('api.user');

Route::get('api/room', 'ManageRoomController@apiRoom')->name('api.room');

Route::get('api/roomType', 'RoomTypeController@apiRoomType')->name('api.roomType');

Route::get('api/amenity', 'AmenityController@apiAmenity')->name('api.amenity');

Route::get('api/roomReservation', 'RoomReservationController@apiRoomReservation')->name('api.roomReservation');