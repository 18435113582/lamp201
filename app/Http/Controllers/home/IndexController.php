<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class IndexController extends Controller
{
    //
    public function index()
    {
    	return view('home.index',['title'=>'前台首页']);
    }



    public function mail()
    {

    	
    	//home.email.reminder  邮件的内容   

    	//['user' => $user]  传递的数据  往模板当中传递的数据

    	//subject('Your Reminder!');   邮件的主题


        Mail::send('home.email.reminder', [], function ($m) {

            $m->from('15203193136@163.com', '邯郸-老乡');

            $m->to('379733463@qq.com', '王少')->subject('最近忙什么呢  在哪工作呢?');
        });
    }
}
