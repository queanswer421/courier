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
// Route::get('/courier', 'CourierController@index');
// Route::get('/couriers', 'CourierController@showAll');
// Route::get('courier/create', 'CourierController@create')->name('couriers.create');

Route::get('couriers', 'CourierController@index')->name('couriers.index');
Route::get('couriers/create', 'CourierController@create')->name('couriers.create');
Route::get('couriers/search', 'CourierController@search')->name('couriers.search');
Route::get('couriers/{question}', 'CourierController@show')->name('couriers.show');
Route::post('couriers', 'CourierController@store')->name('couriers.store');

//#############################################
Route::get('shipments', 'ShipmentController@index')->name('shipments.index');
Route::get('shipments/create', 'ShipmentController@create')->name('shipments.create');
Route::post('shipments', 'ShipmentController@store')->name('shipments.store');
Route::get('shipments/{que}', 'ShipmentController@show')->name('shipments.show');