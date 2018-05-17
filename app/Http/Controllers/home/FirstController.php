<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FirstController extends Controller
{
    public function index()
    {

    	$res = DB::table('shop_cates')->where('pid',1)->get();
    	foreach($res as $k=>$v)
    	{
    		$info = DB::table('shop_goods')->where('cid',$v->cid)->get();

    		$v->info = $info;
    	}
    	// echo '<pre>';
    	// var_dump($res);
    	return view('home.first.index');
    }
}
