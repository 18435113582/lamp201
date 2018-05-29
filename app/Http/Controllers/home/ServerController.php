<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Ucpaas;
use DB;

class ServerController extends Controller
{
    //
    public function index()
    {

    	return view('home.ServerIndex.ServerIndex',['title'=>'预约维修']);

    }

    public function server()
    {

        return view('home.serverIndex.server',['title'=>'oppo手机服务']);
    }

    public function breakdown(Request $req)
    {

    	$data = $req->except('_token','callback');

    	// $_SESSION['break'] = $data;

    	session(['break'=>$data]);

    	// $value = Session::get('break');

    	// dd($value);

    	return view('home.ServerIndex.ServerBreak',['title'=>'填写维修页']);
    }

    public function breakajax()
    {

		$options['accountsid']=env('YZM_ACCOUNTSID');
		$options['token']=env('YZM_TOKEN');

		//初始化 $options必填
		$ucpass = new Ucpaas($options);

		//开发者账号信息查询默认为json或xml

		$ucpass->getDevinfo('xml');

		$code = rand(111111,999999);

		$toNumber = $_POST['phone'];

        // var_dump($toNumber);

		// $_SESSION['code'] = $code;
		session(['code'=>$code]);

		$appId = env('YZM_APPID');

		// $to = "13911373063";
		$templateId = "327177";
		$param=$code;

		$ucpass->templateSMS($appId,$toNumber,$templateId,$param);

		echo $code;

    }

    public function create(Request $req)
    {

    	$brr = $req->post('bcode');

    	if(session('code') != $brr){

    		return back()->with('yzm','验证码不正确');

    	}
    	//  else {

    	// 	return redirect('/home/breakdown');

    	// }
    	$arr = $req->except('_token','bcode');

    	// dd($arr);
    	$value = Session::get('break');

    	// dd($value);

    	$arr['IMEI'] = $value['IMEI'];
    	$arr['btype'] = $value['btype'];
    	//购买时间
    	$arr['btime'] = $value['btime'];
    	$arr['bstatus'] = $value['bstatus'];
    	$arr['bdescription'] = implode($value['inp'],'##');
    	//预约时间
    	$arr['bbtime'] = time();
    	// dd($arr);

    	$crr = DB::table('breakdown')->insert($arr);
    	// dd($crr);
    	if($crr){
			return view('home.ServerIndex.ServerSuccess',['title'=>'添加成功']);
    	} else {
    		return back();
    	}
    	
    }


    public function repair()
    {


        return view('home.repairIndex.repairQuery',['title'=>'维修进度查询']);
    }

    public function query()
    {
        return view('home.repairIndex.repairInquery',['title'=>'维修进度查询']);
    }

    // public function find()
    // {   

    //     return view('home.repairIndex.repairFind',['title'=>'维修进度查询']);

    // }

    public function both(Request $req)
    {

        $both = $req->except('_token');

        // dd($both);
        // var_dump(session('coder'));

        if($both['rcode'] != session('code')){

            return back()->with('cod','验证码不正确');
        }

        if( count($both['rphone']) == 11){

            $hrr = DB::table('breakdown')->where('bphone',$both['rphone'])->first();

            if(!$hrr){

                return redirect('/home/query');
            } else {

                return view('home.repairIndex.repairFind',['hrr'=>$hrr,'title'=>'维修进度查询']);
            }

        }

        

        // dd($hrr);

        

    }

    public function price()
    {
        $prr = DB::table('price_name')->get();
    
        return view('home.PriceIndex.price',['title'=>'维修价格查询','prr'=>$prr]);

    }



}
