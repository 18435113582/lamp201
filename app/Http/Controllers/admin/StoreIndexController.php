<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\StoreRequest;


class StoreIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $data = DB::table('op_store')->get();

        $cs = ['北京市','上海市','山西省','山东省'];

        $city = [

                ['北京市'],
                ['上海市'],
                ['太原市','临汾市','运城市'],
                ['济南市','滨州市','东营市']
    ];

        $res = DB::table('op_store')->where('StoreName','like','%'.$request->search.'%')->
        orderBy('sid','asc')->
        paginate($request->input('num',10));
        
        $search = $request->search;
        $num = $request->num;


        return view('admin.StoreContent.StoreIndex',[
            'title'=>'店铺列表',
            'res'=>$res,
            'city'=>$city,
            'cs'=>$cs,
            'search'=>$search,
            'num'=>$num
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.StoreContent.StoreAdd',['title'=>'添加店铺']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        $res = $request->except('_token');

        $data = DB::table('op_store')->insert($res);

        if($data){

            return redirect('/admin/StoreIndex')->with('msg','添加成功');
        } else {

            return back()->with('warning','添加失败');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = DB::table('op_store')->where('sid',$id)->first();

        $cs = ['北京市','上海市','山西省','山东省'];

        $city = [
                ['北京市'],
                ['上海市'],
                ['太原市','临汾市','运城市'],
                ['济南市','滨州市','东营市']
        ];

        return view('admin.StoreContent.StoreEdit',[
            'title'=>'店铺修改',
            'data'=>$data,
            'cs'=>$cs,
            'city'=>$city
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $res = $request->except('_token','_method');

        $data = DB::table('op_store')->where('sid',$id)->update($res);

        if($data){
            return redirect('/admin/StoreIndex')->with('msg','修改成功');
        } else {
            return back();
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $req = DB::table('op_store')->where('sid',$id)->delete();

        if($req){
            return redirect('/admin/StoreIndex')->with('msg','删除成功');
        } else {

            return back();
        }
    }
}
