@extends('layout.home1')


@section('title',$title)


@section('content')


<div class="content-wrap">

	<div class="container clearfix">

		<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 450px;">

			@if (count($errors) > 0)
    		<div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style='color:red;font-size:17px;list-style:none'>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
			
			<div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>用户的注册</div>
			<div class="acc_content clearfix">
				<form id="register-form" name="register-form" class="nobottommargin" action="/home/zhuce" method="post">
					<div class="col_full">
						<label for="register-form-name">用户名:</label>
						<input type="text" id="register-form-name" name="username" value="" class="form-control" placeholder="请输入用户名"/>
					</div>

					<div class="col_full">
						<label for="register-form-password">密码:</label>
						<input type="password" id="register-form-password" name="password" value="" class="form-control" placeholder="请输入密码"/>
					</div>

					<div class="col_full">
						<label for="register-form-email">邮箱:</label>
						<input type="text" id="register-form-email" name="email" value="" class="form-control" placeholder="请输入邮箱"/>
					</div>

					

					<div class="col_full">
						<label for="register-form-phone">手机号:</label>
						<input type="text" id="register-form-phone" name="phone" value="" class="form-control" placeholder="请输入手机号"/>
					</div>

									

					<div class="col_full">
						<label for="register-form-username">验证码:</label>

						<div class="clearfix"></div>

						<input type="text" id="" name="code" value="" class="form-control" style='width:250px;float:left;margin-right: 60px' placeholder="请输入验证码"/>
						

						<img src="/home/code" alt="验证码" title='验证码' onclick='this.src=this.src+="?1"'>
	
					
						
					</div>
					
					<div class="col_full nobottommargin">
						{{csrf_field()}}
						<button class="button button-3d button-green" id="register-form-submit" value="register">注册</button>

						<!-- <button class="button button-3d button-black nomargin" id="register-form-submit" value="register">登录</button> -->
					</div>
				</form>
			</div>

			

		</div>

	</div>

</div>

@endsection

@section('js')
<script>
	setTimeout(function(){
     
		$('.mws-form-message').slideUp(1000);

	},2000)

	

</script>

@endsection