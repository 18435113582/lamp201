<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
// use Illuminate\Support\Facades\DB;

use DB;

class CommentController extends Controller
{
    //

    public function store(Request $request)
    {

        var_dump($request->all());

        $res = $request->except('_token');

        $data = DB::table('comments')->insert($res);

        var_dump($data);

        return $res;


        //ajax--------------------------

         
        // return $request->user;die;
        //   $this -> validate($request,[
        //     'user' => 'required',
        //     'content' => 'required',
        // ]);
        //   $allcomment = new Comment;
        //   $allcomment -> username = $request->get('user');
        //   $allcomment -> content = $request->get('content');
        //   return $allcomment;
          //无法保存
          // $allcomment->save();
          
          //ajax---------------------------------------
          
     
    }
    //返回显示评论
    public function show($id)
    {
        $userCom = User::find($id)->hasManyComments()->get();
        return $userCom;
        return view();
    }
}
