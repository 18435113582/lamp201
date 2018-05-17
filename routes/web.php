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

//后台
Route::group([],function(){

	Route::get('admin/index','admin\IndexController@index');


});

//前台
Route::group([],function(){



});





































































//后台
Route::group([],function(){

	Route::resource('admin/StoreIndex','admin\StoreIndexController');

});

//前台
Route::group([],function(){

	Route::get('home/index','home\StoreController@index');
	Route::get('home/StoreIndex','home\StoreController@store');
	Route::get('home/StoreAjax','home\StoreController@stajax');

});



