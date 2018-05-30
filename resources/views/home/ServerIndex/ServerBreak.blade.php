@extends('layout.home')

@section('title',$title)

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<link media="all" type="text/css" rel="stylesheet" href="/css/break/ui.css">

<link media="all" type="text/css" rel="stylesheet" href="/css/break/repair.css">

<section id="oc-container">
	<div class="repair repair-fill-address">
		<!-- <div class="repair-header">
	<div class="repair-header-wrapper">
		<div class="oc-row">
			<div class="col-6 repair-header-left">
				<span>用户</span> | <a href="#">注销</a>
			</div>
			<div class="col-6 repair-header-right">
				<a href="//www.oppo.com/cn/service/repair/orders?isapp=0">我的寄修服务</a>
			</div>
		</div>
	</div>
</div> -->		<div class="repair-subtitle oc-font-FZYH510">请填写寄修信息</div>


		<form class="repair-form" action="/home/create" method="post">
			<div class="repair-form-field">
				<p><label>*寄修人姓名</label></p>
				<div class="oc-input">
			        <input type="text" class="oc-input-default oc-radius-default" name="bname" placeholder="">
			        <span class="oc-warning" id="jxr">请输入寄修人姓名</span>
			    </div>
			</div>
			<div class="repair-form-field">
				<p><label>*寄修人手机号码</label></p>
				<div class="oc-input">
			        <input type="text" class="oc-input-default oc-radius-default" name="bphone" placeholder="">
			        <span class="oc-warning" id="war">请输入正确的11位数字手机号码</span>
			    </div>
			    <div class="oc-inputs">
			    	<div class="oc-row">
			    		<div class="col-6">
			    			<div class="oc-input">
			    				<input type="text" class="oc-input-default oc-radius-default" name="bcode" placeholder="短信验证码">
			    				<span class="oc-warning">请输入正确的短信验证码</span>
			    				<p style="color:red;">{{session('yzm')}}</p>
			    			</div>
			    		</div>
			    		<div class="col-6">
			    			<div class="oc-inputs-half">
			    				<span class="oc-btn oc-radius-default btn-lesser btn-size-master oc-btn-whole" id="sendSMS">点击发送验证码</span>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			    <p>请保持填写的电话一直畅通，快递员和售后人员均通过该号码和您联系。</p>
			</div>
			<div class="repair-form-field oc-address-select address-select-views">
				<p><label>*寄修人地址</label></p>
				<!-- 移动端地址选择器 start -->
			
    			    <!-- PC端地址选择器 end -->
			    <div class="oc-input address-detail">
			        <input type="text" class="oc-input-default oc-radius-default " name="bAddress" placehoder="请输入详细地址">
			        <span class="oc-warning" id="oc">请输入详细地址</span>
			    </div>
			</div>
			<div class="repair-form-field repair-service-network-none">
				<p><label>可寄修的服务中心</label></p>
			    <div class="repair-well">
			    	<div class="repair-well-subtitle">抱歉，您附近暂无可寄修的服务中心，请修改寄修地址重新再试，或联系官方客服送修（电话：4001-666-888）</div>
			    </div>
			</div>
			<div class="repair-form-field repair-service-network">
				<p><label>可寄修的服务中心</label></p>
			    <div class="repair-well">
			    	<div class="repair-well-title oc-font-FZYH510">-</div>
			    	<div class="repair-well-subtitle">-</div>
			    	<hr color="#d4d4d4">
			    	<div class="repair-well-subtitle">-</div>
			    	<div class="repair-well-subtitle">-<a>-</a></div>
			    </div>
			</div>
			{{csrf_field()}}
			<div class="repair-form-field">
				<button class="oc-btn oc-radius-default btn-master btn-size-master oc-btn-whole " href="javascript:;" id="addressSubmit" type="submit">提交信息</button>
				<span class="oc-warning"></span>
			</div>
			<div class="repair-form-field">
				<p class="repair-agree"><label>我已同意<a href="" data-message="repair-terms">《OPPO 寄修服务条款》</a></label></p>
			</div>
		</form>
	</div>
</section>

@endsection

@section('js')

<script>
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

	$('input[name="bname"]').blur(function(){

		var bn = $(this).val();

		if(!bn){
			$(this).next().show();
		} else {
			$(this).next().hide();
		}
	})

	$('input[name="bphone"]').blur(function(){

		var bph = $(this).val();

		if(!bph){

			$(this).next().show();
		}

	})
	
	$('#sendSMS').click(function(){

		var bp = $('input[name="bphone"]').val();

		var reg = /^((1[3,5,8][0-9])|(14[5,7])|(17[0,6,7,8])|(19[7]))\d{8}$/;

		if(!reg.test(bp)){

			$('input[name="bphone"]').next().show();
			
		} else {

			$('input[name="bphone"]').next().hide();

			var dj = 61;

			var info = setInterval(function(){

				$('#sendSMS').text(--dj);

				if(dj <= 0){
				$('#sendSMS').text('点击发送验证码');
				clearInterval(info);
			}

			},1000)
			


			$.post('/home/breakajax',{phone:bp},function(data){

				console.log(data);
			})

		}

	})

	$('input[name="bAddress"]').blur(function(){

		var bA = $(this).val();

		if(!bA){
			$(this).next().show();
		} else {
			$(this).next().hide();
		}
	})

	var BN = false;
	var BP = false;
	var BA = false;

	$('#addressSubmit').click(function(){

		var bname = $('input[name="bname"]').val();
		var bphone = $('input[name="bphone"]').val();
		var bAddress = $('input[name="bAddress"]').val();

		if(!bname){

			$('#jxr').show();

		} else {

			$('#jxr').hide();
			BN = true;
		} 

		if(!bphone){

			$('#war').show();

		} else {

			$('#war').hide();
			BP = true;
		}

		if(!bAddress){

			$('#oc').show();

		} else {

			$('#oc').hide();
			BA = true;
		}

		if(!BN || !BP || !BA){

			return false;
		}

	})




</script>

@endsection