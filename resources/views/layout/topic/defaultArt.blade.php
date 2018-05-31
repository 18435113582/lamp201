<!DOCTYPE html><!-- saved from url=(0037)http://www.oppo.cn/thread-269189916-1 -->
<html lang="zh-CN" xmlns:wb="http://open.weibo.com/wb" data-blockbyte-bs-uid="32755" style="overflow: visible;">
<head>
  <!-- csrf令牌保护 -->
<meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- csrf令牌保护 -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="applicable-device" content="pc,mobile">
<!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
<meta name="keywords" content="【星拍学院】手机也能拍星空">
<meta name="description" content="#遇见夏天##我们正年轻##星拍客精选#今天带大家学习如何用手机拍摄星空，先放星空图给大家看看~ 还在羡慕一些拿手机拍摄星空的大神在朋友圈秀图吗？ 还在为不懂怎么调节参数而苦恼吗？ 来！我教你一个简单参数设置拍星空，你也可以做大神~ 第一，你得有个手机三脚架，保持手机的稳定性，因为要用到慢门，稍抖动照片就会模糊。 第二，带有专业模式...">
<title>@yield('title')</title><!--<base target="_blank">--><base href="." target="_blank">
<style type="text/css">
:root .container > .ads:first-child,
:root .footer > #box[style="width:100%;height:100%;position:fixed;top:0"],
:root .panel + .ads,
:root .content > a > .topline,
:root .content > .ads:first-child
{ display: none !important; }
</style>
<!-- layui Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/layui/layui.js">
<link rel="stylesheet" type="text/css" href="/static/layui/css/layui.css">
<!-- jquery UI -->
<link rel="stylesheet" href="/admins/js/libs/jquery-ui.min.css">
<!-- <script src="/admins/js/libs/jquery-ui.min.js"></script> -->
<!-- <script src="/admins/js/libs/jquery-ui.structure.min.js"></script>
<script src="/admins/js/libs/jquery-ui.theme.min.js"></script> -->

<link href="/home/topic/css/common.css" rel="stylesheet">
<!-- <link href="/themes/default/css/common.css" rel="stylesheet"> -->
<script async="" src="/home/topic/js/analytics.js"></script>
<!-- 这个是什么 -->
<!-- <script async="" src="http://hm.baidu.com/hm.js?fab357f3d6fac1bd87ade8e294603d06"></script> -->
@section('js')

@show
<script type="text/javascript" src="/admins/js/libs/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/admins/js/libs/jquery.form.js"></script>



<script src="/home/topic/js/fontsize.js"></script>
<!--[if lte IE 8]>
<script>'abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template subline time video'.replace(/\w+/g,function(n){document.createElement(n)});</script>
<![endif]-->
 <!-- <script src="/home/topic/js/article_1.js"></script> -->
<style class="blockbyte-bs-style" data-name="content">
body>div#blockbyte-bs-indicator>div {
  opacity: 0;
  pointer-events: none;
}

body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible,body>iframe#blockbyte-bs-overlay.blockbyte-bs-visible {
  opacity: 1;
  pointer-events: auto;
}

body.blockbyte-bs-noscroll {
  overflow: hidden !important;
}

body>div#blockbyte-bs-indicator>div {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  width: 40px !important;
  height: 100%;
  border-radius: 0 10px 10px 0;
  background: rgba(0,0,0,0.5);
  transition: opacity 0.3s, transform 0.3s;
  transform: translate3d(-40px, 0, 0);
}

body>div#blockbyte-bs-indicator>div>span {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
  -webkit-mask: no-repeat center/32px;
  -webkit-mask-image: url(chrome-extension://jdbnofccmhefkmjbkkdkfiicjkgofkdh/img/icon-bookmark.svg);
}

body>div#blockbyte-bs-indicator[data-pos='right'] {
  right: 0;
  left: auto;
}

body>div#blockbyte-bs-indicator[data-pos='right']>div {
  right: 0;
  left: auto;
  border-radius: 10px 0 0 10px;
  transform: translate3d(40px, 0, 0);
}

body>div#blockbyte-bs-indicator.blockbyte-bs-fullHeight>div {
  border-radius: 0;
}

body>div#blockbyte-bs-indicator.blockbyte-bs-hover>div {
  opacity: 1;
  transform: translate3d(0, 0, 0);
}

body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb {
  top: 0 !important;
  height: 100% !important;
}

body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div {
  background: transparent;
}

body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div>span {
  -webkit-mask-position-y: 20px;
}

