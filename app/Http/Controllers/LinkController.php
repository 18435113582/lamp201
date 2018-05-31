<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    //
    public function index()
    {	

    	$links = DB::table('link')->get();

    	return view('admin.topic.linklist',['links'=>$links]);
    }

    public function store(Request $request)
    {
    	
    	// dd($request->all());
    	$this->validate($request,[
    		'linkname'=> 'required|unique:link|max:220',
    		'url'=> 'required',
    		'url' => array('regex:/(http?|ftp?):\/\/(www)\.([^\.\/]+)\.(com|cn)(\/[\w-\.\/\?\%\&\=]*)?/i')
    	],[
    		'linkname.required'=>"链接名不能为空",
    		'url.requied'=>"url不能为空",
    		'url.regex'=>"链接格式不正确"
    	]);
    	$links=new Link;
    	$links -> linkname = $request->get('linkname');
    	$links -> url = $request->get('url');
    	if($links->save()){
    		return redirect('/admin/link/index');
    	}else{
    		return redirect()->back()->withInput()->withErrors('保存失败');
    	}

    }

    public function create()
    {
    	return view('admin.topic.createlink');

    }

    public function del($id)
    {
    	$num=DB::table('link')->where('id',$id)->delete();
    	return redirect('/admin/link/index');
    }

    public function edit($id)
    {
    	$num = DB::table('link')->where('id',$id)->get();
    
    	return view('admin.topic.editlink',['link'=>$num]);

    }
    public function update(Request $request)
    {
    	// dd($request->all());
    	$this->validate($request,[
    		'linkname'=> 'required|unique:link|max:220',
    		'url'=> 'required',
    		'url' => array('regex:/(http?|ftp?):\/\/(www)\.([^\.\/]+)\.(com|cn)(\/[\w-\.\/\?\%\&\=]*)?/i')
    	],[
    		'linkname.required'=>"链接名不能为空",
    		'url.requied'=>"url不能为空",
    		'url.regex'=>"链接格式不正确"
    	]);
    	$links=new Link;
    	$links -> linkname = $request->get('linkname');
    	$links -> url = $request->get('url');
    	if($links->save()){
    		return redirect('/admin/link/index');
    	}else{
    		return redirect()->back()->withInput()->withErrors('保存失败');
    	}
    }


    
}
