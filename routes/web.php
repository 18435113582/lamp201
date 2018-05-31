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

// Route::get('/', function () {
//     return view('welcome');
// });

//后台登录
Route::get('admin/login','admin\LoginController@login');
Route::post('admin/dologin','admin\LoginController@dologin');
Route::get('admin/loginout','admin\LoginController@loginout');

//后台控制




Route::group(['middleware'=>'login'],function(){
	
	Route::get('admin/index','admin\IndexController@index');
	Route::get('admin/pass','admin\LoginController@pass');
	Route::post('admin/changepass','admin\LoginController@changePass');
	Route::post('admin/ajax','admin\IndexController@userAjax');
	Route::resource('admin/user','admin\UserController');
	Route::get('admin/captcha','admin\IndexController@captcha');
});



Route::get('home/register','home\RegisterController@register');
Route::post('home/zhuce','home\RegisterController@zhuce');
Route::get('home/jihuo','home\RegisterController@jihuo');
Route::get('home/code','home\RegisterController@captcha');

Route::post('home/dologin','home\LoginController@dologin');
Route::post('home/yzm','home\LoginController@yzm');
//个人中心
Route::get('home/grzx','home\LoginController@grzx')->middleware('homeLogin');
Route::get('home/loginout','home\LoginController@loginout');
Route::get('home/login','home\LoginController@login');
Route::get('home/phone','home\LoginController@phone');
Route::get('home/changephone','home\LoginController@changephone');	
Route::get('home/email','home\LoginController@email');
Route::post('home/changeemail','home\LoginController@changeemail');
Route::post('home/ajax','home\LoginController@userAjax');


//前台控制
Route::group([],function(){

	Route::get('home/pass','home\LoginController@pass');
	Route::post('home/changepass','home\LoginController@changePass');	
	Route::get('home/mail','home\IndexController@mail');
	// Route::get('home/index','home\IndexController@index');
	

});

































































Route::group(['middleware'=>'login'],function(){



	//体验店管理
	Route::resource('admin/StoreIndex','admin\StoreIndexController');
	//服务管理
	Route::get('admin/ServerIndex','admin\ServerController@index');
	Route::get('admin/ServerEdit/{id}','admin\ServerController@edit1');
	Route::get('admin/ServerEditt/{id}','admin\ServerController@edit2');
	Route::get('admin/ServerEdittt/{id}','admin\ServerController@edit3');
	Route::get('admin/ServerEditttt/{id}','admin\ServerController@edit4');

	//价格管理
	Route::get('admin/priceIndex','admin\ServerController@priceIndex');
	//添加价格
	Route::get('admin/priceAdd','admin\ServerController@priceAdd');
	Route::post('admin/addPrice','admin\ModelController@oneAdd');
	Route::get('admin/priceEdit/{id}','admin\ModelController@priceEdit');
	Route::post('admin/priceUpdate/{id}','admin\ModelController@priceUpdate');
	Route::get('admin/priceDelete/{id}','admin\ModelController@priceDelete');

});



















































































































































































































 










Route::group([],function(){

	//服务首页
	Route::get('home/server','home\ServerController@server');

	//寄修服务
	Route::get('home/ServerIndex','home\ServerController@index')->middleware('homeLogin');
	Route::get('home/breakdown','home\ServerController@breakdown');
	Route::post('home/breakajax','home\ServerController@breakajax');
	Route::post('home/create','home\ServerController@create');

	//体验店查询
	Route::get('home/stIndex','home\StoreController@index');
	Route::get('home/StoreIndex','home\StoreController@store');
	Route::get('home/StoreAjax','home\StoreController@stajax');

	//lipeng   start
	Route::get('/','home\GoodsController@first');
	Route::resource('admin/cate','admin\CateController')->middleware('login');
	Route::resource('admin/goods','admin\GoodsController')->middleware('login');
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

	Route::get('img/create','admin\ImgController@create')->middleware('login');
	Route::post('img/save','admin\ImgController@save')->middleware('login');
	Route::get('img/index','admin\ImgController@index')->middleware('login');
	Route::get('img/edit/{id}','admin\ImgController@edit')->middleware('login');
	Route::post('img/update/{id}','admin\ImgController@update')->middleware('login');
	Route::post('img/delete/{id}','admin\ImgController@delete')->middleware('login');

	Route::get('admin/orders','admin\OrdersController@index')->middleware('login');
	Route::get('admin/orders/det/{id}','admin\OrdersController@det')->middleware('login');
	Route::get('admin/orders/edit/{id}','admin\OrdersController@edit')->middleware('login');
	Route::post('admin/orders/update/{id}','admin\OrdersController@update')->middleware('login');
	Route::get('/admin/orders/go','admin\OrdersController@go')->middleware('login');
	
	Route::get('/goods/down/{id}','admin\GoodsController@down')->middleware('login');
	Route::get('/goods/up/{id}','admin\GoodsController@up')->middleware('login');
	Route::get('/order/status','home\OrdersController@qrsh');
	Route::get('/order/cancel','home\OrdersController@qxdd');


	//维修进度查询
	Route::get('home/repair','home\ServerController@repair');
	Route::get('home/query','home\ServerController@query');
	Route::get('home/both','home\ServerController@both');

	//验证码
	Route::get('home/verifx','home\VerifyController@captcha');

	// 配件价格
	Route::get('home/price','home\ServerController@price');

	Route::get('home/priceAjax','admin\ModelController@priceAjax');

});




