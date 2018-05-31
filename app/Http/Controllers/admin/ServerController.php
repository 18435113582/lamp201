<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ServerController extends Controller
{
    //
	public function index()
	{	
		$data = DB::table('breakdown')->get();

		return view('admin.ServerContent.ServerIndex',['title'=>'服务管理','data'=>$data]);
	}

	public function edit1($id)
	{	
		$arr['fixStatus'] = '2';

		DB::table('breakdown')->where('bid',$id)->update($arr);

		return redirect('/admin/ServerIndex');
	}

	public function edit2($id)
	{
		$arr['fixStatus'] = '3';

		DB::table('breakdown')->where('bid',$id)->update($arr);

		return redirect('/admin/ServerIndex');
	}

	public function edit3($id)
	{
		$arr['fixStatus'] = '4';

		DB::table('breakdown')->where('bid',$id)->update($arr);

		return redirect('/admin/ServerIndex');
	}

	public function edit4($id)
	{	

		$arr['fixStatus'] = '5';

		DB::table('breakdown')->where('bid',$id)->update($arr);

		return redirect('/admin/ServerIndex');

	}

	public function priceIndex()
	{
		$prr = DB::table('accessories')
		->join('price_name','accessories.aid','price_name.pid')
		->get();

		return view('admin.priceContent.price',['title'=>'配件价格管理','prr'=>$prr]);
	}

	public function priceAdd()
	{
		return view('admin.priceContent.priceAdd',['title'=>'添加价格']);
	}

	
}
