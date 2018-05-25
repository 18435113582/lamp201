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






































































	//体验店管理
	Route::resource('admin/StoreIndex','admin\StoreIndexController');
	//服务管理
	Route::get('admin/ServerIndex','admin\ServerController@index');
	Route::get('admin/ServerEdit/{id}','admin\ServerController@edit1');
	Route::get('admin/ServerEditt/{id}','admin\ServerController@edit2');
	Route::get('admin/ServerEdittt/{id}','admin\ServerController@edit3');
	Route::get('admin/ServerEditttt/{id}','admin\ServerController@edit4');
	
});



















































































































































































































 










Route::group([],function(){

	//寄修服务
	Route::get('home/ServerIndex','home\ServerController@index');
	Route::get('home/breakdown','home\ServerController@breakdown');
	Route::post('home/breakajax','home\ServerController@breakajax');
	Route::post('home/create','home\ServerController@create');

	//体验店查询
	Route::get('home/index','home\StoreController@index');
	Route::get('home/StoreIndex','home\StoreController@store');
	Route::get('home/StoreAjax','home\StoreController@stajax');

	//lipeng   start
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

	//lipeng end


	//维修进度查询
	Route::get('home/repair','home\ServerController@repair');
	Route::get('home/query','home\ServerController@query');
	Route::get('home/both','home\ServerController@both');

	//验证码
	Route::get('home/verifx','home\VerifyController@captcha');

});