body>iframe#blockbyte-bs-sidebar {
  z-index: 2147483646;
  display: block !important;
  width: 350px;
  height: 0;
  max-width: none;
  border: none;
  background-color: rgba(255,255,255,0.8) !important;
  transition: width 0s 0.3s, height 0s 0.3s, opacity 0.3s, transform 0.3s;
  transform: translate3d(-350px, 0, 0);
}

body>iframe#blockbyte-bs-sidebar[data-pos='right'] {
  right: 0;
  left: auto;
  transform: translate3d(350px, 0, 0);
}

body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible {
  width: calc(100% + 350px);
  height: 100%;
  transition: opacity 0.3s, transform 0.3s;
  transform: translate3d(0, 0, 0);
}

body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask {
  background: none !important;
}

body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask:not(.blockbyte-bs-hover) {
  width: calc(350px + 50px);
}

body>iframe#blockbyte-bs-overlay {
  z-index: 2147483647;
  width: 100%;
  height: 100%;
  max-width: none;
  border: none;
  background: rgba(0,0,0,0.5) !important;
  transition: opacity 0.3s;
}
</style>
</head>
<body class="vsc-initialized">
<!-- BEGIN HEADER -->
<div class="height-wrap">
  <div class="header">
    <div class="container">
      <div class="nav-icon">
        <em></em>
      </div>
      <a target="_self" class="back-icon" href="#">
      <i class="op-icon icon-arrow-l-s1"></i>
      </a>
      <div class="brand">
        <a href="/home/arts/index" >    <!-- 跳回首页 -->
          <i class="op-icon icon-n-logo"><area shape="rect" coords="-88,-281,-294,-320" href="./images/icon-sprite.png" alt=""></i></a>
      </div>
      <!-- <ul class="nav">
        <li>
        <a href="#" target="_self" class=""><span>首页</span></a>
        </li>
        <li>
        <a href="#" target="_self" class=""><span>话题</span></a>
        </li>
        <li>
        <a href="#" target="_self" class=""><span>消息</span></a>
        </li>
        <li>
        <a href="#" target="_self" class=""><span>动态</span></a>
        </li>
        <li>
        <a href="#" target="_blank" class=""><span>官网</span></a>
        </li>
      </ul> -->
      <div class="right-nav">
        <a class="" target="_self" href="/"><i class="layui-icon layui-icon-home"  style="font-size:26px"></i></a>
        <a class="" target="_self" href="/home/loginout" id="Top_Member" aj-state="loaded"><span><i class="layui-icon layui-icon-close" style="font-size:26px"></i><!-- <img class="avater" src="/home/topic/images/noavatar_big.png"> --><!-- <u></u> --></span></a>
      </div>
    </div>
  </div>

  <!-- END HEADER -->
@section('content')

@show
  <!-- BEGIN FOOTER -->
</div>
<div class="footer" aj-state="loaded">
  <div class="container clear pc-style">
    <div class="contact-block">
      <a href="#" class="online-btn"><i class="op-icon icon-f-mascot"></i>在线客服 </a>
      <h3 class="title">4001-666-888</h3>
      <p class="tip-text">
        24小时全国热线
      </p>
    </div>
    <div class="link-block clear">
      <dl class="link-list col3">
        <dt class="title">友情链接</dt>
        <dd>
      <?php $links = DB::table('link')->get(); ?>
        @foreach($links as $k=>$v)
        <a href="{{$v->url}}">{{$v->linkname}}</a>

        @endforeach
        </dd>
      </dl>
    </div>
  </div>
  <div class="bottom-bar">
    <div class="container pc-style">
      <strong name="company">   ©  2005 - 2018 广东欧珀移动通信有限公司 版权所有</strong> ( <a name="icp" href="#">粤ICP备08130115号-3</a> )
      <div class="right">
         关于我们： <a href="#"><i class="op-icon icon-f-weibo"></i></a><a href="#" target="_self" onclick="$(this).hovLayer($(&#39;#WechatQr&#39;));"><i class="op-icon icon-f-wechat"></i></a>
      </div>
    </div>
    <div class="container mobile-style">
      <p class="text-brand">
        <a href="#" target="_blank">OPPO论坛</a>
        <a href="#" target="_blank">OPPO乐园</a>
        <a href="#" target="_blank">OPPO R9</a>
        <a href="#" target="_blank">OPPO R11s</a>
        <a target="_self" href="#" rel="nofollow">登出</a>
      </p>
      <p class="copyright">
        <strong name="company">   ©  2005 - 2018 广东欧珀移动通信有限公司 版权所有</strong><br>
        ( <a name="icp" href="#">粤ICP备08130115号-3</a> )
      </p>
    </div>
  </div>
</div>
<!-- END FOOTER -->

</body>
</html>
