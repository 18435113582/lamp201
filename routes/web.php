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

























































































































































































































































































 










Route::group([],function(){

	Route::resource('admin/cate','admin\CateController');
	Route::resource('admin/goods','admin\GoodsController');
	Route::get('home/shop','home\GoodsController@index');
	Route::get('home/read/{id}','home\GoodsController@read');
	Route::get('cart/create','home\CartController@create');
	Route::get('cart/index','home\CartController@index');
	Route::get('cart/delete','home\CartController@delete');
	Route::get('cart/cnt','home\CartController@cnt');
	Route::get('order/create','home\OrdersController@create');
	Route::post('order/save','home\OrdersController@save');
	Route::get('order/index','home\OrdersController@index');
	Route::get('order/det/{id}','home\OrdersController@det');
	Route::get('img/create','admin\ImgController@create');
	Route::post('img/save','admin\ImgController@save');
	Route::get('img/index','admin\ImgController@index');
	Route::get('img/edit/{id}','admin\ImgController@edit');
	Route::post('img/update/{id}','admin\ImgController@update');
	Route::post('img/delete/{id}','admin\ImgController@delete');
	Route::get('admin/orders','admin\OrdersController@index');
	Route::get('admin/orders/det/{id}','admin\OrdersController@det');
	Route::get('admin/orders/edit/{id}','admin\OrdersController@edit');
	Route::post('admin/orders/update/{id}','admin\OrdersController@update');
	Route::get('/admin/orders/go','admin\OrdersController@go');
	Route::get('/goods/down','admin\GoodsController@down');
	Route::get('/goods/up','admin\GoodsController@up');

});





