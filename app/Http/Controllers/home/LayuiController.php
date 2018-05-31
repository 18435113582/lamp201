<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use DB;


class LayuiController extends Controller
{
    //
   
    public function layui()
    {

    	$allarticle = Article::get();
        foreach($allarticle as $k => $v)
        {
           
            $attr['art_id'] = $v->art_id;
            $attr['title'] = $v->title;
            $attr['content'] = $v->content;
            // $attr['user_id'] = $v->user_id;
           
            $j[] = $attr;
          
        }
            
            $arr['code'] = 0;
            $arr['msg'] = "";
            $arr['count']= 1000;
            $arr['data']=$j;
            return response()->json($arr);
            
    }


    public function delete(Request $request)
    {
        
        $id = $request->input('id');
        $re = DB::table('article')->where('art_id',$id)->delete();
        return $re;

    }

    public function detail(Request $request)
    {
        // echo 1;
        $id = $request->input('id');
        $re = DB::table('article')->where('art_id',$id)->value('content');
       
        

        return view('admin.topic.detail',['detail' => $re]);
    }
}
