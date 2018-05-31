<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use DB;


class LayuiController extends Controller
{
    //
   
    public function layui() //    /home/layui
    {

    	// $allarticle = Article::get();
        $allarticle = DB::table('article')->join('user','user.id','=','article.user_id')->get();
        // dd($allarticle);
        foreach($allarticle as $k => $v)
        {
           
            $attr['id'] = $k+1;
            $attr['title'] = $v->title;
            $attr['content'] = $v->content;
            $attr['username'] = $v->username;
           
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
