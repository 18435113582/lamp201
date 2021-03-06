<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/admins.css" media="screen">
<link rel="stylesheet" type="text/css" href="/layui/css/layui.css"  media="screen">
<script type="text/javascript" src="/bs/js/jquery.js"></script>
<title>@yield('title')</title>

</head>

<body>

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
<<<<<<< HEAD
                <span style="color:yellow;font-size:30px;">鸿鹄商城后台</span>
=======
                <span style="color:yellow;font-size:30px;">鸿鹄组</span>
>>>>>>> origin/Yu
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
<!--             <div id="mws-user-notif" class="mws-dropdown-menu">
    <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
    
    Unread notification count
    <span class="mws-dropdown-notif">35</span>
    
    Notifications dropdown
    <div class="mws-dropdown-box">
        <div class="mws-dropdown-content">
            <ul class="mws-notifications">
                <li class="read">
                    <a href="#">
                        <span class="message">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                        </span>
                        <span class="time">
                            January 21, 2012
                        </span>
                    </a>
                </li>
            </ul>
            <div class="mws-dropdown-viewall">
                <a href="#">View All Notifications</a>
            </div>
        </div>
    </div>
</div>

Messages
<div id="mws-user-message" class="mws-dropdown-menu">
    <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
    
    Unred messages count
    <span class="mws-dropdown-notif">35</span>
    
    Messages dropdown
    <div class="mws-dropdown-box">
        <div class="mws-dropdown-content">
            <ul class="mws-messages">
                <li class="read">
                    <a href="#">
                        <span class="sender">John Doe</span>
                        <span class="message">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                        </span>
                        <span class="time">
                            January 21, 2012
                        </span>
                    </a>
                </li>
            </ul>
            <div class="mws-dropdown-viewall">
                <a href="#">View All Messages</a>
            </div>
        </div>
    </div>
</div> -->



            <?php 
                    $res = DB::table('user')->where('id',session('uid'))->first();

            ?>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="{{$res->profile}}" alt="User Photo">
                </div>



                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        您好! {{$res->username}}
                    </div>
                    <ul>
                        
                        <li><a href="/admin/pass">修改密码</a></li>
                        <li><a href="/admin/loginout">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-users"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/admin/user/create">添加用户</a></li>
                            <li><a href="/admin/user">用户列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i> 商品类别管理</a>
                        <ul class="closed">
                            <li><a href="/admin/cate/create">添加分类</a></li>
                            <li><a href="/admin/cate">分类列表</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-list"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="/admin/goods/create">添加商品</a></li>
                            <li><a href="/admin/goods">浏览商品</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i> 商城轮播图管理</a>
                        <ul class="closed">
                            <li><a href="/img/create">添加轮播商品</a></li>
                            <li><a href="/img/index">浏览轮播商品</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i> 订单管理</a>
                        <ul class="closed">
                            <li><a href="/admin/orders">浏览订单</a></li>
                           
                        </ul>
                    </li>
                </ul>
            </div>

            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 店铺管理</a>
                        <ul class="closed">
                            <li><a href="/admin/StoreIndex/create">添加店铺</a></li>
                            <li><a href="/admin/StoreIndex">店铺列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 维修管理</a>
                        <ul class="closed">
                            <li><a href="/admin/ServerIndex">维修列表</a></li> 
                            <li><a href="/admin/ServerHistory">维修历史</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 价格管理</a>
                        <ul class="closed">
                            <li><a href="/admin/priceIndex">价格列表</a></li> 
                            <li><a href="/admin/priceAdd">添加价格</a></li> 
                        </ul>
                    </li>
                </ul>
            </div>
             <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 文章管理</a>
                        <ul class="closed">
                            <li><a href="/admin/arts/create">添加文章</a></li>
                            <li><a href="/admin/arts/">文章列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
<<<<<<< HEAD
=======
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i>评论管理</a>
                        <ul class="closed">
                            <li><a href="/admin/com/index">评论列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
>>>>>>> origin/Yu
             <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i>链接管理</a>
                        <ul class="closed">
                            <li><a href="/admin/link/index">链接列表</a></li>
                            <li><a href="/admin/link/create">添加友情链接</a></li>
                            <li><a href="/admin/link/edit">修改友情链接</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>


        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">

                @if(session('msg'))
                <div class="mws-form-message success">
                    <ul class="list-unstyled">
                        <li sytle='font-size:20px'>{{session('msg')}}</li>
                       
                    </ul>
                </div>
                @endif
        
            <!-- Inner Container Start -->
            <!-- @if(session('msg'))
                <div class="mws-form-message success">
                    <ul class="list-unstyled" style="list-style:none;">
                        <li sytle='font-size:20px;'>{{session('msg')}}</li>
                       
                    </ul>
                </div>
            @endif -->
            <div class="container">
            @section('content')

            @show
            </div> 
            <!-- Inner Container End -->    
            <!-- Footer -->
            <div id="mws-footer">
                Copyright Your Website 2018. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <!-- <script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/admins/jui/js/jquery.ui.touch-punch.js"></script> -->

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>

    <!-- Core Script -->
    <script src="/admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script type="text/javascript">
        $(function() {
            $.fn.tabs && $('.mws-tabs').tabs();
        });
    </script>
    <script>
            $('.success').delay(3000).slideUp(1000);
        </script>

    <script src="/layui/layui.js"></script>

    @section('js')

    @show

</body>
</html>
