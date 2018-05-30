<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;  
use Session;
use Mail;
use DB;
use Hash;
use Config;


class RegisterController extends Controller
{
    //
    public function register()
    {
    	return view('home.register',['title'=>'前台的注册页面']);
    }


    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性  
        $builder = new CaptchaBuilder;  
        //可以设置图片宽高及字体  
        $builder->build($width = 100, $height = 34, $font = null);  
        //获取验证码的内容  
        $phrase = $builder->getPhrase();  
        //把内容存入session  
        Session::flash('code', $phrase);  


        //生成图片  
        header("Cache-Control: no-cache, must-revalidate");  
        header('Content-Type: image/jpeg');  
        $builder->output();
    }


    public function zhuce(Request $request)
    {
    	//表单验证
        $this->validate($request, [
            'username' => 'required|unique:user|regex:/^\w{6,12}$/',
            'password' => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:password',
            'email'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^1[345678]\d{9}$/'
            // 'code'=>'code'
            
            
            
                
        ],[
            'username.required'=>"用户名不能为空",
            'username.regex'=>'用户名格式不正确',
            'username.unique:user'=>'用户名已存在',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一致',
            'email.required'=>'邮箱不能为空',  
            'email.email'=>'邮箱格式不正确',
            'phone.regex'=>'手机号码格式不正确',
            'phone.required'=>'手机号不能为空'
            // 'code.code'=>'验证码不一致'

                     
            
            
        ]);
        

        //
        $res = $request->except('code','_token');

        if(Session::get('code') != $request->input('code')){

            return back()->with('msg','验证码不一致!');
        }

        $res['profile'] = '/uploads/3546_1526121763.jpg';

        $res['status'] = 0;

        $res['appkey'] = str_random(60);
        
    	$res['password'] = Hash::make($request->input('password'));

        $data = DB::table('user')->insertGetId($res);

        if($data){


            Mail::send('home.email.reminder', ['id'=>$data,'appkey'=>$res['appkey']], function ($m) use ($res) {

                $m->from(env('MAIL_USERNAME'), Config::get('app.sitename'));

                $m->to($res['email'], $res['username'])->subject(Config::get('app.sitename').'-今晚有空么??');
            });

            //提示信息的页面
            return view('home.email.message');
        } else {

            return back();
        }
    }



    public function jihuo(Request $request)
    {

        //对比appkey

         $data = DB::table('user')->where('id',$request->input('id'))->first();

        if($data->appkey != $request->input('appkey')){

            rebort(404);
        }

        $da['status'] = 1;

        $res = DB::table('user')->where('id',$request->input('id'))->update($da);

        if($res){

            return redirect('/home/login');

        } else {

            return back();
        }
    }



}
