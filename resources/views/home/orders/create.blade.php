@extends('layout.shop')   


@section('content') 
    <body class="">
        <div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;">
        </div>
        <div id="nTalk_post_hiddenElement" style="left: -10px; top: -10px; visibility: hidden; display: none; width: 1px; height: 1px;">
        </div>
        <nav id="oc-mobile-header">
            <a href="https://www.opposhop.cn/" class="mb-header-return">
                <b>
                </b>
            </a>
            <section class="mb-header-wrapper">
                <h2>
                    提交订单
                </h2>
                <h3>
                </h3>
            </section>
        </nav>
        <div id="oc-wrapper" class="shopping-checkout-wrapper
        ">
            
            <i id="oc-mask">
            </i>
            <section id="oc-container">
                <section class="shopping">
                    <section class="shopping-wrapper">
                        
                        <!--发票-->
                        
                        <!--地址-->
                    <form action="/order/save" method="post">  
                        <section class="shopping-content shopping-checkout shp-checkout-order">
                            <!--产品清单-->
                            <section class="shp-chout-row">
                                <label class="shp-chout-col1">
                                    商品清单
                                </label>
                                <section class="shp-chout-col2">
                                    <!--产品列表-->
                                    <!--@import shopping/shopping-products-list-->
                                    <section class="oc-shp-list shp-order-list">
                                        @foreach($carts as $k=>$v)
                                        <section class="oc-shp-item">
                                            <!--行-->
                                            <ul class="shp-row">
                                                <li class="shp-col image">
                                                    <img src="{{$v->show}}" alt="">
                                                </li>
                                                <li class="shp-col title">
                                                    <span class="text">
                                                        {{$v->gname}} {{$v->color}}
                                                    </span>
                                                </li>
                                                <li class="shp-col standard-width">
                                                    <span class="price">
                                                        ￥ {{$v->price}}
                                                    </span>
                                                </li>
                                                <li class="shp-col number">
                                                    <span class="price">
                                                        x{{$v->cnt}}
                                                    </span>
                                                </li>
                                            </ul>
                                            <!--子行-->
                                            <section class="oc-shp-item shp-item-sub">
                                                <ul class="shp-row">
                                                    <li class="shp-col subtitle standard-width">
                                                        <figure>
                                                            <img src="{{$v->zp}}" alt="">
                                                        </figure>
                                                        <span class="text">
                                                            {{$v->zname}}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </section>
                                        </section>
                                        @endforeach
                                    </section>
                                </section>
                            </section>
                           
                            <section class="shp-chout-row shp-chout-address-choose hide ">
                                <label class="shp-chout-col1">
                                    配送信息
                                </label>
                            </section>
                            <section class="oc-addaddressfield shp-chout-row shp-chout-address-add ">
                                <label class="shp-chout-col1">
                                    收货人信息
                                </label>
                                <section class="shp-chout-col2">
                                    <ul class="shp-chout-list">
                                        <li class="shp-chout-item shp-chout-gutter">
                                            <div class="oc-input shp-chout-gutter size-small color-gray" data-field-name="receiver">
                                                <input class="oc-input-default" placeholder="姓名" data-rule="check" type="text" name="rec" data-error=""
                                                type="text">
                                                <span class="input-warning-text">
                                                    姓名不能为空。
                                                </span>
                                            </div>
                                            <div class="oc-input shp-chout-gutter size-small color-gray" data-field-name="mobile">
                                                <input class="oc-input-default" type="text" name="tel" placeholder="电话" data-rule="phone" data-error=""
                                                type="text">
                                                <span class="input-warning-text">
                                                    请输入有效的电话号码。
                                                </span>
                                            </div>
                                        </li>
                                        <li class="shp-chout-item shp-chout-gutter shp-chout-selectwrap">
                                        </li>
                                        <li class="shp-chout-item shp-chout-gutter">
                                            <div class="oc-input shp-chout-gutter size-large color-gray" data-field-name="detail">
                                                <input class="oc-input-default" type="text" name="addr" placeholder="收货地址" data-rule="check" data-error=""
                                                type="text">
                                                <span class="input-warning-text">
                                                    详细地址不能为空。
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </section>
                       
                       
                            <section class="shp-chout-row">
                                <label class="shp-chout-col1">
                                    电子发票
                                    <b class="oc-icon oc-iconfont-doubt whattickes" data-popper="invoice-whattickes-popper">
                                    </b>
                                </label>
                                <section class="shp-chout-col2">
                                    <ul class="shp-chout-list">
                                        <li class="shp-chout-item shp-invitem-choose" data-radio-btn-group="ture">
                                            <div class="oc-radio-button shp-chout-radio current" data-id="personage"
                                            data-notnull="true">
                                                <i class="radio-button-input oc-icon oc-iconfont-check">
                                                </i>
                                                <span class="radio-button-text">
                                                    个人
                                                </span>
                                            </div>
                                        </li>
                                        <li class="shp-chout-item shp-chout-gutter invoice-personage">
                                            <div class="oc-input shp-chout-gutter size-large color-gray invoice-personage-title">
                                                <input class="oc-input-default" placeholder="请填写发票抬头" type="text" name="fapiao" data-rule="check" type="text">
                                                <span class="input-warning-text">
                                                    请填写发票抬头。
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </section>
                            <section class="shp-chout-row chout-invoice-payment fixed-top border-top">
                                <label class="shp-chout-col1">
                                    支付方式
                                </label>
                                <section class="shp-chout-col2">
                                    <ul class="shp-chout-list">
                                        <li class="shp-chout-item shp-chout-gutter" data-radio-group="ture">
                                            <section class="shp-chout-gutter">
                                                <div class="oc-radio color-gray size-small current chout-invoice-payment-0"
                                                data-notnull="true" data-payment-id="0" data-payment-fee="0" data-shipping-fee="0"
                                                data-shipping-id="7" data-payment-type="online">
                                                    <span class="radio-text">
                                                        货到付款
                                                    </span>
                                                </div>
                                            </section>
                                            
                                        </li>
                                    </ul>
                                </section>
                            </section>
                      
                           
                            <!--结算条-->
                            <section class="shp-checkout-bar">
                                <section class="shp-checkoutbar-subtotal">
                                    <ul>
                                        <li>
                                            <label>
                                                商品数量
                                            </label>
                                            <span>
                                                2
                                            </span>
                                        </li>
                                        <li>
                                            <label>
                                                商品总额
                                            </label>
                                            <span data-type="goods">
                                                ￥{{$sum}}.00
                                            </span>
                                        </li>
                                        
                                        <li>
                                            <label>
                                                货到付款手续费
                                            </label>
                                            <span data-type="delivery">
                                                ￥0.00
                                            </span>
                                        </li>
                                        <li>
                                            <label>
                                                邮费
                                            </label>
                                            <span data-type="postage">
                                                ￥0.00
                                            </span>
                                        </li>
                                    </ul>
                                </section>
                                <section class="shp-checkoutbar-total">
                                    <section class="checkoutbar-tota-price">
                                        <label>
                                            应付:
                                        </label>
                                        <strong>
                                            <span class="money">
                                                ￥
                                            </span>
                                            <span class="price">
                                                {{$sum}}.00
                                            </span>
                                        </strong>
                                    </section>
                                    {{csrf_field()}}
                                    <section class="checkoutbar-tota-btn">
                                        <input type="submit" value="买买买" class="oc-btn oc-radius-default btn-master btn-size-master" data-quickbuy="1" style="border:2px solid #00CC99">
                                    </section>
                                </section>
                            </section>
                        </section>
                        </form>
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
            <section class="oc-pageflow-layer shp-addressmobile-layer hide" data-model="shp-addressmobile-layer"
            data-title="选择配送地址">
                <section class="pageflow-wrapper">
                    <section class="oc-addaddressfield-mobile shopping-content shopping-checkout shp-checkout-addaddressmobile hide">
                        <section class="oc-addaddressfield-wrapper shp-chout-addresswrapper">
                            <ul>
                                <li>
                                    <div class="oc-input shp-chout-gutter size-small color-gray" data-field-name="receiver">
                                        <input class="oc-input-default" data-rule="check" placeholder="收件人姓名"
                                        type="text">
                                        <span class="input-warning-text">
                                            姓名不能为空。
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="oc-input shp-chout-gutter size-small color-gray" data-field-name="mobile">
                                        <input class="oc-input-default" placeholder="手机号码" data-rule="phone" type="tel">
                                        <span class="input-warning-text">
                                            请输入有效的电话号码。
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <!--移动端选择-->
                                    <section class="oc-select-mobile select-address-mobile" data-select-mobile="address"
                                    data-field-name="address">
                                        <div class="select-input">
                                            <i class="select-input-icon oc-icon oc-iconfont-arrow">
                                            </i>
                                            <span class="select-input-text">
                                                选择省、市、区
                                            </span>
                                        </div>
                                        <span class="input-warning-text">
                                            地址不能为空。
                                        </span>
                                    </section>
                                </li>
                                <li>
                                    <div class="oc-input shp-chout-gutter size-small color-gray" data-field-name="detail">
                                        <input class="oc-input-default" data-rule="check" placeholder="详细街道地址"
                                        type="text">
                                        <span class="input-warning-text">
                                            详细地址不能为空。
                                        </span>
                                    </div>
                                </li>
                                <li class="oc-addaddress-btns chout-addaddress-btn">
                                    <a class="shp-chout-gutter oc-btn oc-radius-default btn-lesser btn-size-basic oc-cancle-btn"
                                    href="#">
                                        取消
                                    </a>
                                    <a class="shp-chout-gutter oc-btn oc-radius-default btn-basic btn-size-basic oc-save-btn"
                                    href="#">
                                        保存地址
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </section>
                    <section class="pageflow-addaddress-btn">
                        <a class="shp-chout-gutter oc-btn oc-radius-default btn-basic btn-size-basic"
                        href="#">
                            添加新地址
                        </a>
                    </section>
                </section>
            </section>
        </div>
        <section class="oc-popper invoice-whattickes-popper mask-index-top hide"
        data-model="invoice-whattickes-popper" data-title="电子发票说明">
            <section class="popoer-title">
                <h3>
                    电子发票说明
                </h3>
            </section>
            <section class="popper-wrapper">
                <p>
                    电子发票法律效力、基本用途及使用规定同纸质发票，可在订单详情中查看和下载，打印后可用于报销且不易丢失。
                </p>
                <p>
                    发票一经开具，不可修改发票抬头。
                </p>
                <p>
                    企业型发票必须填写纳税人识别号，一般为 15、18 或 20位纯数字或数字加大写字母组合。
                </p>
                <section class="popper-link">
                    <a href="https://hd.oppo.com/act/2016/e-invoice/index.html" target="_blank">
                        查看更多 &gt;
                    </a>
                </section>
            </section>
        </section>
        <section class="oc-select-mobile-dropdown tickets-select-mobile mask-index-top hide"
        data-model="tickets-select-mobile" data-title="优惠券选择">
            <section class="mobile-dropdown-wrapper">
                <div class="select-dropdown select-titckets">
                    <ul class="select-dropdown-list">
                    </ul>
                </div>
            </section>
        </section>
        <script src="/javascript/lib.js">
        </script>
        <script src="/javascript/common.js">
        </script>
        <script src="/javascript/shopping.js">
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
            _optj.push(['_cart_gid', '478']);

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
        <section class="oc-dialog hide">
            <a href="#" class="dialog-close">
            </a>
            <section class="dialog-wrapper">
                <section class="dialog-content">
                    <h3>
                        是否保存已编辑地址
                    </h3>
                </section>
                <section class="dialog-button">
                    <a class="oc-btn btn-master btn-size-alter" href="#">
                        保存
                    </a>
                    <a class="oc-btn btn-bottom btn-size-alter" href="#">
                        不保存
                    </a>
                </section>
            </section>
        </section>
        <section class="oc-dialog hide">
            <a href="#" class="dialog-close">
            </a>
            <section class="dialog-wrapper">
                <section class="dialog-content">
                    <h3>
                        配送信息未填写完整
                    </h3>
                </section>
                <section class="dialog-button">
                    <a class="oc-btn btn-master btn-size-alter" href="#">
                        继续填写
                    </a>
                    <a class="oc-btn btn-bottom btn-size-alter" href="#">
                        不填写
                    </a>
                </section>
            </section>
        </section>
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