<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/homes/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/homes/style.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="/homes/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="/homes/js/jquery.js"></script>
    <script type="text/javascript" src="/homes/js/plugins.js"></script>
    <script type="text/javascript" src="/homes/js/holder.min.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/homes/css/common.css">

</head>

<body class="stretched">
    <div class="wrapper">
        <div class="header">
            <div class="w960" style="" id="headerlinks">
                 <ul class="menu_sec">
                    <li><a href="http://www.lamp201.com/" translang="oppocom">OPPO官网</a></li>
                    <li><a href="http://laravel127.cn/home/arts/index" translang="oppocn">OPPO社区</a></li>
 
                </ul>
                
            </div>
        </div>
    
        <div class="login_box">
            <div class="mainbox">
                <!--头部logo-->
                <div class="lgnheader">
                    <div class="logo"></div>
                  
                    <h3 class="title" translang="logintext" style="height:5px;">登录OPPO帐号可享受更多的服务</h3>
                </div>
                
            </div>
        </div>
   

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

       
        <!-- Content
        ============================================= -->
        <section id="content">
        @section('content')



        @show

        </section><!-- #content end -->

     </div>

        <div class="footer_info">
            <p translang="footer_text">© 2005 - 2017 OPPO 版权所有 粤ICP备14056724号-2 联系方式：4001-666-888</p>
            
        </div>

          
    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="/homes/js/functions.js"></script>

    @section('js')


    @show

</body>
</html>