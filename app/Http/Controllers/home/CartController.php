<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CartController extends Controller
{
    public function create(Request $request)
    {
    	
    	$gid = $request->input('gid');
    	$goods = DB::table('shop_goods')->where('gid',$gid)->first();
    	$show = DB::table('goods_show')->where('gid',$gid)->first();
    	$goods->cnt = $request->input('cnt');
    	$goods->show = $show->gpic;
    	session(['cart.'.$gid => $goods]);

    }

 	public function index(Request $request)
 	{

 		$cart = session('cart');
 		
 		
 		return view('home.cart.index',['cart'=>$cart]);
 	}
 	public function delete(Request $request)
 	{

 		$gid = $request->input('gid');
 		session()->forget("cart.$gid");
 		$cart = session('cart');
 		$arr =count($cart);

    	echo $arr;
 	}

 	public function cnt(Request $request)
 	{
 		$gid = $request->input('gid');
 		
 		session()->forget("cart.$gid");
 		$goods = DB::table('shop_goods')->where('gid',$gid)->first();
    	$show = DB::table('goods_show')->where('gid',$gid)->first();
    	$goods->cnt = $request->input('cnt');
    	$goods->show = $show->gpic;
    	session(['cart.'.$gid => $goods]);
 		
 	}

    
}
