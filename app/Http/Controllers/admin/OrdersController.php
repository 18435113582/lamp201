<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrdersController extends Controller
{
    public function index(Request $request)
    {

    	$condition = [];
        
        if ($status = $request->input('status')){
            $condition[] = ['status','=',$status];
        }
        if ($oid = $request->input('oid')){
            $condition[] = ['oid','=',$oid];
        }

    	
        $res = DB::table('shop_orders')->where($condition)->paginate($request->input('num',10));
       
        $num = $request->input('num');
        $oid = $request->input('oid');
		$arr = $request->all();
        return view('admin.orders.index',[
            'title'=>'订单管理',
            'res'=>$res,
            'num'=>$num,
            'search'=>$oid,
            'request'=>$arr
        ]);
    }

    public function det($id)
    {
    	$res = DB::table('orders_det')->where('oid',$id)->get();

		return view('admin.orders.det',['title'=>'订单详情','res'=>$res]);
    }

    public function edit($id)
    {
    	
    	$res = DB::table('shop_orders')->where('oid',$id)->first();
    	

    	return view('admin.orders.edit',['title'=>'订单修改','res'=>$res]);
    }

    public function update(Request $request,$id)
    {
    	$res = $request->except('_token');
    	$data = DB::table('shop_orders')->where('oid',$id)->update($res);

    	if ($data){

    		return redirect('admin/orders')->with('msg','订单修改成功');
    	}else {

            return back();
        }
    }

    public function go(Request $request)
    {

    	$oid = $request->input('oid');
    	$status['status'] = 2;
    	$data = DB::table('shop_orders')->where('oid',$oid)->update($status);
    	if($data){

    		echo 1;
    	}
    }



}
