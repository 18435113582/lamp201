<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrdersController extends Controller
{

	public function index()
	{
		$orders = DB::table('shop_orders') ->orderBy('otime', 'desc')->get();
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
    	// 
    	if(!$carts){ 
    		$carts = [];
    	 }
    	$sum = null;
    	foreach($carts as $k=>$v)
    	{
    		$sum +=  intval($v->price)*$v->cnt;

    	}
    	
    	return view('home.orders.create',['carts'=>$carts,'sum'=>$sum]);
    }

    public function save(Request $request)
    {

    	$orders = $request->except('_token');
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
    	session()->flush();
    	$orders_det = DB::table('orders_det')->where('oid',$orders['oid'])->get();
    	
    	
    		
    	return view('home.orders.finish',['orders'=>$orders,'orders_det'=>$orders_det]);
    	
    }

    public function det($id)
    {

    	$order = DB::table('shop_orders')->where('oid',$id)->first();
    	$order_det = DB::table('orders_det')->where('oid',$id)->get();
    	
    	return view('home.orders.det',['order'=>$order,'order_det'=>$order_det]);
    }
}
