<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrdersController extends Controller
{

	public function index()
	{

		$orders = DB::table('shop_orders')->where('uid',session('homeInfo')->id)->orderBy('otime', 'desc')->get();
		$sum = null;
		foreach($orders as $k=>$v)
		{
			$info = DB::table('orders_det')->where('oid',$v->oid)->get();
			$v->det = $info;
			foreach($info as $kk=>$vv)
	    	{
	    		$sum +=  intval($vv->price)*$vv->cnt;

	    	}
		}

		return view('home.orders.index',['orders'=>$orders,'sum'=>$sum]);
	}




    public function create()
    {
    	$carts = session('cart');
    	 
    	if(!$carts){ 
    		$carts = [];
    	 }
    	$sum = null;
        $cnt= null;
    	foreach($carts as $k=>$v)
    	{
            $sum +=  intval($v->price)*$v->cnt;
    		$cnt +=  $v->cnt;


    	}
    	
    	return view('home.orders.create',['carts'=>$carts,'sum'=>$sum,'cnt'=>$cnt]);
    }

    public function save(Request $request)
    {

         $this->validate($request, [
           'rec' => 'required',
            'tel'=>'required|regex:/^1[345678]\d{9}$/',
            'addr'=>'required',
            
              
        ],[
           'rec.required'=>"收货人不能为空",
            'rec.regex'=>'收货人格式不正确',
            'tel.required'=>'收货人电话不能为空',
            'tel.regex'=>'收货人电话格式不正确',
            'addr.required'=>'收货人地址不能为空',
            'fapiao.regex'=>'发票抬头格式不正确'
        ]);

    	$orders = $request->except('_token');
        
        $orders['uid'] = session('homeInfo')->id;
    	$orders['oid'] = date('YmdHis').mt_rand(1000,9999);
    	$orders['otime'] = time();
    	$orders['sum'] = null;
    	$orders['cnt'] = null;
    	$carts = session('cart');
    	
    	foreach($carts as $k=>$v)
    	{
    		$orders['sum'] +=  intval($v->price)*$v->cnt;
    		$orders['cnt'] +=  $v->cnt;

    	}
    	$orders_det = [];
    	foreach($carts as $k=>$v)
    	{
    		$orders_det['oid'] = $orders['oid'];
    		$orders_det['gid'] = $v->gid;
    		$orders_det['gname'] = $v->gname;
    		$orders_det['color'] = $v->color;
    		$orders_det['config'] = $v->config;
    		$orders_det['cnt'] = $v->cnt;
    		$orders_det['price'] = $v->price;
            $orders_det['show'] = $v->show;
            $orders_det['zp'] = $v->zp;
    		$orders_det['zname'] = $v->zname;
    		DB::table('orders_det')->insert($orders_det);
    	}
    	DB::table('shop_orders')->insert($orders);
    	session()->forget('cart');
    	$orders_det = DB::table('orders_det')->where('oid',$orders['oid'])->get();
    	
    	
    		
    	return view('home.orders.finish',['orders'=>$orders,'orders_det'=>$orders_det]);
    	
    }

    public function det($id)
    {

    	$order = DB::table('shop_orders')->where('oid',$id)->first();
    	$order_det = DB::table('orders_det')->where('oid',$id)->get();
    	
    	return view('home.orders.det',['order'=>$order,'order_det'=>$order_det]);
    }

    public function qrsh(Request $request)
    {

        $oid = $request->input('oid');

        $status['status'] = 3;

        $data = DB::table('shop_orders')->where('oid',$oid)->update($status);

        if($data){

            echo 1;
        }

    }
        public function qxdd(Request $request)
    {

        $oid = $request->input('oid');

        $status['status'] = 4;

        $data = DB::table('shop_orders')->where('oid',$oid)->update($status);

        if($data){

            echo 1;
        }

    }
}
