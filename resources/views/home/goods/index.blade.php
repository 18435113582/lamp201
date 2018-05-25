@extends('layout.shop')   


@section('content')           
<section id="oc-container">

    <section class="oc-high ohigh-theme-white">
    <section class="ohigh-wrapper">

    <ul class="ohw-banner-list">

    @foreach($Img as $k=>$v)                   
        <li class="banner-item" data-theme="white" data-layout="right">
            <a class="mobile-banner-link" href=""  target="_blank"></a>
            <!--背景-->
            <i class="banner-bg" style="background-color: ;">
                        <picture>
                    <!--[if IE 9]><video style="display: none"><![endif]-->
                    
                    <source data-srcset="{{$v->gpic}}" media="xl" />
                    <!--[if IE 9]></video><![endif]-->
                    <img data-src="{{$v->gpic}}" data-srcset="{{$v->gpic}}" class="lazyload" alt=""" />
                </picture>
                    </i>

            <!--标题-->
            <section class="banner-title-wrapper">
                <section class="banner-title _title">
                    <section>
                        <h2>{{$v->hone}}</h2>
                        <h3>{{$v->htwo}}</h3>
                    </section>
                    <div class="banner-link">
                        <a class="ban-btn" data-btn="white" href="/home/read/{{$v->gid}}" target="_blank">立即购买</a>
                    </div>
                </section>
            </section>


    <!--产品图-->
    
        </li>
    @endforeach
    </ul>

</section>

    <!--轮播切换-->
    <nav class="ohw-pagination">
        <ul></ul>
    </nav>

</section>
    <section class="shop-content-floor">
    <section class="shop-content-wrapper">

        <!--旗舰产品层-->
       
<section class="shop-product-floor oc-row flagship-floor">
     @foreach($res as $k=>$v)
     <section class="col-12 product-data">
     
        <section class="pro-views-box">
               
            <ul class="product-model-views">
                @foreach($v->info as $kk=>$vv)
                <li class="product-view">
                    
                        <img data-src="{{$vv->gpic}}"  class="lazyload" alt="" />
                    
                </li>
                                
                 @endforeach                
            </ul>
            

                <section class="pro-model-title" data-color="white" data-pos=
                @if($k % 2 !== 1)
                    right 
                @else
                    left
                @endif>
                    <section class="title-box pro-swiper-container">
                        
                    <ul class="product-title-list">
                    @foreach($v->info as $kk=>$vv)                  
                        <li class="product-title">
                            <h3>{{$vv->gname}}</h3>
                            <h4>{{$vv->descr}}</h4>
                        </li>
                    @endforeach
                    </ul>
                     
                    <section class="color-switchable">
                       
                        <ul class="color-list">
                            @foreach($v->info as $kk=>$vv)
                            <li class="color-item" data-color="#2B196D" data-title-color="gray" data-view-bg="#FFFFFF" data-price="{{Intval($vv->price)}}" data-link="/home/read/{{$vv->gid}}"><i class="color-block"></i><i class="color-circle"></i></li>
                            @endforeach
                        </ul>
                        
                    </section>
                    <p class="pro-price">¥<i></i></p>
                    <a class="oc-btn btn-master pro-link" href="" target="_blank">立即购买</a>
                </section>
            </section>

        </section>
    
    </section>
    @endforeach     
</section> 
       
        <!--次推产品层-->
<section class="shop-product-floor oc-row main-floor">
    @foreach($res_two as $k=>$v)
     <section class="col-6 col-xs-12 product-data">
        <section class="pro-views-box ">
            <a class="pro-link pro-swiper-container" href="" target="_blank">
                <ul class="product-model-views swiper-wrapper">
                    @foreach($v->info as $kk=>$vv)
                    <li class="product-view swiper-slide">
                        <picture>
                            <img data-src="{{$vv->gpic}}"  class="lazyload" alt="" />
                        </picture>
                    </li>
                    @endforeach                    
                </ul>
                <section class="pro-model-title">
                    <section class="title-box">
                        <section class="color-switchable">
                            <ul class="color-list">
                                @foreach($v->info as $kk=>$vv)
                                <li class="color-item" data-color="#c43e38" data-price="{{Intval($vv->price)}}" data-link="/home/read/{{$vv->gid}}" data-model-name="{{$vv->gname}}" data-model-des="{{$vv->descr}}"><i class="color-block"></i><i class="color-circle"></i></li>
                                @endforeach
                            </ul>
                        </section>
                        <h3 class="pro-model-name"></h3>
                        <h4 class="pro-model-des"></h4>
                        <h5 class="pro-price">¥<i></i></h5>
                    </section>
                </section>
            </a>
        </section>
    </section>
    @endforeach   
</section>        
        <!--配件层-->
<section class="shop-product-floor oc-row secondary-floor">
        @foreach($parts as $k=>$v)
        <section class="col-6 col-xs-12 product-data nice-pro">
        <section class="pro-views-box">
            <a href="/home/read/{{$v->gid}}" target="_blank">
                <section class="pro-model-title">
                    <section class="title-box">
                        <h4>{{$v->gname}}</h4>
                                                <h5>¥{{Intval($v->price)}}</h5>
                                            </section>
                </section>
                <section class="product-model-views">
                    <picture>
                        <img data-src="{{$v->gpic}}" class="lazyload" alt="" />
                    </picture>
                </section>
            </a>
        </section>
    </section>
    @endforeach
    
    
    @foreach($parts_two as $k=>$v)
    <section class="col-3 col-xs-6 product-data">
        <section class="pro-views-box">
            <a href="/home/read/{{$v->gid}}" target="_blank">
                <section class="product-model-views">
                    <picture>
                        <img data-src="{{$v->gpic}}" class="lazyload" alt="" />
                    </picture>
                </section>
                <section class="pro-model-title">
                    <section class="title-box">
                        <h4>{{$v->gname}}</h4>
                                                <h5>¥{{Intval($v->price)}}</h5>
                                            </section>
                </section>
            </a>
        </section>
    </section>
    @endforeach
    
    
    
   

    
    
    
   
    
    
    
    
    
  

    
    
   

    
    
    
   

    
    
   
    
    
    
    

    
</section>                
    </section>
</section>
    <section class="shop-footer-services">
    <section class="services-wrapper">
        <section class="services-views">
            <ul class="oc-row">
                <li class="col-xs-6">
                    <i class="oc-icon oc-iconfont-guarantee"></i>
                    <span>1 年全国联保</span>
                </li>
                <li class="col-xs-6">
                    <i class="oc-icon oc-iconfont-return-goods"></i>
                    <span>7 天退货保障</span>
                </li>
                <li class="col-xs-6">
                    <i class="oc-icon oc-iconfont-exchange-goods"></i>
                    <span>30 天换货保障</span>
                </li>
                <li class="col-xs-6">
                    <i class="oc-icon oc-iconfont-delivery-light"></i>
                    <span>全场包邮</span>
                </li>
                <li class="col-xs-6">
                    <i class="oc-icon oc-iconfont-dot"></i>
                    <span>555 家售后网点</span>
                </li>
                <li class="col-xs-6">
                    <i class="oc-icon oc-iconfont-quality-goods"></i>
                    <span>正品保障</span>
                </li>
            </ul>
        </section>
    </section>
</section>
</section>


        <footer id="oc-footer" class="oc-footer miniprogram-hide">

        <section class="of-nav">
                        <nav class="of-directory">
                        <dl>
                <dt>推荐机型<b class="oc-icon oc-iconfont-expandtiny"></b></dt>
                                <dd><a href="" target="_blank">R15</a></dd>
                                <dd><a href="" target="_blank">R15梦镜版</a></dd>
                                <dd><a href="" target="_blank">A1</a></dd>
                                <dd><a href="" target="_blank">A79</a></dd>
                            </dl>
                        <dl>
                <dt>服务<b class="oc-icon oc-iconfont-expandtiny"></b></dt>
                                <dd><a href="" target="_blank">服务网点查询</a></dd>
                                <dd><a href="" target="_blank">零配件价格查询</a></dd>
                                <dd><a href="" target="_blank">官方授权网店</a></dd>
                                <dd><a href="" target="_blank">预置软件公示</a></dd>
                            </dl>
                        <dl>
                <dt>关于我们<b class="oc-icon oc-iconfont-expandtiny"></b></dt>
                                <dd><a href="" target="_blank">关于 OPPO</a></dd>
                                <dd><a href="" target="_blank">加入我们</a></dd>
                            </dl>
                        <dl>
                <dt>商务合作<b class="oc-icon oc-iconfont-expandtiny"></b></dt>
                                <dd><a href="" target="_blank">开放平台</a></dd>
                                <dd><a href="" target="_blank">采购相关</a></dd>
                            </dl>
                    </nav>
        
                <section class="of-service">
            <section class="of-serv-oppo">
                <a onclick="NTKF.im_openInPageChat('');" class="of-ico oc-btn btn-size-bottom oppo-tj" data-tj="www|a|chatClient|home">
                    <b class="oc-icon oc-iconfont-ooo"></b>
                    <span>在线客服</span>
                </a>
            </section>
            <section class="of-serv-tel">
                <h3>4001-666-888</h3>
                <p>24 小时全国热线</p>
                <a class="of-tel" href="">4001-666-888</a>
            </section>
        </section>

    </section>


        <section class="of-copyright">


    <section class="of-cp-content">
        © 2005 - 2018 OPPO 版权所有 <a href="" target="_blank">粤ICP备14056724号-2</a> 联系方式：4001-666-888 <a href="" target="_blank" title=""" class="of-gs-link"><b class="oc-icon oc-icon-gs">&nbsp;</b></a>
    </section>
    <section class="of-sns-content">
        <strong>关注我们：</strong>
        <a href="" target="_blank" class="of-sns-link"><b class="oc-icon oc-iconfont-weibo"></b><span class="oc-text-inside">oppp官方 微博</span></a>
        <a class="of-sns-link" data-trigger="qrcode-wechat"><b class="oc-icon oc-iconfont-weixin"></b><span class="oc-text-inside">oppp官方 微信</span></a>
        <a href="" target="_blank" class="of-sns-link" data-trigger="qrcode-alipay"><b class="oc-icon oc-iconfont-alipay"></b><span class="oc-text-inside">关注我们</span></a>
        <a href="" target="_blank" class="of-sns-link of-global-link"><em></em><b class="oc-icon oc-iconfont-global"></b><span>Global</span></a>
    </section>



    <section class="of-qrcode-model">
        <section class="wechat-qrcode of-qrcode-view oc-row">
            <section class="qrcode-text col-6 col-xs-12">
                <p class="text-title">用微信扫描</p>
                <p class="text-title text-title-m">保存后可在微信扫码关注</p>
                <p class="text-des">关注 OPPO 公众号</p>
            </section>
            <section class="qrcode-figure col-6 col-xs-12">
                <i>
                    <img data-src="/htmlimg/oc-qecode-wechat.png"  class="lazyload" alt=""">
                </i>
            </section>
            <a class="download-link" href="" download="oppo-wechat">保存到手机<b class="oc-icon oc-iconfont-download"></b></a>
        </section>
        <section class="alipay-qrcode of-qrcode-view oc-row">
            <section class="qrcode-text col-6 col-xs-12">
                <p class="text-title">用支付宝扫描</p>
                <p class="text-title text-title-m">保存后可在支付宝扫码关注</p>
                <p class="text-des">关注 OPPO 生活号</p>
            </section>
            <section class="qrcode-figure col-6 col-xs-12">
                <i>
                    <img data-src="/htmlimg/oc-qecode-alipay.png"  class="lazyload" alt=""">
                </i>
            </section>
            <a class="download-link" href="" download="oppo-alipay">保存到手机<b class="oc-icon oc-iconfont-download"></b></a>
        </section>
    </section>


