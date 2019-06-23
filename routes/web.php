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

Route::group(['middleware'=>['auth']], function(){
    Route::prefix('admin')->namespace('Admin')->group(function (){
    
    Route::prefix('restaurants')->group(function(){
    Route::get('/', 'RestaurantController@index')->name('restaurants.index');
    Route::get('/new', 'RestaurantController@new')->name('restaurants.new');
    Route::post('/store', 'RestaurantController@store')->name('restaurants.store');
    Route::get('/edit/{restaurant}', 'RestaurantController@edit')->name('restaurants.edit');
    Route::post('/update/{id}', 'RestaurantController@update')->name('restaurants.update');
    Route::get('/remove/{id}', 'RestaurantController@delete')->name('restaurants.delete');
        });

        Route::prefix('users')->group(function(){
            Route::get('/', 'UserController@index')->name('users.index');
            Route::get('/new', 'UserController@new')->name('users.new');
            Route::post('/store', 'UserController@store')->name('users.store');
            Route::get('/edit/{user}', 'UserController@edit')->name('users.edit');
            Route::post('/update/{id}', 'UserController@update')->name('users.update');
            Route::get('/remove/{id}', 'UserController@delete')->name('users.delete');
                });

                Route::prefix('menu')->group(function(){
                    Route::get('/', 'MenuController@index')->name('menus.index');
                    Route::get('/new', 'MenuController@new')->name('menus.new');
                    Route::post('/store', 'MenuController@store')->name('menus.store');
                    Route::get('/edit/{menu}', 'MenuController@edit')->name('menus.edit');
                    Route::post('/update/{id}', 'MenuController@update')->name('menus.update');
                    Route::get('/remove/{id}', 'MenuController@delete')->name('menus.delete');
                        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('rel',function(){
    $restaurant = \App\Restaurant::find(1);
    print $restaurant->name;
    print'<br>';
    foreach($restaurant->menus as $m){
        print 'items caradapio:'.$m->name;
        print $m->price;
        print $m->restaurant_id;
    }
});