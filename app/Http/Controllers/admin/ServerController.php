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

	public function history(Request $request)
	{	
		// $data = DB::table('breakdown')->get();

		// return view('admin.ServerContent.ServerHistory',['title'=>'维修历史','data'=>$data]);

		$res = DB::table('breakdown')->where('uname','like','%'.$request->search.'%')->
        orderBy('bbtime','asc')->
        paginate($request->input('num',10));

        
        $search = $request->search;
        $num = $request->num;


        return view('admin.ServerContent.ServerHistory',[
            'title'=>'维修历史',
            'data'=>$res,
            'search'=>$search,
            'num'=>$num
        ]);
	}

	public function delete($id)
	{

		dd($id);
		$del = DB::table('breakdown')->where('bid',$id)->delete();

		if($del){

			return redirect('/admin/ServerHistory');
		}

		
	}

	
}
