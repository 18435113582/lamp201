<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use DB;
class ArticleController extends Controller

{
    public function index()
    {	
    	
        // $page = DB::table('article')->paginate(5);
        $user = DB::table('user')->join('article','user.id','=','article.user_id')->paginate(3);
        // $uuu = $user->paginate(1);
        $comment = DB::table('article')->join('comments','article.id','=','comments.art_id')->get();

        // dd($user);
        return view('home.topic.artlist',['title'=>'帖子列表','user'=>$user]);
       
    }

    public function ez()
    {
         $allarticle = Article::get();
        foreach($allarticle as $k => $v)
        {
           
            $attr['id'] = $v->id;
            $attr['title'] = $v->title;
            $attr['content'] = $v->content;
            // $attr['user_id'] = $v->user_id;
           
            $j[] = $attr;
          
        }
            // dump($j);
             $arr['code'] = 0;
            $arr['msg'] = "";
            $arr['count']= 1000;
            $arr['data']=$j;
            dump($arr);
           return response()->json_encode($arr);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $article = new Article();
        $article->title = 'dddddddd';
        $article->content = '11111111111111111111111';
        $bool = $article->save();
        dd($bool);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
   {
        $this -> validate($request,[
            'title' => 'required|unique:article|max:255',
            'content' => 'required',
        ]);
        $allarticle = new Article;
        $allarticle -> title = $request->get('title');
        $allarticle -> content = $request->get('content');
        // $allarticle -> user_id = $request->user()->id;
        // return $allarticle;die;
        if($allarticle->save()){
            return redirect('home/arts/index');
        }else{
            return redirect()->back()->withInput()->withErrors('保存失败！');
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
        $com= [];

        //=====
        $allarticle = Article::where('id',$id)->first();
        $a = $allarticle['user_id'];
        $b = DB::table('user')->select('username')->where('id',$a)->get();
        // dd($b[0]->username);
        $com = Comment::where('art_id',$id)->get();
        // dd($com);
        return view('home.topic.article',[
            'article'=>$allarticle ,
            'title'=>$allarticle['title'],
             'user' => $b[0]->username,
            'comments' => $com,


        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    //发表文章    ----http://laravel127.cn/home/pub
    public function publish()
    {
        return view('home.topic.publish',['title'=>'【星拍学院】手机也能拍星空_帖子_OPPO手机官方社区']);
        // ->withArticle(\App\Models\Article::all());
    }
}
