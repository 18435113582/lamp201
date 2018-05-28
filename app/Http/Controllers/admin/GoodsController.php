<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Goods;
use App\Cate;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $arr = $request->all();
        $res = DB::table('shop_goods')
        ->where('gname','like','%'.$request->input('search').'%')
        ->paginate($request->input('num',10));

        $num = $request->input('num');
        $search = $request->input('search');

        return view('admin.goods.index',[
            'title'=>'商品列表',
            'res'=>$res,
            'num'=>$num,
            'search'=>$search,
            'request'=>$arr
        ]);
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
        orderBy('paths')->
        get();
         foreach($res as $k=>$v)
        {
            $foo = explode(',',$v->path);
            $level  = count($foo)-2;

            $v->cname = str_repeat('&nbsp;',$level*8).'|--'.$v->cname;
        }
       
        return view('admin.goods.create',['title'=>'添加商品','res'=>$res]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token','showpic','detpic');
        if($request->hasFile('gpic')){

            $gimg = $request->file('gpic');

            $name = rand(1111,9999).time();
            
            $suffix = $gimg->getClientOriginalExtension();

            $gimg->move('./uploads',$name.'.'.$suffix);

            $res['gpic'] = '/uploads/'.$name.'.'.$suffix;

        }
        if($request->hasFile('zp')){

            $gimg = $request->file('zp');

            $name = rand(1111,9999).time();
            
            $suffix = $gimg->getClientOriginalExtension();

            $gimg->move('./uploads',$name.'.'.$suffix);

            $res['zp'] = '/uploads/'.$name.'.'.$suffix;

        }

        $res['gtime'] = time();
        $gid = DB::table('shop_goods')->insertGetId($res);

        //  
        if($request->hasFile('showpic')){

            $gimg = $request->file('showpic');


            $imgs= [];
            
            foreach($gimg as $k => $v){

                $gm = [];

                $name = rand(1111,9999).time();

                $suffix = $v->getClientOriginalExtension();

                $v->move('./uploads',$name.'.'.$suffix);

                $gm['gid'] = $gid;
                $gm['gpic'] = '/uploads/'.$name.'.'.$suffix;

                 
                $imgs[] = $gm;

            }
            DB::table('goods_show')->insert($imgs);
        }

        
        //
        if($request->hasFile('detpic')){

            $gimg = $request->file('detpic');


            $imgs= [];
            
            foreach($gimg as $k => $v){

                $gm = [];

                $name = rand(1111,9999).time();

                $suffix = $v->getClientOriginalExtension();

                $v->move('./uploads',$name.'.'.$suffix);

                $gm['gid'] = $gid;
                $gm['gpic'] = '/uploads/'.$name.'.'.$suffix;

                 
                $imgs[] = $gm;

            }
            DB::table('goods_det')->insert($imgs);
        }

        
        if($gid){

            return redirect('admin/goods')->with('msg','商品添加成功');
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
        $cates = Cate::
        select(DB::raw('*,concat(path,cid) as paths'))->
        orderBy('paths')->get();

        
        foreach($cates as $k=>$v)
        {
            $foo = explode(',',$v->path);
            $level  = count($foo)-2;

            $v->cname = str_repeat('&nbsp;',$level*8).'|--'.$v->cname;
        }
        $res = DB::table('shop_goods')->where('gid',$id)->first();

        $show = DB::table('goods_show')->where('gid',$id)->get();
        $det = DB::table('goods_det')->where('gid',$id)->get();

        return view('admin.goods.edit',[
            'title'=>'商品详情修改',
            'res'=>$res,
            'cates'=>$cates,
            'show'=>$show,
            'det'=>$det
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
        $res = $request->except('_token','showpic','detpic','_method');
        
       
           
        if($request->hasFile('gpic')){

            $info = DB::table('shop_goods')->where('gid',$id)->first();
            if($info->gpic){

                unlink('.'.$info->gpic);
            }
            

            $gimg = $request->file('gpic');

            $name = rand(1111,9999).time();
            
            $suffix = $gimg->getClientOriginalExtension();

            $gimg->move('./uploads',$name.'.'.$suffix);

            $res['gpic'] = '/uploads/'.$name.'.'.$suffix;

        }
        if($request->hasFile('zp')){

            $info = DB::table('shop_goods')->where('gid',$id)->first();
            if($info->gpic){

                unlink('.'.$info->gpic);
            }
            

            $gimg = $request->file('zp');

            $name = rand(1111,9999).time();
            
            $suffix = $gimg->getClientOriginalExtension();

            $gimg->move('./uploads',$name.'.'.$suffix);

            $res['zp'] = '/uploads/'.$name.'.'.$suffix;

        }
        
        
        $res['gtime'] = time();
        

        //  
        if($request->hasFile('showpic')){

            $show = DB::table('goods_show')->where('gid',$id)->get();
            foreach ($show as $k => $v) {
                if($v->gpic){

                unlink('.'.$v->gpic);
                }
            }
            DB::table('goods_show')->where('gid',$id)->delete();

            $gimg = $request->file('showpic');


            $imgs= [];
            
            foreach($gimg as $k => $v){

                $gm = [];

                $name = rand(1111,9999).time();

                $suffix = $v->getClientOriginalExtension();

                $v->move('./uploads',$name.'.'.$suffix);

                $gm['gid'] = $id;
                $gm['gpic'] = '/uploads/'.$name.'.'.$suffix;

                 
                $imgs[] = $gm;

            }
           
            DB::table('goods_show')->insert($imgs);
        }

       
        //
        if($request->hasFile('detpic')){


            $det = DB::table('goods_det')->where('gid',$id)->get();
            foreach ($det as $k => $v) {
               if($v->gpic){

                    unlink('.'.$v->gpic);
                }
            }
            DB::table('goods_det')->where('gid',$id)->delete();

            $gimg = $request->file('detpic');


            $imgs= [];
            
            foreach($gimg as $k => $v){

                $gm = [];

                $name = rand(1111,9999).time();

                $suffix = $v->getClientOriginalExtension();

                $v->move('./uploads',$name.'.'.$suffix);

                $gm['gid'] = $id;
                $gm['gpic'] = '/uploads/'.$name.'.'.$suffix;

                 
                $imgs[] = $gm;

            }
           
            DB::table('goods_det')->insert($imgs);
        }

        

        $data = DB::table('shop_goods')->where('gid',$id)->update($res);
        if($data){

            return redirect('admin/goods')->with('msg','商品修改成功');
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

        $info = DB::table('shop_goods')->where('gid',$id)->first();
       
        if($info->gpic){

            unlink('.'.$info->gpic);
        }
        if($info->zp){

            
            $data = unlink('.'.$info->zp);
        }

        $del = DB::table('shop_goods')->where('gid',$id)->delete();

        
        
        
        if($del){
            $show = DB::table('goods_show')->where('gid',$id)->get();
            foreach ($show as $k => $v) {
                unlink('.'.$v->gpic);
            }
            DB::table('goods_show')->where('gid',$id)->delete();
            
            $det = DB::table('goods_det')->where('gid',$id)->get();
                foreach ($det as $k => $v) {
                    unlink('.'.$v->gpic);
                }
            DB::table('goods_det')->where('gid',$id)->delete();

            return redirect('admin/goods')->with('msg','删除成功');
        }else{

            return back();
        }
    }



    public function down($id) 
    {

        
        $status['status'] = 2;
        $data = DB::table('shop_goods')->where('gid',$id)->update($status);
        if($data){

            return redirect('/admin/goods');
        }
    }

    public function up($id)
    {
        $status['status'] = 1;
        $data = DB::table('shop_goods')->where('gid',$id)->update($status);
        if($data){

           return redirect('/admin/goods');
        }
    }

}
