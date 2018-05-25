<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;  
use Session;

class VerifyController extends Controller
{
    //

	public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性  
        $builder = new CaptchaBuilder(4);  
        //可以设置图片宽高及字体  
        $builder->build($width = 120, $height = 44, $font = null);  
        //获取验证码的内容  
        $phrase = $builder->getPhrase();  


        //把内容存入session  
        // Session::flash('coder', $phrase);  

        // Session::put('code',$phrase);


        session(['code'=>$phrase]);


        // $request->session()->put('code',$pharse);


        //生成图片  
        header("Cache-Control: no-cache, must-revalidate");  
        header('Content-Type: image/jpeg');  
        $builder->output();
    }

}
