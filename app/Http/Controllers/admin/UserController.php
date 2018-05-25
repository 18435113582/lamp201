<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use App\Http\Requests\FormsRequest;
use App\Http\Requests\FormUpdate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         $arr = $request->all();


        //获取数据
        $res = DB::table('user')->
        where('username','like','%'.$request->input('search').'%')->
        orderBy('id','asc')->
        paginate($request->input('num',5));


        $num = $request->input('num');
        $search = $request->input('search');

        return view('admin.user.index',[
            'title'=>'用户的列表页',
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
        //
        return view('admin.user.add',['title'=>'用户的添加页面']);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormsRequest $request)
    {
        //第一种手动创建方式
        $this->validate($request, [
            'username' => 'required|unique:user|regex:/^\w{6,12}$/',
            "password" => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:password',
            'email'=>'email',
            'phone'=>'required|regex:/^1[345678]\d{9}$/'    
        ],[
            'username.required'=>"用户名不能为空",
            'username.regex'=>'用户名格式不正确',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一致',
            'email.email'=>'邮箱格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号码格式不正确'
        ]);
             //第二种方式  创建一个请求类   类名自定义
        /*命令行  php artisan make:request StoreBlogPost

        创建出来的类文件的位置
        app/Http/Requests/StoreBlogPost.php*/



        


        if($request->hasFile('profile')){

            //文件名
            $name = rand(1111,9999).'_'.time();

            //获取后缀
            $suffix = $request->file('profile')->getClientOriginalExtension(); 

            //移动到哪去
            $path = $request->file('profile')->move('./uploads/', $name.'.'.$suffix);


             

        }

        $res = $request->except('_token','repass');

        // dd($res);
        //存到数据表中
        $res['profile'] = '/uploads/'.$name.'.'.$suffix;
        // $res['profile'] = '/storage/'.$path;
        //对密码进行哈希加密
        $res['password'] = Hash::make($request->input('password'));
        //加密解密 对密码进行加密encrypt
        // $res['password'] = encrypt($request->input('password'));

        $data = DB::table('user')->insert($res);

        if($data){

            return redirect('/admin/user')->with('msg','添加成功');
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
        $res = DB::table('user')->where('id',$id)->first();

        return view('admin.user.edit',[
            'title'=>'用户的修改页面',
            'res'=>$res

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormUpdate $request, $id)
    {
        //
        //表单验证
        $res = DB::table('user')->where('id',$id)->first();
        $date = '@'.unlink('.'.$res->profile);

        if(!$date){

            return back();
        }


        if($request->hasFile('profile')){

            //文件名
            $name = rand(1111,9999).'_'.time();

            //获取后缀
            $suffix = $request->file('profile')->getClientOriginalExtension(); 

            //移动到哪去
            $path = $request->file('profile')->move('./uploads/', $name.'.'.$suffix);

            // $path = $request->file('profile')->storeAs('images',$name.'.'.$suffix,'public');

            // dd($path);
        }

        $res = $request->except('_token','_method');

        // dd($res);
        //存到数据表中
        $res['profile'] = '/uploads/'.$name.'.'.$suffix;

        // $res['profile'] = '/storage/'.$path;
        //对密码进行哈希加密
        $res['password'] = Hash::make($request->input('password'));
        //加密解密 对密码进行加密encrypt
        // $res['password'] = encrypt($request->input('password'));

        $data = DB::table('user')->where('id',$id)->update($res);

        if($data){

            return redirect('/admin/user')->with('msg','修改成功');
        } else {

            return back()->with('warning','添加失败');
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
         $req = DB::table('user')->where('id',$id)->first();

       
                $data = $req->profile;


        $res = DB::table('user')->where('id',$id)->delete();

        $file = unlink('.'.$data);  

        if ($file) {

            return redirect('/admin/user')->with('msg','删除成功');
         } else {
            return back(); 
        }
    }
}
