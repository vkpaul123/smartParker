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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//	to create the slots
Route::get('/createSlots', 'ParkingSlotController@createSlots');


//	to get latest values
Route::get('/home/parkingslot/getlatest', 'ParkingSlotController@getLatest')->name('get.latest.values');

//	to set values
Route::get('/values/{val1}/{val2}/{val3}/{val4}', 'ParkingSlotController@setLatest');
