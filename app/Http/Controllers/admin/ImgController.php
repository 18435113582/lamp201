<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ImgController extends Controller
{
	public function index()
	{
		$res = DB::table('shop_img')->get();

		return view('admin.img.index',['title'=>'轮播图列表','res'=>$res]);
	}


	public function create()
	{

		return view('admin.img.create',['title'=>'添加轮播图']);
	}

	public function save(Request $request)
	{

		$res = $request->except('_token');
		if($request->hasFile('gpic')){

            $gimg = $request->file('gpic');

            $name = rand(1111,9999).time();
            
            $suffix = $gimg->getClientOriginalExtension();

            $gimg->move('./uploads',$name.'.'.$suffix);

            $res['gpic'] = '/uploads/'.$name.'.'.$suffix;

        }
        $data =  DB::table('shop_img')->insert($res);

        if($data){

            return redirect('/img/index')->with('msg','轮播图添加成功');
        } else {

            return back();
        }

	}

	public function edit($id)
	{
		$res = DB::table('shop_img')->where('id',$id)->first();
		return view('admin.img.edit',['title'=>'修改轮播图','res'=>$res]);
	}

	public function update(Request $request,$id)
	{

		$res = $request->except('_token');
		
		if($request->hasFile('gpic')){

            $gimg = $request->file('gpic');

            $name = rand(1111,9999).time();
            
            $suffix = $gimg->getClientOriginalExtension();

            $gimg->move('./uploads',$name.'.'.$suffix);

            $res['gpic'] = '/uploads/'.$name.'.'.$suffix;

        }

         $data = DB::table('shop_img')->where('id',$id)->update($res);

        if($data){

            return redirect('/img/index')->with('msg','修改成功');
        } else {

            return back();
        }

	}





    public function delete($id)
    {

        $info = DB::table('shop_img')->where('id',$id)->first();
        $gpic = $info->gpic;

        $del = DB::table('shop_img')->where('id',$id)->delete();

        if($del){

            unlink('.'.$gpic);
            return redirect('/img/index')->with('msg','已删除');
            
        }else{

        	return back();
        }

    }
}
