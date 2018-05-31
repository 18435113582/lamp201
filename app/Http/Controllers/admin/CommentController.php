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

        // var_dump($request->all());

        $res = $request->except('_token');

        $res['time'] = time();

        $data = DB::table('comments')->insert($res);

        echo $data;
     
    }
    // //返回显示评论
    // public function show($id)
    // {
    //     $userCom = User::find($id)->hasManyComments()->get();
    //     return $userCom;
    //     return view();
    // }

    public function index()
    {
        $com = DB::table('comments')->get();

        return view('admin.topic.comlist',['com'=>$com]);
    }
    public function delete($id)
    {
        $num = DB::table('comments')->where('id',$id)->delete();
        return redirect('/admin/com/index');
    }

}
