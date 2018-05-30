<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <title>『OPPO帐号』-个人信息</title>  

    <link rel="stylesheet" href="/homes/css/commons.css">
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <div class="wrapper">
        <!--头部-->
        <div class="header">
            <div class="w960">
                <ul class="menu_sec" style="" id="headerlinks">
                    <li><a href="http://www.oppo.com/">OPPO官网</a></li>
                    <li><a href="http://www.oppo.cn/">OPPO社区</a></li>
                   
                    <div class="clear"></div>
                </ul>
                <ul class="account_area">
                    <li class="hasLogin"><a href="/home/loginout" class="quit_link">退出</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>


        <div class="main_content">
            <!--帐号信息-->
            <ul class="account_info" usercountrycode="CN">
                <li><label>OPPO帐号：</label>
                    <span>152******36</span>
                </li>
                <li><label>用户名：</label>
                    <span class="uname">用户261591203</span>
                    
                    
                </li>
            </ul>   
            <ul class="account_detail_area">
                <li id="changepwd" class="account_row ">    
                    <div class="row_left"></div>
                    <div class="row_middle">
                        <h3>修改密码</h3>
                        <p class="small_info">用于保护帐号安全</p>
                    </div>
                    <a href="/home/pass" class="row_right modify_btn">修改</a>
                </li>

                <li id="changemobile" class="account_row  ">
                    <div class="row_left"></div>
                    <div class="row_middle">
                        <h3>安全手机&nbsp;&nbsp;&nbsp;&nbsp;<em class="phoneNum"></em></h3>
                        <p class="small_info">安全手机可用于登录OPPO帐号，重置密码或其他安全验证<span>，<em class="orange_tip">建议立即绑定</em></span></p>
                    </div>
                    <a href="/home/phone" class="row_right modify_btn" link="reBindMobile">修改</a>
                </li>

                <li id="changeemail" class="account_row  unset">
                    <div class="row_left"></div>
                    <div class="row_middle">
                        <h3>安全邮箱</h3>
                        <p class="small_info">安全邮箱可用于登录OPPO帐号，重置密码或其他安全验证</p>
                        </div>
                    <a href="/home/email" class="row_right set_btn" link="bindEmail">修改</a>
                </li>

               
            </ul>
        </div>

        <div class="footer_info">
            <p>© 2005 - 2017 OPPO 版权所有 粤ICP备14056724号-2 联系方式：4001-666-888</p>
        </div>

    </div>


    

</body>
</html>




<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



   $('.uname').dblclick(function(){

        //获取中间的文本
        var um = $(this).text().trim();
            

        //创建input
        var ipn = $('<input type="text" />');

        $(this).empty();
        $(this).append(ipn);

        ipn.val(um);
        ipn.focus();
        ipn.select();
        var td = $(this);

        ipn.blur(function(){

            //获取id
            var id = $(this).parents('tr').find('td').eq(0).text();

            //获取输入的值
            var username = ipn.val();

            $.post('/home/ajax',{id:id,username:username},function(data){

                if(data == '1'){

                    //把td 中间的文本换成输入的值
                    
                    td.text(username);
                } else {

                    td.text(um);
                }
            })
        })


        
   })

</script>
  