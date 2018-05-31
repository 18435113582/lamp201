
@extends('layout.shop')   


@section('content')  
    <body class="">
        <div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;">
            <form name="POST_FORM_9F3E9ACC52C5415D" accept-charset="utf-8" enctype="application/x-www-form-urlencoded"
            method="POST" style="display: none;" target="POST_IFRAME_0" action="https://xiaoneng.oppo.com:9105/trail/trail/userinfo.php?action=save&amp;url=https%3A%2F%2Fwww.opposhop.cn%2Forders&amp;siteid=kf_9568&amp;uid=kf_9568_ISME9754_Qk9kTTkzS0QwbDNVak9qM1VpaG9BUT09&amp;uname=%E7%94%A8%E6%88%B7261770283&amp;device=PC&amp;isvip=0&amp;userlevel=1&amp;cid=guest3C780DAC-91CD-485F-5A51-4A51401AC5AA&amp;sid=1525960228890037&amp;log=1&amp;pageid=1525963988860&amp;etype=update&amp;edata=&amp;lan=zh-CN&amp;scr=1536*864&amp;cookie=1&amp;flash=0.0.0.0&amp;sellerid=&amp;ttl=%E3%80%8EOPPO%E5%AE%98%E7%BD%91%E5%95%86%E5%9F%8E%E3%80%8FOPPO%E6%9C%80%E6%96%B0%E6%AC%BE%E6%99%BA%E8%83%BD%E6%89%8B%E6%9C%BA%E5%9C%A8%E7%BA%BF%E8%B4%AD%E4%B9%B0_OPPO%E6%9C%80%E6%96%B0%E6%AC%BE%E6%99%BA%E8%83%BD%E6%89%8B%E6%9C%BA%E5%BF%AB%E6%8D%B7%E6%94%AF%E4%BB%98-OPPO%E6%99%BA%E8%83%BD%E6%89%8B%E6%9C%BA%E5%AE%98%E7%BD%91">
                <input name="ref" value="https%3A%2F%2Fwww.opposhop.cn%2Forders%2F180510225959920%2Fconfirmation"
                type="hidden">
            </form>
        </div>
        <div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;">
        </div>
        <div id="oc-wrapper" class="">
            
            <i id="oc-mask">
            </i>
            <section id="oc-container">
                <section class="account">
                    <section class="account-wrapper">
                        <section class="account-layout">
                            <section class="account-nav">
                                <ul>
                                    <li class="current">
                                        <a href="/order/index">
                                            我的订单
                                        </a>
                                    </li>
                                    
                                    <li class="">
                                        <a href="">
                                            优惠券
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            账户信息
                                        </a>
                                    </li>
                                </ul>
                            </section>
                           
                            <section class="account-pack">
                                 @foreach($orders as $k=>$v)
                                <section class="account-content account-order">
                                    <a href="https://www.opposhop.cn/orders/180510225959920/show" class="order-link-mobile">
                                    </a>
                                    <section class="acc-order-header">
                                        <span class="acc-order-number">
                                            订单号：
                                            <a href="/order/det/{{$v->oid}}">
                                                {{$v->oid}}
                                            </a>
                                        </span>
                                        <span class="acc-order-date">
                                            {{date('Y年m月d日 H:i:s',$v->otime)}}
                                        </span>
                                        <strong class="acc-order-status" data-status="progress   }}">
                                            {{HomeStatus($v->status)}}
                                        </strong>
                                    </section>
                                    <section class="acc-order-content acc-row">
                                        <label class="acc-col1">
                                            商品清单
                                        </label>
                                        <section class="acc-col2">
                                            <section class="oc-shp-list shp-order-list">
                                                @foreach($v->det as $kk=>$vv)
                                                <section class="oc-shp-item">
                                                    <ul class="shp-row">
                                                        <li class="shp-col image">
                                                            <img src="{{$vv->show}}">
                                                        </li>
                                                        <li class="shp-col title">
                                                            <a href="https://www.opposhop.cn/products/453.html">
                                                               {{$vv->gname}} {{$vv->color}}
                                                            </a>
                                                        </li>
                                                        <li class="shp-col number">
                                                            <span class="price">
                                                                x{{$vv->cnt}}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    @if($vv->zname)
                                                    <ul class="shp-row">
                                                        <li class="shp-col image">
                                                            &nbsp;
                                                        </li>
                                                        <li class="shp-col title">
                                                            <a href="">
                                                                {{$vv->zname}}
                                                            </a>
                                                        </li>
                                                        <li class="shp-col number">
                                                            <span class="price">
                                                                x1
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    @endif
                                                </section>
                                                @endforeach
                                            </section>
                                        </section>
                                    </section>
                                    <section class="acc-order-footer acc-row">
                                        <section class="acc-orderft-total">
                                            <label class="acc-col4">
                                                <span>
                                                    订单金额
                                                </span>
                                            </label>
                                            <section class="acc-col5">
                                                <span class="acc-order-price">
                                                    ￥{{$v->sum}}.00
                                                </span>
                                            </section>
                                        </section>
                                        <section class="acc-col2 acc-orderft-btn">
                                            @if($v->status == 2)
                                            <a class="oc-btn btn-lesser btn-size-basic btn-acc-giveuporder qr" data-message="acc-giveuporder-layer"
                                            data-order-serial="180510225959920">
                                                确认收货
                                            </a>
                                            @endif
                                            @if($v->status == 1)
                                            <a class="oc-btn btn-lesser btn-size-basic btn-acc-giveuporder qx" data-message="acc-giveuporder-layer"
                                            data-order-serial="180510225959920">
                                                取消订单
                                            </a>
                                            @endif
                                            
                                        </section>

                                        
                                    </section>
                                </section>
                                @endforeach
                                <script>
                                            $('.qr').click(function(){

                                                var qr = confirm('您收到货了吗？');

                                                if(!qr) return false;
                                                var oid = $(this).parent().parent().parent().find('a').eq(1).text();
                                                
                                                
                                                var status = $(this).parent().parent().parent().find('strong');
                                                
                                                var me = this;

                                                $.get('/order/status',{oid:oid},function(data){
                                                    
                                                    if(data == 1){

                                                        status.text('交易完成');
                                                        me.remove();
                                                    }

                                                });
                                            });   
                                             $('.qx').click(function(){

                                                 var qr = confirm('您确定取消订单吗？');

                                                 if(!qr) return false;
                                                 var oid = $(this).parent().parent().parent().find('a').eq(1).text();

                                                var status =$(this).parent().parent().parent().find('strong');
                                                var me = this;

                                                $.get('/order/cancel',{oid:oid},function(data){

                                                    if(data == 1){

                                                        status.text('已取消');
                                                        me.remove();
                                                    }

                                                });
                                            });     

                                        </script>
                            </section>
                            
                        </section>
                    </section>
                </section>
            </section>
            <footer id="oc-footer" class="oc-footer miniprogram-hide">
                <section class="of-nav">
                    <nav class="of-directory">
                        <dl>
                            <dt>
                                推荐机型
                                <b class="oc-icon oc-iconfont-expandtiny">
                                </b>
                            </dt>
                            <dd>
                                <a href="https://www.opposhop.cn/products/471.html" target="_blank">
                                    R15
                                </a>
                            </dd>
                            <dd>
                                <a href="https://www.opposhop.cn/products/469.html" target="_blank">
                                    R15梦镜版
                                </a>
                            </dd>
                            <dd>
                                <a href="https://www.opposhop.cn/products/467.html" target="_blank">
                                    A1
                                </a>
                            </dd>
                            <dd>
                                <a href="https://www.opposhop.cn/products/445.html" target="_blank">
                                    A79
                                </a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                服务
                                <b class="oc-icon oc-iconfont-expandtiny">
                                </b>
                            </dt>
                            <dd>
                                <a href="https://www.oppo.com/cn/service/map" target="_blank">
                                    服务网点查询
                                </a>
                            </dd>
                            <dd>
                                <a href="https://www.oppo.com/cn/service/part" target="_blank">
                                    零配件价格查询
                                </a>
                            </dd>
                            <dd>
                                <a href="https://www.oppo.com/cn/service/store" target="_blank">
                                    官方授权网店
                                </a>
                            </dd>
                            <dd>
                                <a href="http://www.coloros.com/presoftware/index.html" target="_blank">
                                    预置软件公示
                                </a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                关于我们
                                <b class="oc-icon oc-iconfont-expandtiny">
                                </b>
                            </dt>
                            <dd>
                                <a href="https://www.oppo.com/cn/blogs/about" target="_blank">
                                    关于 OPPO
                                </a>
                            </dd>
                            <dd>
                                <a href="http://career.oppo.com/" target="_blank">
                                    加入我们
                                </a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                商务合作
                                <b class="oc-icon oc-iconfont-expandtiny">
                                </b>
                            </dt>
                            <dd>
                                <a href="http://open.oppomobile.com/" target="_blank">
                                    开放平台
                                </a>
                            </dd>
                            <dd>
                                <a href="https://www.oppo.com/cn/service/help/605?name=sourcing" target="_blank">
                                    采购相关
                                </a>
                            </dd>
                        </dl>
                    </nav>
                    <section class="of-service">
                        <section class="of-serv-oppo">
                            <a onclick="NTKF.im_openInPageChat('');" class="of-ico oc-btn btn-size-bottom oppo-tj"
                            data-tj="www|a|chatClient|home">
                                <b class="oc-icon oc-iconfont-ooo">
                                </b>
                                <span>
                                    在线客服
                                </span>
                            </a>
                        </section>
                        <section class="of-serv-tel">
                            <h3>
                                4001-666-888
                            </h3>
                            <p>
                                24 小时全国热线
                            </p>
                            <a class="of-tel" href="tel:4001-666-888">
                                4001-666-888
                            </a>
                        </section>
                    </section>
                </section>
                <section class="of-copyright">
                    <section class="of-cp-content">
                        © 2005 - 2018 OPPO 版权所有
                        <a href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"
                        target="_blank">
                            粤ICP备14056724号-2
                        </a>
                        联系方式：4001-666-888
                        <a href="http://wljg.gdgs.gov.cn/corpsrch.aspx?key=441900001042573" target="_blank"
                        title="企业名称：东莞市永盛通信科技有限公司
                        法定代表人：吴强
                        标识状态：已激活 粤工商备P191703000418" class="of-gs-link">
                            <b class="oc-icon oc-icon-gs">
                                &nbsp;
                            </b>
                        </a>
                    </section>
                    <section class="of-sns-content">
                        <strong>
                            关注我们：
                        </strong>
                        <a href="http://weibo.com/oppo" target="_blank" class="of-sns-link">
                            <b class="oc-icon oc-iconfont-weibo">
                            </b>
                            <span class="oc-text-inside">
                                oppp官方 微博
                            </span>
                        </a>
                        <a class="of-sns-link" data-trigger="qrcode-wechat">
                            <b class="oc-icon oc-iconfont-weixin">
                            </b>
                            <span class="oc-text-inside">
                                oppp官方 微信
                            </span>
                        </a>
                        <a href="http://p.alipay.com/P/iNeaUvUf" target="_blank" class="of-sns-link"
                        data-trigger="qrcode-alipay">
                            <b class="oc-icon oc-iconfont-alipay">
                            </b>
                            <span class="oc-text-inside">
                                关注我们
                            </span>
                        </a>
                        <a href="https://www.oppo.com/cn/global" target="_blank" class="of-sns-link of-global-link">
                            <em>
                            </em>
                            <b class="oc-icon oc-iconfont-global">
                            </b>
                            <span>
                                Global
                            </span>
                        </a>
                    </section>
                    <section class="of-qrcode-model" style="visibility: hidden; opacity: 0; transform: matrix(1, 0, 0, 1, 0, 15);">
                        <section class="wechat-qrcode of-qrcode-view oc-row">
                            <section class="qrcode-text col-6 col-xs-12">
                                <p class="text-title">
                                    用微信扫描
                                </p>
                                <p class="text-title text-title-m">
                                    保存后可在微信扫码关注
                                </p>
                                <p class="text-des">
                                    关注 OPPO 公众号
                                </p>
                            </section>
                            <section class="qrcode-figure col-6 col-xs-12">
                                <i>
                                    <img data-src="https://shopfs.myoppo.com/shop/dist/common/images/oc-qecode-wechat.png"
                                    data-srcset="https://shopfs.myoppo.com/shop/dist/common/images/oc-qecode-wechat-x2.png 2x, https://shopfs.myoppo.com/shop/dist/common/images/oc-qecode-wechat.png 1x"
                                    class="lazyload" alt="OPPO 公众号">
                                </i>
                            </section>
                            <a class="download-link" href="https://shopfs.myoppo.com/shop/dist/common/images/oc-qecode-wechat-x2.png"
                            download="oppo-wechat">
                                保存到手机
                                <b class="oc-icon oc-iconfont-download">
                                </b>
                            </a>
                        </section>
                        <section class="alipay-qrcode of-qrcode-view oc-row">
                            <section class="qrcode-text col-6 col-xs-12">
                                <p class="text-title">
                                    用支付宝扫描
                                </p>
                                <p class="text-title text-title-m">
                                    保存后可在支付宝扫码关注
                                </p>
                                <p class="text-des">
                                    关注 OPPO 生活号
                                </p>
                            </section>
                            <section class="qrcode-figure col-6 col-xs-12">
                                <i>
                                    <img data-src="https://shopfs.myoppo.com/shop/dist/common/images/oc-qecode-alipay.png"
                                    data-srcset="https://shopfs.myoppo.com/shop/dist/common/images/oc-qecode-alipay-x2.png 2x, https://shopfs.myoppo.com/shop/dist/common/images/oc-qecode-alipay.png 1x"
                                    class="lazyload" alt="OPPO 生活号">
                                </i>
                            </section>
                            <a class="download-link" href="https://shopfs.myoppo.com/shop/dist/common/images/oc-qecode-wechat-x2.png"
                            download="oppo-alipay">
                                保存到手机
                                <b class="oc-icon oc-iconfont-download">
                                </b>
                            </a>
                        </section>
                    </section>
                </section>
            </footer>
        </div>
        <section class="oc-model acc-delivery-layer mask-index-top" data-model="acc-delivery-layer">
            <i class="close-btn" data-trigger="model@close">
            </i>
            <section class="model-title">
                <h3>
                </h3>
            </section>
            <section class="model-content">
                <section class="acc-det-delivery">
                    <section class="acc-delivery-overviews">
                        <section class="acc-deover-col">
                            <b class="oc-icon oc-iconfont-delivery">
                            </b>
                            <label>
                                物流公司：
                            </label>
                            <span>
                            </span>
                        </section>
                        <section class="acc-deover-col">
                            <label class="acc-deover-number">
                                物流单号：
                                <span>
                                </span>
                            </label>
                            <a class="acc-ordt-copy acc-popup-copybtn" data-copy="复制运单号" data-popper-position="center"
                            data-content="" href="javascript:%20void(0);">
                                <span>
                                    复制
                                </span>
                            </a>
                        </section>
                    </section>
                    <section class="acc-delivery-content">
                        <h3>
                            订单跟踪
                        </h3>
                        <section class="acc-delivery-list">
                        </section>
                    </section>
                </section>
            </section>
        </section>
       
        <script src="/javascript/lib.js">
        </script>
        <script src="/javascript/common.js">
        </script>
        <script src="/javascript/account.js">
        </script>
        <script type="text/javascript">
            var xnscript = document.createElement("script");
            xnscript.src = "https://xiaoneng.oppo.com:9091/js/xn6/ntkfstat.js?siteid=kf_9568";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(xnscript, s);
        </script>
        <!-- 百度统计代码 -->
        <script>
            var _hmt = _hmt || []; (function() {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?9cb8846b548404438c81aaa02eda4f0f";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        <!-- 谷歌统计代码 -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] ||
                function() { (i[r].q = i[r].q || []).push(arguments)
                },
                i[r].l = 1 * new Date();
                a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-66238290-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!--oppo统计-->
        <script>
            var _optj = _optj || [];
            //判断是否登录，有登录则输出用户ID
            _optj.push(['_uid', '367076454']);

            //加入购物车的商品ID信息
            //判断是否有订单号信息 有则输出

            //判断是否有订单的商品ID信息 有则输出 多个用"|"中划线分割

            (function() {
                var op = document.createElement("script");
                op.src = "//shopfs.myoppo.com/hd/static/js/optj-1.1.0.min.js";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(op, s);
            })();
        </script>
        <!-- 华扬统计 -->
        <script type="text/javascript">
            var _utaq = _utaq || [];
            _utaq.push(["trackPageView"]);
            _utaq.push(["enableLinkTracking"]);
            _utaq.push(["openUtHeatMapOpen"]); (function() {
                var utu = "https://sit.gentags.net/";
                _utaq.push(["setTrackerUrl", utu + "site/unids.gif"]);
                _utaq.push(["setSiteId", "1351"]);
                if (/mobile|android|iphone|ipad|phone/i.test(navigator.userAgent.toLowerCase())) _utaq.push(["setSiteId", "1352"]);
                var utd = document,
                ut = utd.createElement("script"),
                s = utd.getElementsByTagName("script")[0];
                ut.type = "text/javascript";
                ut.defer = true;
                ut.async = true;
                ut.src = "//shopfs.myoppo.com/hd/static/js/uta.js";
                s.parentNode.insertBefore(ut, s);
            })();
        </script>
        <!--听云监测-->
        <script src="/javascript/tingyun-rum.js">
        </script>
        <script type="text/javascript">
            $(function() {
                $("body").on("click", ".oppo-tj",
                function() {
                    if (typeof $(this).data('tj') != 'undefined' && typeof _optj != 'undefined') {
                        var tj = $(this).data('tj');
                        var tjs = tj.split("|");
                        _optj.push(['_trackEvent', tjs[0], tjs[1], tjs[2], tjs[3]]);
                    };
                });
            });
        </script>
        <div id="UniSwfStore_uniswfstore_0" style="position: absolute; top: -2000px; left: -2000px;">
            <object codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"
            id="UniSwfStore_uniswfstore_1" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
            width="1" height="1">
                <param value="https://sit.gentags.net/adagent/gunic2.swf" name="movie">
                <param value="logfn=UniSwfStore.uniswfstore.log&amp;" name="FlashVars">
                <param value="always" name="allowScriptAccess">
                <embed pluginspage="https://www.macromedia.com/go/getflashplayer" flashvars="logfn=UniSwfStore.uniswfstore.log&amp;"
                type="application/x-shockwave-flash" allowscriptaccess="always" quality="high"
                loop="false" play="true" name="UniSwfStore_uniswfstore_1" bgcolor="#ffffff"
                src="/javascript/gunic2.swf" align="middle" width="1" height="1">
            </object>
        </div>
    </body>

</html>
@endsection