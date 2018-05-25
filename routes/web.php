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
Route::get('home/grzx','home\LoginController@grzx');
Route::get('home/loginout','home\LoginController@loginout');
Route::get('home/login','home\LoginController@login');




//前台控制
Route::group([],function(){

	Route::get('home/pass','home\LoginController@pass');
	Route::post('home/changepass','home\LoginController@changePass');	
	Route::get('home/mail','home\IndexController@mail');
	Route::get('home/index','home\IndexController@index');
	

});
