<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('admin.login.login',['title'=>'后台的登录页面']);
    }


    public function dologin(Request $request)
    {
    	$res = $request->input('username');

    	$data = DB::table('user')->where('username',$res)->first();

    	

    	if(!$data){

    		return back()->with('err','账号或者密码错误!');
    	}

    	$pass = $request->input('password');

    	//哈希加密进行检测
    	if(!Hash::check($pass,$data->password)){

    		return back()->with('err','账号或者密码错误!');
    	}

    	//密码解答
    	/*if($pass != $pas){

    		return back()->with('err','用户名或者密码错误!!!');

    	}*/


    	session(['uid'=>$data->id]);
        session(['adminFlag'=>true,'adminInfo'=>$data]);

    	return redirect('admin/index');
    }

     public function loginout(Request $request)
    {
    	//清除session
    	// session(['uid'=>'']);

    	//删除session
    	$request->session()->forget('uid');

    	return redirect('admin/login');
    }


    public function pass()
    {
    	return view('admin.login.pass',['title'=>'修改密码']);
    }


    public function changePass(Request $request)
    {

    	//获取旧密码
    	$pass = $request->input('oldpass');

    	$res = DB::table('user')->where('id',session('uid'))->first();

    	//哈希
    	if(!Hash::check($pass,$res->password)){

    		return back()->with('msg','输入的旧密码错误');
    	}

    	$foo['password'] = Hash::make($request->input('password'));

    	$data = DB::table('user')->where('id',session('uid'))->update($foo);

    	if($data){

    		return redirect('admin/login');
    	}


    }


    public function userAjax(Request $request)
    {
        echo 123;
        $id = $request->input('id');

        $username['username'] = $request->input('username');

        $res = DB::table('user')->where('id',$id)->update($username);

        if($res){

            echo 1;
        } else {

            echo 0;
        }



    }


   
}
