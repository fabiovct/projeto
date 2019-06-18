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

Route::prefix('admin')->group(function () {
    Route::get('restaurants', 'Admin\\RestaurantController@index')->name('restaurants.index');
    Route::get('restaurants/new', 'Admin\\RestaurantController@new')->name('restaurants.new');
    Route::post('restaurants/store', 'Admin\\RestaurantController@store')->name('restaurants.store');
    Route::get('restaurants/edit/{restaurant}', 'Admin\\RestaurantController@edit')->name('restaurants.edit');
    Route::post('restaurants/update/{id}', 'Admin\\RestaurantController@update')->name('restaurants.update');
});
