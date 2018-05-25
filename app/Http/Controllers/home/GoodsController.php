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
        $res_two = DB::table('shop_cates')->where('pid',2)->get();
        foreach($res_two as $k=>$v)
        {
            $info = DB::table('shop_goods')->where('cid',$v->cid)->get();

            $v->info = $info;
        }
        $parts = DB::table('shop_goods')->where('cid',3)->get();
    	$parts_two = DB::table('shop_goods')->where('cid',8)->get();
        $Img = DB::table('shop_img')->get();
       
    	return view('home.goods.index',[
            'res'=>$res,
            'res_two'=>$res_two,
            'parts'=>$parts,
            'parts_two'=>$parts_two,
            'Img'=>$Img
        ]);
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

