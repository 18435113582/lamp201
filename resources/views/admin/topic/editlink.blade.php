@extends('layout.topic.adminyu')

@section('content')
<br>
<br>
<br>
<br>
<center>
<div id='form'>
	<!-- 显示错误 -->
	@if ($errors->any())
    <div class="notif error bloc">
        <ul>
            @foreach ($errors->all() as $error)
                <li style='color:blue;font-size:17px;list-style:none'>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@foreach($link as $k=> $v)
<form class="layui-form" action="/admin/link/update" method="POST">
	{{csrf_field()}}
  <div class="layui-form-item">
    <label class="layui-form-label">名字</label>
    <div class="layui-input-block">
      <input type="text" value="" name="linkname" required  lay-verify="required" placeholder="{{$v->linkname}}" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">URL</label>
    <div class="layui-input-block">
      <input type="text" name="url" value="" required  lay-verify="required" placeholder="{{$v->url}}" autocomplete="off" class="layui-input">
    </div>
  </div>
 
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      
    </div>
  </div>
</form>
@endforeach
</div>
 </center>

<script>
//Demo
layui.use('form', function(){
  var form = layui.form;
  
  //监听提交
  form.on('submit(formDemo)', function(data){
    layer.msg(JSON.stringify(data.field));
    return false;
  });
});
</script>

@endsection