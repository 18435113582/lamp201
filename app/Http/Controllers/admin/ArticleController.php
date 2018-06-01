<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //文章列表页
      
        //获取所有Article表数据 
        // $allarticle  = Article::get();
               
        return view('admin.topic.artlist',['title'=>'文章列表']);
        //传过去的是$article
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('POST')){
            $this->validate($request, [
                'title'=> 'required|min:2',

                'content'=> 'required'
            ]);
        }

        //=================================
        return view('admin.topic.addarticle',['title'=>'添加文章']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|unique:article|max:255',
            'content' => 'required',
        ]);
        $allarticle = new Article;

        $allarticle->title = $request->get('title');
        $allarticle->content = $request->get('content');
        $allarticle->user_id  = $request->get('id');                             
        
        // $article->user_id = $request->user()->id;
        if($allarticle->save()){
            return redirect('admin/arts');
        }else{
            return redirect()->back()->withInput()->withErrors('保存失败!');
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
        return view('home.topic.article')->withArticle(Article::with('hasManyComments')->find($id));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

   
    
}
