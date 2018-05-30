@extends('layout.shop')   


@section('content') 

    <body class="">
        <div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;">
        </div>
        <div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;">
        </div>
        <div id="oc-wrapper" class="main-account-order-detail
        ">
           
            <i id="oc-mask">
            </i>
            <section id="oc-container">
                <section class="account">
                    <section class="account-wrapper">
                        <section class="account-layout">
                            <section class="account-nav">
                                <ul>
                                    <li class="current">
                                        <a href="https://www.opposhop.cn/orders">
                                            我的订单
                                        </a>
                                    </li>
                                   
                                    <li class="">
                                        <a href="https://www.opposhop.cn/coupons/show">
                                            优惠券
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://id.oppo.com/account/profile?callback=%2F%2Fwww.opposhop.cn">
                                            账户信息
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <section class="account-pack">
                                <section class="account-content account-order-detail">
                                    <section class="acc-row acc-orderdetail-info" data-status="wait">
                                        <section class="acc-col6">
                                            <figure class="acc-ordt-img">
                                            </figure>
                                            <section class="acc-ordt-text">
                                                <h2>
                                                    {{HomeStatus($order->status)}}
                                                </h2>
                                                <p>
                                                    订单号：{{$order->oid}}
                                                    <a class="acc-ordt-copy acc-view-copybtn" data-copy="复制订单号" data-content="180522205704195"
                                                    href="javascript:%20void(0);">
                                                        <span>
                                                            复制
                                                        </span>
                                                    </a>
                                                </p>
                                            </section>
                                        </section>
                                        <section class="acc-col6">
                                            <section class="acc-ordt-date">
                                                {{date('Y年m月d日 H:i:s',$order->otime)}}
                                            </section>
                                        </section>
                                    </section>
                                    
                                    <section class="acc-row acc-orderdetail-devpay">
                                        <section class="acc-col6">
                                            <ul>
                                                <li>
                                                    <label>
                                                        收件人
                                                    </label>
                                                    <section>
                                                        {{$order->rec}}
                                                    </section>
                                                </li>
                                                <li>
                                                    <label>
                                                        联系电话
                                                    </label>
                                                    <section>
                                                        {{$order->tel}}
                                                    </section>
                                                </li>
                                                <li>
                                                    <label>
                                                        配送地址
                                                    </label>
                                                    <section>
                                                        {{$order->addr}}
                                                    </section>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="acc-col6">
                                            <ul>
                                                <li>
                                                    <label>
                                                        支付方式
                                                    </label>
                                                    <section>
                                                        <span class="no-icon">
                                                            货到付款
                                                        </span>
                                                    </section>
                                                </li>
                                                <li>
                                                    <label>
                                                        配送方式
                                                    </label>
                                                    <section>
                                                        顺丰速运
                                                    </section>
                                                </li>
                                                <li>
                                                    <label>
                                                        发票抬头
                                                    </label>
                                                    <section>
                                                        {{$order->fapiao}}
                                                        
                                                    </section>
                                                </li>
                                            </ul>
                                        </section>
                                    </section>
                                    <section class="acc-row acc-orderdetail-goods">
                                        <section class="acc-col1">
                                            商品清单
                                        </section>
                                        <section class="acc-col2">
                                            <section class="oc-shp-list shp-order-list">
												@foreach($order_det as $k=>$v)
                                                <section class="oc-shp-item">
                                                    <ul class="shp-row">
                                                        <li class="shp-col image">
                                                            <a href="https://www.opposhop.cn/products/469.html" target="_blank">
                                                                <img src="{{$v->show}}">
                                                            </a>
                                                        </li>
                                                        <li class="shp-col title">
                                                            <a href="https://www.opposhop.cn/products/469.html" target="_blank">
                                                                <span class="text">
                                                                    {{$v->gname}}  {{$v->config}} {{$v->color}}
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="shp-col standard-width">
                                                            <span class="price">
                                                                ￥{{$v->price}}.00
                                                            </span>
                                                        </li>
                                                        <li class="shp-col number">
                                                            <span class="price">
                                                                x{{$v->cnt}}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                     @if($v->zname)
                                                    <section class="oc-shp-item shp-item-sub">
                                                        <ul class="shp-row">
                                                            <li class="shp-col title subtitle">
                                                                <label class="oc-label oc-label-orange">
                                                                    <em>
                                                                        赠品
                                                                    </em>
                                                                </label>
                                                                <figure>
                                                                    <a href="https://www.opposhop.cn/products/440.html" target="_blank">
                                                                        <img src="{{$v->zp}}"
                                                                        alt="蓝牙音箱M11">
                                                                    </a>
                                                                </figure>
                                                                <a href="https://www.opposhop.cn/products/440.html" target="_blank">
                                                                    <span class="text">
                                                                        {{$v->zname}}
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </section>
                                                    @endif
                                                </section>
												@endforeach
                                            </section>
                                        </section>
                                    </section>
                                    <section class="shp-checkout-bar">
                                        <section class="shp-checkoutbar-subtotal">
                                            <ul>
                                                <li>
                                                    <label>
                                                        商品数量
                                                    </label>
                                                    <span>
                                                        {{$order->cnt}}
                                                    </span>
                                                </li>
                                                <li>
                                                    <label>
                                                        商品总额
                                                    </label>
                                                    <span>
                                                        ￥{{$order->sum}}.00
                                                    </span>
                                                </li>
                                               
                                                
                                                <li>
                                                    <label>
                                                        邮费
                                                    </label>
                                                    <span>
                                                        ￥0.00
                                                    </span>
                                                </li>
                                            </ul>
                                        </section>
                                        <section class="shp-checkoutbar-total">
                                            <section class="checkoutbar-tota-price">
                                                <label>
                                                    订单金额:
                                                </label>
                                                <strong>
                                                    <span>
                                                        ￥
                                                    </span>
                                                   {{$order->sum}}.00
                                                </strong>
                                            </section>
                                            <section class="acc-orderft-btn">
                                            </section>
                                        </section>
                                    </section>
                                </section>
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
                                顺丰速运
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
        <section class="oc-model acc-giveuporder-layer mask-index-top oc-poper-notes"
        data-model="acc-giveuporder-layer">
            <i class="close-btn" data-trigger="model@close">
            </i>
            <section class="model-title">
                <h3>
                </h3>
            </section>
            <section class="model-content">
                <section class="oc-poper-content">
                    <section class="oc-popnotes-title">
                        <h2>
                            请确认取消订单?
                        </h2>
                    </section>
                    <section class="oc-popnotes-btn">
                        <a class="oc-btn btn-master btn-size-alter btn-order-confirm">
                            确定取消
                        </a>
                        <a class="oc-btn btn-bottom btn-size-alter btn-order-cancle">
                            不取消
                        </a>
                    </section>
                </section>
            </section>
        </section>
        <section class="oc-model sms-model mask-index-top  " data-model="sms-model">
            <i class="close-btn" data-trigger="model@close">
            </i>
            <section class="model-title ">
                <h3>
                </h3>
            </section>
            <section class="model-content">
                <section class="sms-model-content">
                    <section class="sms-wrapper">
                        <input data-message="sms-model" type="hidden">
                        <p class="sms-title">
                            输入您的激活码
                        </p>
                        <section class="sms-input">
                            <input name="sms_id" value="" type="hidden">
                            <section class="oc-input">
                                <input class="oc-input-default oc-radius-default" name="sms_mobile" data-rule="checkCode"
                                placeholder="请输入激活码" type="text">
                                <span class="input-warning-text">
                                    请输入有效的激活码。
                                </span>
                            </section>
                            <div class="sms-captcha">
                                <section class="oc-input">
                                    <input class="oc-input-default oc-radius-default" name="sms_captcha" placeholder="请输入验证码"
                                    data-rule="captcha" type="text">
                                    <span class="input-warning-text">
                                        输入的验证码有误
                                    </span>
                                </section>
                                <section class="captcha-pic">
                                    <img id="sms-captcha">
                                </section>
                            </div>
                        </section>
                        <section class="sms-message">
                        </section>
                        <section class="sms-submit">
                            <a class="oc-btn btn-master btn-size-longer" id="send-btn" data-url="/orders/huanxin"
                            data-serial="180522205704195">
                                提交
                            </a>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <section class="oc-model success-model mask-index-top  " data-model="success-model">
            <i class="close-btn" data-trigger="model@close">
            </i>
            <section class="model-title ">
                <h3>
                </h3>
            </section>
            <section class="model-content">
                <section class="success-model-content">
                    <section class="success-wrapper">
                        <input data-message="success-model" type="hidden">
                        <section class="success-text">
                            <i class="oc-icon oc-iconfont-success">
                            </i>
                            <span>
                                提交成功
                            </span>
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
            xnscript.src = "https://xiaoneng.oppo.com/js/xn6/ntkfstat.js?siteid=kf_9568";
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
            _optj.push(['_order_no', '180522205704195']);

            //判断是否有订单的商品ID信息 有则输出 多个用"|"中划线分割
            _optj.push(['_order_gid', '469|440']);

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
                src="/javascript/gunic2.swf"
                align="middle" width="1" height="1">
            </object>
        </div>
    </body>

</html>
@endsection