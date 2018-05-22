<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StoreController extends Controller
{
    //
    public function index()
    {
    	return view('home.index',['title'=>'测试页']);
    }

    public function store()
    {

    	$data = DB::table('op_store')->where('city','0')->get();

    	return view('home.StoreIndex.StoreIndex',['title'=>'体验店查询','data'=>$data]);
    }

    public function stajax(Request $req)
    {

    	// $res = $req->get('city');

    	// var_dump($res);

    }
}
