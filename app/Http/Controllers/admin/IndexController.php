<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use Cache;

use Gregwar\Captcha\CaptchaBuilder;  
use Session;  

class IndexController extends Controller
{
    //
    public function index(){

    	return view('admin.index',['title'=>'后台的首页']);

    }

    public function userAjax(Request $request)
    {
        $id = $request->input('id');

        $username['username'] = $request->input('username');

        $res = DB::table('user')->where('id',$id)->update($username);
        
        if($res){

            echo 1;
        } else {

            echo 0;
        }




    }

    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性  
        $builder = new CaptchaBuilder;  
        //可以设置图片宽高及字体  
        $builder->build($width = 120, $height = 50, $font = null);  
        //获取验证码的内容  
        $phrase = $builder->getPhrase();  
        //把内容存入session  
        // Session::flash('code', $phrase);  

        // Session::put('code',$phrase);


        // session(['code'=>$phrase]);


        // $request->session()->put('code',$pharse);


        //生成图片  
        header("Cache-Control: no-cache, must-revalidate");  
        header('Content-Type: image/jpeg');  
        $builder->output();
    }


     public function code()
    {
        
        $res = Cache::get('name');

        

        dump($res);

        
    }
}
