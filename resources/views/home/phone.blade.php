@extends('layout.home1')


@section('title',$title)


@section('content')

<div class="content-wrap">

    <div class="container clearfix">

        <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 450px;">

            <div class="acctitle"><i class="acc-closed icon-lock3"></i>修改手机号页面</div>
            <div class="acc_content clearfix">
                <div class="error">
                  <li style='color:red;font-size:17px;list-style:none'>{{session('msg')}}</li>
                </div>    
                <form id="login-form" name="login-form" class="nobottommargin" action="/home/changephone" method="get">
                    <div class="col_full">
                        <label for="login-form-phone">旧手机号:</label>
                        <input type="phone" name="oldphone" value="" class="form-control" placeholder="请输入旧手机号" />
                    </div>

                    <div class="col_full">
                        <label for="login-form-password">新手机号</label>
                        <input type="phone" name="phone" value="" class="form-control" placeholder="请输入新手机号"/>
                    </div>

                    

                    <div class="col_full nobottommargin">
                        {{csrf_field()}}
                        <button class="button button-3d button-bottle green nomargin" id="submit" name="submit" value="login">登录</button>
                       
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