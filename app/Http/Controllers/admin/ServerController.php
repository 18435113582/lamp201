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

	
	
}
