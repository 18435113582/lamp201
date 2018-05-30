@extends('layout.home1')


@section('title',$title)


@section('content')

<div class="content-wrap">

    <div class="container clearfix">

        <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 450px;">

            <div class="acctitle"><i class="acc-closed icon-lock3"></i>修改密码页面</div>
            <div class="acc_content clearfix">
               <div class="error">
                  <li style='color:red;font-size:17px;list-style:none'>{{session('msg')}}</li>
                </div>
               
                <form id="login-form" name="login-form" class="nobottommargin" action="/home/changepass" method="post">
                    <div class="col_full">
                        <label for="login-form-username">旧密码:</label>
                        <input type="password" name="oldpass" value="" class="form-control" placeholder="请输入旧密码" />
                    </div>

                    <div class="col_full">
                        <label for="login-form-password">新密码:</label>
                        <input type="password" name="password" value="" class="form-control" placeholder="请输入新密码"/>
                    </div>

                     <div class="col_full">
                        <label for="login-form-password">确认新密码:</label>
                        <input type="password" name="repass" value="" class="form-control" placeholder="请输入确认新密码"/>
                    </div>

  

                    <div class="col_full nobottommargin">
                        <center>
                            {{csrf_field()}}
                            <button class="button button-3d button-bottle green nomargin" id="submit" name="submit" value="login">登录</button>


                        </center>
                        
                       
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
     
        $('.error').slideUp(1000);

    },2000)
</script>


@endsection