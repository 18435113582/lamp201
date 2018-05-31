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




//在第200行开始 






















































































































































































//于林甲
//社区后台
Route::group(['namespace'=>'admin','prefix'=>'admin'],function(){

	// Route::resource('/arts','ArticleController'); //    '/admin'
	//后台文章列表 /admin/arts
	Route::resource('arts','ArticleController');    //   '/admin/arts/create' 
	Route::get('arts/create','ArticleController@create');  //'发布文章'
	Route::post('arts/store','ArticleController@store');   //接收数据
	
	Route::get('arts/delete','ArticleController@delete');
	// return view('admin.addarticle',['title'=>'添加文章']);

	Route::post('com','CommentController@store')->name('getajax');
	Route::get('com/3','CommentController@show')->name('dollarget');
	Route::resource('/comments','CommentsController');
});


//社区前台
	Route::group(['namespace'=>'home','prefix'=>'home'],function(){
	Route::get('arts/index','ArticleController@Index');     //文章列表
	Route::get('arts/create','ArticleController@create');
	Route::get('arts/show','ArticleController@show');		//展示文章	
	Route::get('arts/pub','ArticleController@publish');  	//发布文章
	Route::post('arts/store','ArticleController@store');	//接收文章	

	//可以利用route()函数返回路由别名对应的路由
	// Route::get('art',function(){
		// return route('art');
	// })->name('art');

	//请求方法	请求URI			对应的控制器方法	代表的意义
	// GET		/article			index			索引/列表
	// GET		/article/create		create			创建（显示表单）
	// POST		/article			store			保存你创建的数据
	// GET		/article/{id}		show			显示对应id的内容
	// GET		/article/{id}/edit	edit			编辑（显示表单）
	// PUT/PATCH	/article/{id}	save			保存你编辑的数据
	// GET		/article/{id}		destroy			删除


	






});

	// 数据接口
	Route::get('home/layui','home\LayuiController@layui');
	//删除
	Route::get('arts/delete','home\LayuiController@delete');
	//后台详情
	Route::get('arts/detail','home\LayuiController@detail');
//友情链接管理
Route::group([],function(){
	Route::get('admin/link/index','LinkController@index');
	Route::get('admin/link/create','LinkController@create');
	Route::post('admin/link/store','LinkController@store');
	Route::get('admin/link/del/{id}','LinkController@del');
	Route::get('admin/link/edit/{id}','LinkController@edit');
	Route::post('admin/link/update','LinkController@update');


});












