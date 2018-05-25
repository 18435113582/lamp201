@extends('layout.home')

@section('title',$title)

@section('content')

<style>
	.oc-checkbox{
		cursor:pointer;
	}

</style>

<link media="all" type="text/css" rel="stylesheet" href="/css/common.css">

<link media="all" type="text/css" rel="stylesheet" href="/css/ui.css">

<link media="all" type="text/css" rel="stylesheet" href="/css/repair.css">

<section id="oc-container">
	<div class="repair repair-fill-fault">
	<div class="repair-subtitle oc-font-FZYH510">请填写产品故障信息</div>

	
<form class="layui-form" method="get" action="/home/breakdown" style="width:600px;margin-left:370px;height:900px;">
  <div class="layui-form-item">
    <!-- <div class="layui-form-label">IMEI号</div> -->
    <p style="margin-left:110px;margin-bottom:5px;"><label>*IMEI号</label></p>
    <div class="layui-input-block">
      <input type="text" name="IMEI"  placeholder="请输入15位IMEI号"  class="layui-input">

      <span class="oc-warning">请输入手机15位数字IMEI号</span>
    </div>	
    <p style="font-size: 14px;line-height: 20px;color: #a0a0a0;margin-left:110px;">IMEI 号码查询方法：查看手机包装盒背面或拨号界面输入 *#06#，默认为第一个 IMEI 号码。</p>
  </div>
  <div class="layui-form-item">
    <p style="margin-left:110px;margin-bottom:5px;margin-top:30px;"><label>*手机型号</label></p>
    <div class="layui-input-block">
      <select name="btype" >
        <option value=""></option>
        <option value="R15">R15</option>
        <option value="R11">R11</option>
        <option value="R7">R7</option>
      </select>
    </div>
  </div>
  <div class="layui-form-item">
    <!-- <div class="layui-form-label">IMEI号</div> -->
    <p style="margin-left:110px;margin-bottom:5px;margin-top:30px;"><label>*购买日期</label></p>
    <div class="layui-input-block">
      	<!-- <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input"> 注意：这一层元素并不是必须的 -->
  		<input type="text" name="btime" class="layui-input" id="test1" placeholder="请输入日期">
    </div>
  </div>
  <div class="layui-form-item">
    <p style="margin-left:110px;margin-bottom:5px;margin-top:30px;"><label>*保修状态</label></p>
    <div class="layui-input-block">
      <select name="bstatus">
        <option value=""></option>
        <option value="保修期外">保修期外</option>
        <option value="保修期外">保修期内</option>
        <option value="保修期外">人为损坏</option>
      </select>
    </div>
  </div>
  <div class="repair-form-field" style="margin-left:110px;">
								<p style='margin-top:30px;''><label>*具体故障描述</label></p>
				<section class="oc-checkboxs" id="reasons">
	                <div class="oc-row">
	                	<div class="col-6"  >
	                		<ul class="oc-checkbox" >
			                    <li class="checkbox-text" >无法充电</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">死机重启</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">无法开机</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">通话异常</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">无法连接网络</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">无法读取SIM卡</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">系统升级</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">触摸屏失灵</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">屏裂</li>
			                </ul>
	                	</div>
	                	<div class="col-6">
	                		<ul class="oc-checkbox">
			                    <li class="checkbox-text">其他</li>
			                </ul>
	                	</div>
	                </div>
	                <span class="oc-warning">&nbsp;&nbsp;请选择手机故障类型</span>
	            </section>
			</div>
			{{csrf_field()}}
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" type="submit" lay-submit style="margin-left:200px;margin-top:30px" ">立即提交</button>
    </div>
  </div>

</form>

	</div>
</section>

@endsection

@section('js')

<script>
//Demo
layui.use('form', function(){
  var form = layui.form;
  
  //监听提交
  form.on('submit(formDemo)', function(data){
    // layer.msg(JSON.stringify(data.field));
    // return false;
  });
});
</script>

<script>
layui.use('laydate', function(){
  var laydate = layui.laydate;
  
  //执行一个laydate实例
  laydate.render({
    elem: '#test1' //指定元素
  });
});
</script>

<script>

	$('.oc-checkbox').click(function(){
		
		if($(this).find('.qusi').length>0)
		{

			$(this).find('.qusi').remove();

			$(this).css('border','1px solid #e2e9ed')

		}else{

			$(this).append(`<input type="hidden" class="qusi" name="inp[]" checked="checked" value="`+$(this).children().text()+`">`);
			$(this).css('border','1px solid green')

		}

	})

	$('input[name="IMEI"]').blur(function(){

		var reg = /^[A-Za-z0-9]{15}$/;

		var imei = $('input[name="IMEI"]').val();

		if(!reg.test(imei)){

			$(this).next().show();
			return false;
		} else {
			$(this).next().hide();
			return true;
		}



	})
		



</script>

@endsection