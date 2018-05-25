@extends('layout.shop')   


@section('content') 
    

    
    <body class="">
        
        
        <div id="oc-wrapper" class="shopping-cart-wrapper
        ">
            
            <i id="oc-mask">
            </i>
            <section id="oc-container">
                <section class="shopping">
                    <section class="shopping-wrapper">
                        
                        <section class="shopping-content shopping-cart">
                            <h2 class="shp-cart-title">
                                购物车
                            </h2>
                            <!--产品列表-->
                            <!--@import shopping/shopping-products-list-->
                                        <style>
                                                                                
                                    　　　　　　* {
                                                    margin: 0;
                                                    padding: 0;
                                                    border: 0;
                                                    outline: 0
                                                }
                                            ul,
                                            li {
                                                list-style: none;
                                            }
                                            
                                            
                                           
                                            
                                            .btn-numbox {
                                                overflow: hidden;
                                                margin-top:;
                                            }
                                            
                                            .btn-numbox li {
                                                float: left;
                                            }
                                            
                                            .btn-numbox li .number,
                                            .kucun {
                                                display: inline-block;
                                                font-size: 15px;
                                                color: #808080;
                                                vertical-align: sub;
                                            }
                                            
                                            .btn-numbox .count {
                                                overflow: hidden;
                                                margin: 0 0px 0 0px;
                                                border: 1px solid #e6e6e6;
                                            }
                                            
                                            .btn-numbox .count .num-jian,
                                            .input-num,
                                            .num-jia {
                                                display: inline-block;
                                                width: 33px;
                                                height: 50px;
                                                line-height: 46px;
                                                text-align: center;
                                                font-size: 20px;
                                                color: #999;
                                                cursor: pointer;
                                                border:0px solid #e6e6e6;
                                                background:white;
                                            }
                                            .btn-numbox .count .input-num {
                                                width: 82px;
                                                height: 46px;
                                                color: #333;
                                                border-left: 0;
                                                border-right: 0;
                                            }
                                        </style>
                                       
                                     

                            <section class="oc-shp-list shp-cart-list">
                                <!--item1-->
                                @foreach($cart as $k=>$v)
                              
                                    <section class="oc-shp-item">
                                        <!--行-->
                                        <ul class="shp-row">
                                            <li class="shp-col select">
                                                <div class="oc-radio-button current" data-id="156be15f56ab0d10d1887e689c350e50">
                                                    <i class="radio-button-input oc-icon oc-iconfont-check">
                                                    </i>
                                                </div>
                                            </li>
                                            <li class="shp-col image" gid="{{$v->gid}}">
                                                <img src="{{$v->show}}"
                                                alt="">
                                            </li>
                                            <li class="shp-col title">
                                                
                                                   {{$v->gname}} {{$v->config}} {{$v->color}}
                                                
                                            </li>
                                            <li class="shp-col standard-width">
                                                ¥<i class="price" data-type="price">
                                                    {{$v->price}}
                                                </i>
                                            </li>

                                     
                                            <li class="shp-col increase">
                                                <div>
                                               
                                                <ul class="btn-numbox">
                                                     <li>
                                                        <ul class="count">
                                                            <input type="button" value="-" class="num-jian">
                                                            
                                                            <input type="text" class="input-num" name="quantity" value="{{$v->cnt}}" gid=""/>
                                                        
                                                            <input type="button" value="+" class="num-jia">
                                                        </ul>
                                                    </li>
                                                </ul>
                                                
                                                    
                                                </div>
                                            </li>
                                            <li class="shp-col handle">
                                                <a  class="delete" data-id="156be15f56ab0d10d1887e689c350e50">
                                                    <b class="oc-icon oc-iconfont-delete">
                                                    </b>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--子行-->
                                        <section class="oc-shp-item shp-item-sub">
                                            <ul class="shp-row">
                                                <li class="shp-col title subtitle">
                                                    <label class="oc-label oc-label-orange">
                                                        <em>
                                                            赠品
                                                        </em>
                                                    </label>
                                                    <figure>
                                                        <img src="{{$v->zp}}"
                                                        alt="">
                                                    </figure>
                                                    
                                                       <a href="">{{$v->zname}}</a> 
                                                    
                                                </li>

                                            </ul>
                                        </section>
                                        
                                    </section>
                                 
                                @endforeach
                                      
                            </section>
                            <!--结算条-->
                            <section class="shp-cart-bar">
                                <section class="shp-cartbar-continue">
                                    <a href="/home/shop" class="shp-shopping-btn">
                                        <b class="oc-icon oc-iconfont-shopingcart-order">
                                        </b>
                                        <span>
                                            继续选购
                                        </span>
                                    </a>
                                </section>
                                <section class="shp-cartbar-total">
                                    <section class="cartbar-tota-price">
                                        <label>
                                            <span>
                                                应付:
                                            </span>
                                        </label>
                                        <strong>
                                            <span class="rmb-symbol">
                                                ￥
                                            </span>
                                            <span class="amounts">
                                               0.00
                                            </span>
                                        </strong>
                                    </section>
                                    <section class="cartbar-tota-btn">
                                        <a href="/order/create" class="oc-btn oc-radius-default btn-master btn-size-master" id="List_Go_Checkout">
                                            去结算
                                        </a>
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
        <script src="/javascript/lib.js">
        </script>
        <script src="/javascript/common.js">
        </script>
        <script src="/javascript/shopping.js">
        </script>
        <script src="/javascript/oppo.login.js">
        </script>
        <script src="/javascript/products.js">
        </script>
        <script>
            
                //加法运算
            $('.num-jia').click(function(){

                //获取数量的值
                var pv = $(this).prev().val();

                pv++;

                $(this).prev().val(pv);
                var gid = $(this).parents('ul').find('.image').attr('gid');
                var cnt = $(this).prev().val();
                $.get('/cart/cnt',{gid:gid,cnt:cnt},function(data){

                })
                func();
             })


            //减法运算
            $('.num-jian').click(function(){

                var mv = $(this).next().val();

                mv--;

                if(mv <= 1){

                    mv = 1;
                }

                $(this).next().val(mv);
                var cnt = $(this).next().val();
                var gid = $(this).parents('ul').find('.image').attr('gid');
                var cnt = $(this).next().val();
                $.get('/cart/cnt',{gid:gid,cnt:cnt},function(data){
                    
                })
                func();

             
            })

            

            function func(){

                var num = 0;
                $('.current').each(function(){

                    //获取单价
                    var pr = $(this).parents('ul').find('.price').text();

                    
                    var cnt = $(this).parents('ul').find('.input-num').val();
                    
                    num +=pr*cnt;
                    $('.amounts').text(num+'.00');

                })

            }
            func()
            $('.select').click(function(){

                func()
               
            })
           
            $('.delete').click(function(){

                var res = confirm('你确定删除吗??');

                if(!res) return;

                var tr = $(this).parents('ul').parent('section');
                
                // console.log(tr);


                //获取id
                var gid = $(this).parents('ul').find('.image').attr('gid');
                
                //发送ajax
                $.get('/cart/delete',{gid:gid},function(data){

                    console.log(data);
                    if(data != 0){

                        tr.remove();

                        func();

                    } else {
                        

                        //第二种 不刷新页面   把table的内容进行替换成一张图片
                        $('.shopping-wrapper').html(`<section class="shopping-content shopping-empty">

                                                        <section class="shp-empty-wrapper">
                                                            <figure><img src="/htmlimg/shp-empty.png"></figure>
                                                            <p>你的购物车还是空的，快去逛逛吧 。</p>
                                                            <section class="shp-goshop-link">
                                                                <a class="oc-btn oc-radius-default btn-master btn-size-master" href="/home/shop">带我去商城</a>
                                                            </section>
                                                        </section>

                                                    </section>`);
                    }
                                
                          
                           
                })
            })
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
            _optj.push(['_cart_gid', '469']);

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
                src="/javascript/gunic2.swf"
                align="middle" width="1" height="1">
            </object>
        </div>
    </body>

</html>
@endsection