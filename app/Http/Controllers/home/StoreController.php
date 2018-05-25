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



    	$ct = $req->get('city');
    	$ae = $req->get('area');
    	$tp = $req->get('type');


    	// var_dump($ct);
    	// var_dump($ae);
    	// var_dump($tp);
    	if($tp == 0){
    		$data = DB::table('op_store')
    		->where('city',$ct)
    		->where('area',$ae)
    		->get();
    	} else {
			$data = DB::table('op_store')
			->where('city',$ct)
			->where('area',$ae)
			->where('StoreType',$tp)
			->get();
    	}

    	if(count($data) > 0){

			return $data;
    	} else {

    		echo 0;
    	}

    }
}