</section>


</footer>
        
      </div>

      
      <script src="/javascript/lib.js"></script>

      <script src="/javascript/common.js"></script>


        <script src="/javascript/shop.js"></script>
        

      <script type="text/javascript">
    var xnscript = document.createElement("script");
    xnscript.src = "/js/ntkfstat.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(xnscript, s);
</script>
      <!-- 百度统计代码  -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?9cb8846b548404438c81aaa02eda4f0f";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>

<!-- 谷歌统计代码 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','','ga');

  ga('create', 'UA-66238290-1', 'auto');
  ga('send', 'pageview');
</script>

<!--oppo统计-->
<script>
var _optj = _optj || [];
//判断是否登录，有登录则输出用户ID

//加入购物车的商品ID信息

//判断是否有订单号信息 有则输出


 //判断是否有订单的商品ID信息 有则输出 多个用"|"中划线分割


(function() {
  var op = document.createElement("script");
  op.src = "/js/optj-1.1.0.min.js";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(op, s);
})();
</script>

<!-- 华扬统计 -->
<script type="text/javascript">
var _utaq = _utaq || [];
_utaq.push(["trackPageView"]);
_utaq.push(["enableLinkTracking"]);
_utaq.push(["openUtHeatMapOpen"]);
(function() {
var utu="https://sit.gentags.net/";
_utaq.push(["setTrackerUrl", utu+"site/unids.gif"]);
_utaq.push(["setSiteId", "1351"]);
if(/mobile|android|iphone|ipad|phone/i.test(navigator.userAgent.toLowerCase())) _utaq.push(["setSiteId", "1352"]);
var utd=document, ut=utd.createElement("script"), s=utd.getElementsByTagName("script")[0]; ut.type="text/javascript";
ut.defer=true; ut.async=true; ut.src="/javascript/uta.js"; s.parentNode.insertBefore(ut,s);
})();
</script>

<!--听云监测-->
<script src="/javascript/tingyun-rum.js"></script>

<script type="text/javascript">
$(function(){
  $("body").on("click",".oppo-tj",function(){
    if (typeof $(this).data('tj') != 'undefined' && typeof _optj != 'undefined') {
      var tj = $(this).data('tj');
      var tjs = tj.split("|");
      _optj.push(['_trackEvent', tjs[0], tjs[1], tjs[2], tjs[3]]);
    };
  });
});
</script>

    </body>

</html>
<!-- cached at 2018-05-10 21:00:32 -->


@endsection