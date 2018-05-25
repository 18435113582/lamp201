@extends('layout.home')


@section('title',$title)


@section('content')
<script src="/homes/js/jquery.toggle-password.js"></script>


<div class="content-wrap">

	<div class="container clearfix">

		<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 450px;">

			<div class="acctitle"><i class="acc-closed icon-lock3"></i>用户的登录页面</div>
			<div class="acc_content clearfix">
				@if(session('err'))
                    <li style='color:red;font-size:17px;list-style:none'>{{session('err')}}</li>

                @endif
				<form id="login-form" name="login-form" class="nobottommargin" action="/home/dologin" method="post">
					<div class="col_full">
						<label for="login-form-username">账号:</label>
						<input type="text" id="login-form-username" name="username" value="" class="form-control" placeholder="请输入账号" />
					</div>

					<div class="col_full">
						<label for="login-form-password">密码:</label>
						<input type="password" id="password" name="password" value="" class="form-control" placeholder="请输入密码"/>

						<li class="a">
							<!-- <input type="checkbox" id="remember"><label for="remember">记住密码</label> --> 
							<input type="checkbox" id="togglePassword"><label for="togglePassword">显示密码</label>
						</li>
					</div>

					<!-- <style>
						.yzm{
							
						  width: 100%;
						  height: 34px;
						  padding: 6px 12px;
						  font-size: 14px;
						  line-height: 1.42857143;
						  color: #555555;
						  background-color: #ffffff;
						  background-image: none;
						  border: 1px solid #cccccc;
						  border-radius: 4px;
						}

					</style> -->

					<!-- <div class="col_full">
						<label for="login-form-username">手机号:</label>
						<input type="text" id="number" name="phone" value="" class="form-control" placeholder="请输入手机号"/>
					</div> -->

					<!-- <div class="col_full">
						<label for="login-form-username">验证码:</label>
						
						<div class="clearfix"></div>

						<input type="text" id="" name="" value="" class="yzm" style='width:250px'/>
						<button class='btn btn-info' id='btnsend' style='margin-left:30px'>点击获取验证码</button>
					</div> -->

					<div class="col_full nobottommargin">
						{{csrf_field()}}
						<button class="button button-3d button-bottle green nomargin" id="login-form-submit" name="login-form-submit" value="login">登录</button>
						<a href="/home/dologin" class="fright">忘记密码</a>
					</div>
				</form>
			</div>
		</div>

	</div>

</div>

@endsection

	@section('js')
<script>

	/*$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	
	$('#btnsend').click(function(){


		//获取手机号码
		var phone = $('#number').val();
		

		//发送ajax
		$.post('/home/yzm',{number:phone},function(data){

			console.log(data);
		})
		return false;
	})*/


	
	
		$(function(){
		    $('#password').togglePassword({
		        el: '#togglePassword'
		    });
		});
	

	

</script>
@endsection