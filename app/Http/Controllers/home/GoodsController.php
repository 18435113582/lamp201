<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoodsController extends Controller
{
    public function index()
    {

    	$res = DB::table('shop_cates')->where('pid',1)->get();
    	foreach($res as $k=>$v)
    	{
    		$info = DB::table('shop_goods')->where('cid',$v->cid)->get();

    		$v->info = $info;
    	}
    	
    	return view('home.goods.index',['res'=>$res]);
    }
    public function read($id)
    {
    	$res = DB::table('shop_goods')->where('gid',$id)->first();
    	$color = DB::table('shop_goods')->where('cid',$res->cid)->get();	
    	$show = DB::table('goods_show')->where('gid',$id)->get();	
    	$det = DB::table('goods_det')->where('gid',$id)->get();
    	
    	return 	view('home.goods.read',[

    		'res'=>$res,
    		'show'=>$show,
    		'det'=>$det,
    		'color'=>$color
    	]);

    }
}

