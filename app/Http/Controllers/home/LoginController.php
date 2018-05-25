<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ucpaas;
use DB;
use Hash;

class LoginController extends Controller
{
    //

    public function login()
    {
    	return view('home.login',['title'=>'前台的登录页面']);

    }


    public function dologin(Request $request)
    {
    	$res = $request->input('username');

    	$data = DB::table('user')->where('username',$res)->first();

    	if(!$data){

    		 return back()->with('err','用户名或者密码错误!');
    	}

    	$pass = $request->input('password');

    	//哈希加密进行检测
    	if(!Hash::check($pass,$data->password)){

    		return back()->with('err','用户名或者密码错误!');
    	}
    	session(['uid'=>$data->id]);
    	return redirect('/home/index');
    }


    public function yzm()
    {
    	// require_once('/homes/lib/Ucpaas.class.php');
		//初始化必填
		$options['accountsid']=env('YZM_ACCOUNTSID');
		$options['token']=env('YZM_TOKEN');

		//初始化 $options必填
		$ucpass = new Ucpaas($options);

		//开发者账号信息查询默认为json或xml

		$ucpass->getDevinfo('xml');

		$code = rand(111111,999999);

		$toNumber = $_POST['number'];

		// $_SESSION['code'] = $code;
		session(['code'=>$code]);

		$appId = env('YZM_APPID');

		
		$templateId = "30047";
		$param=$code;

		$ucpass->templateSMS($appId,$toNumber,$templateId,$param);

		echo $code;
	
    }

    public function grzx()
    {
        return view('home.grzx',['title'=>'用户个人中心']);
    }







    public function loginout(Request $request)
    {

        $request->session()->forget('uid');

        return redirect('home/login');
    }



     public function pass()
    {
        return view('home.login.pass',['title'=>'修改密码']);
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

            return redirect('home/login');
        }

    }

   


 }  