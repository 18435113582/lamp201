<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Cate;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res =Cate::
        select(DB::raw('*,concat(path,cid) as paths'))->
        orderBy('paths')->get();
        
        
        foreach($res as $k=>$v)
        {
            $foo = explode(',',$v->path);
            $level  = count($foo)-2;

            $v->cname = str_repeat('&nbsp;',$level*8).'|--'.$v->cname;
        }
       
        return view('admin.cate.index',['title'=>'分类页面','res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $res = DB::table('shop_cates')->
        select(DB::raw('*,concat(path,cid) as paths'))->
        orderBy('paths')->get();
        foreach($res as $k=>$v)
        {
            $foo = explode(',',$v->path);
            $level  = count($foo)-2;

            $v->cname = str_repeat('&nbsp;',$level*8).'|--'.$v->cname;
        }
        return view('admin.cate.create',['title'=>'类别添加','res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->except('_token');
        $id = $data['pid'];
        $res = DB::table('shop_cates')->where('cid',$id)->first();
        
        if($id<1){
             $data['path'] = $id.',';
        }else{
             $data['path'] = $res->path.$id.',';
        }
        $foo = DB::table('shop_cates')->insert($data);
        if($foo){


            return redirect('admin/cate')->with('msg','添加成功');
        } else {

            return back();
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
        $res = DB::table('shop_cates')->where('cid',$id)->first();
        return view('admin.cate.edit',['title'=>'类别修改','res'=>$res]);
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
        $data['cname'] = $request->input('cname');

        $res = DB::table('shop_cates')->where('cid',$id)->update($data);

        if($res){

            return redirect('/admin/cate')->with('msg','修改成功');
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
        $res = DB::table('shop_cates')->where('cid',$id)->delete();
        if($res){

            return redirect('/admin/cate')->with('msg','删除成功');
        }
    }
}
