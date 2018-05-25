@extends('layout.shop')   


@section('content') 
    

    
    <body class="">
        <div id="oc-wrapper" class="">
           
            <section id="oc-container">
                <section class="products-info">
                    <section class="products-wrapper">
                        <section class="pi-navigation" data-trigger="proNav@mobile">
                            <span class="pi-nav-model">
                                R15
                            </span>
                            <ul class="pi-nav-list">
                                <li>
                                    <a href="">
                                        概览
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        规格参数
                                    </a>
                                </li>
                            </ul>
                            <b class="nav-arrow">
                                <i class="oc-icon oc-iconfont-arrow">
                                </i>
                            </b>
                        </section>
                        <i class="nav-mask">
                        </i>
                        <section class="pi-details">
                            <section class="product-gallery">
                                <section class="gallery-views">
                                    <section class="gallery-stage gallery-swiper-container">
                                        <section class="gallery-list">
                                            @foreach($show as $k=>$v)
                                            <section class="gallery-item swiper-slide">
                                                <picture>
                                                    <img id="bigImg" src="{{$v->gpic}}" alt="" />
                                                </picture>
                                            </section>
                                            @endforeach
                                        </section>
                                        <section class="swiper-scrollbar">
                                            <section class="swiper-scrollbar-drag">
                                            </section>
                                        </section>
                                    </section>
                                    <section class="pic-stage">
                                        <ul class="pic-list" id="img">
                                            @foreach($show as $k=>$v)
                                            <li>
                                                <img src="{{$v->gpic}}" alt="" />
                                            </li>
                                            @endforeach
                                        </ul>
                                        <script>
                                            var imgs = document.getElementById('img').getElementsByTagName('img');
                                            var bigImg = document.getElementById('bigImg');

                                            for (var i = 0; i < imgs.length; i++) {

                                                imgs[i].onclick = function() {
                                                    var src = this.src;

                                                    bigImg.src = src;
                                                }

                                            };
                                        </script>
                                        <i class="pic-bar">
                                        </i>
                                    </section>
                                </section>
                            </section>
                            <section class="product-details">
                                <section class="details-title">
                                    <p class="product-name">
                                        {{$res->gname}}&nbsp;&nbsp;&nbsp;{{$res->color}}
                                    </p>
                                    <p class="product-text">
                                        <p class="product-text" style="color:#f79a47 ;">
                                           {{$res->descr}}
                                        </p>
                                    </p>
                                    <p class="product-price" data-price="2699.00">
                                        <span>
                                            ￥
                                        </span>
                                        {{$res->price}}
                                    </p>
                                    <section class="product-bystages">
                                        <figure class="bystages-icon">
                                            <picture>
                                                <img data-src="/htmlimg/pd-bystages.png" class="lazyload" alt="" />
                                            </picture>
                                        </figure>
                                        <span>
                                            新品上市专享 3、6 期分期免息
                                        
                                        
                                    </section>
                                </section>
                                <section class="config-list">
                                    <section class="product-config">
                                        <p class="config-name">
                                            颜色
                                        </p>
                                        <section class="btn-list" data-radio-group="ture">
                                            @foreach($color as $k=>$v)
                                            <a href="{{$v->gid}}">
                                            <section  class="oc-radio @if($res->gid == $v->gid)
                                                                            current 
                                                                        @endif
                                                ">
                                               
                                                <span class="radio-text">
                                                    {{$v->color}}
                                                </span>
                                                
                                            </section>
                                            </a>
                                            @endforeach
                                        </section>
                                        <!-- <script>

                                            
                                            $('.oc-radio').click(function(){
                                                
                                               alert();
                                                
                                            });
                                           
                                        </script> -->
                                    </section>
                                    <section class="product-config">
                                        <p class="config-name">
                                            网络
                                        </p>
                                        <section class="btn-list" data-radio-group="ture">
                                            <section class="oc-radio current " data-notnull="ture">
                                               
                                                    <input type="hidden">
                                                    <span class="radio-text">
                                                        全网通
                                                    </span>
                                               
                                            </section>
                                        </section>
                                    </section>
                                    <section class="product-config">
                                        <p class="config-name">
                                            配置
                                        </p>
                                        <section class="btn-list" data-radio-group="ture">
                                            <section class="oc-radio current" data-notnull="ture">
                                                    <input type="hidden">
                                                    <span class="radio-text">
                                                        {{$res->config}}
                                                    </span>
                                                
                                            </section>
                                            
                                        </section>
                                    </section>
                           
                                    <section class="product-config">
                                        <p class="config-name">
                                            赠品
                                        </p>
                                        <section class="gift-list oc-row">
                                            <input type="hidden" name="gift[]" value="440">
                                            <section class="gift-item col-4">
                                                <a href="" title="" " target="_blank ">
                                                <picture>
                                                <img data-src="{{$res->zp}}"  class="lazyload " alt=" "" />
                                                </picture>
                                                </a>
                                                <p>
                                                    {{$res->zname}}
                                                </p>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="product-config">
                                        <p class="config-name">
                                            选择数量
                                        </p>

                                        <section class="oc-input-number">
                                             <ul class="btn-numbox">
                                                
                                                <li>
                                                    <ul class="count">
                                                        <li><span id="num-jian" class="num-jian">-</span></li>
                                                        <li><input type="text" class="input-num" id="input-num" value="1" gid="{{$res->gid}}"/></li>
                                                        <li><span id="num-jia" class="num-jia">+</span></li>
                                                    </ul>
                                                </li>
                                                
                                    　　　  </ul>
                                        </section>
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
                                            
                                            a {
                                                text-decoration: none;
                                            }
                                            
                                            a:hover {
                                                cursor: pointer;
                                                text-decoration: none;
                                            }
                                            
                                            a:link {
                                                text-decoration: none;
                                            }
                                            
                                            img {
                                                vertical-align: middle;
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
                                            }
                                            
                                            .btn-numbox .count .num-jian,
                                            .input-num,
                                            .num-jia {
                                                display: inline-block;
                                                width: 50px;
                                                height: 50px;
                                                line-height: 50px;
                                                text-align: center;
                                                font-size: 20px;
                                                color: #999;
                                                cursor: pointer;
                                                border: 0px solid #e6e6e6;
                                            }
                                            .btn-numbox .count .input-num {
                                                width: 94px;
                                                height: 50px;
                                                color: #333;
                                                border-left: 0;
                                                border-right: 0;
                                                line-height: 50px;
                                            }
                                        </style>
                                        <script>
                                            var num_jia = document.getElementById("num-jia");
                                            var num_jian = document.getElementById("num-jian");
                                            var input_num = document.getElementById("input-num");
                                            var count;
                                            num_jia.onclick = function() {

                                                input_num.value = parseInt(input_num.value) + 1;
                                                count = input_num.value;
                                                input_num.value = count;
                                            }

                                            num_jian.onclick = function() {

                                                if(input_num.value <= 1) {
                                                    input_num.value = 1;
                                                } else {

                                                    input_num.value = parseInt(input_num.value) - 1;
                                                }
                                                count = input_num.value;
                                                input_num.value = count;
                                            }
                                                                               
                                        </script>
                                    </section>
                                </section>
                                <section class="buying-button">
                                    <section class="buying-service">
                                        <a class="service-link" onclick="NTKF.im_openInPageChat('');">
                                            <i class="oc-icon oc-iconfont-pro-service">
                                            </i>
                                        </a>
                                    </section>
                                     
                                    <section class="buying-btn-list">

                                        <a  class="oc-btn btn-master btn-size-master" id="goBuy" data-targetext="立即购买"
                                        data-sticky>
                                            立即购买
                                        </a>
                                       <script>
                                            var count = $('#input-num').attr('value');
                                            var gid = $('#input-num').attr('gid');
                                            $("#goBuy").click(function(){
                                                
                                               $.get('/cart/create',{cnt:count,gid:gid},function(data){

                                                   
                                                   window.location.href="http://201la.com/cart/index";
                                                    
                                                })
                                                
                                            });
                                        </script>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
                <section class="packing-list">
                    <section class="products-wrapper" data-trigger="locking@start">
                       
                        <section class="packing-details">
                             @foreach($det as $k=>$v)
                            <picture>
                                <img data-src="{{$v->gpic}}" class="lazyload"
                                alt="" />
                            </picture>
                            <span>
                            </span>
                            @endforeach
                        </section>
                        
                    </section>
                </section>
            </section>
            <!--右侧图钉按钮-->
            <nav id="oc-thumbtack">
                <a class="thumbtack-link" onclick="NTKF.im_openInPageChat('');">
                    <span class="oc-text-inside">
                        在线客服
                    </span>
                    <i class="oc-icon oc-iconfont-service-pc">
                    </i>
                </a>
                <a class="thumbtack-link" href="" data-trigger="gotop@web">
                    <span class="oc-text-inside">
                        返回顶部
                    </span>
                    <i class="oc-icon oc-iconfont-gotop">
                    </i>
                </a>
            </nav>
            <!--吸顶条-->
            <section id="pro-ceiling">
                <section class="products-wrapper">
                    <section class="pc-info">
                        <section class="pc-overview">
                            <section class="pc-pic">
                                <picture>
                                    <img data-src="{{$show[0]->gpic}}" 
                                    class="lazyload" alt="" " />
                                    </picture>
                                    </section>
                                    <section class="config-text ">
                                    <p class="config-name ">{{$res->gname}} {{$res->config}} {{$res->color}}     ￥{{$res->price}}</p>
                                    </section>
                                    <section class="pc-buying ">
                                    <p>
                                    <span><i>￥</i><em class="total ">{{$res->price}}</em></span>
                                    <span class="buying-number ">x1</span>
                                    </p>
                                    <div class="btn-sticky"></div>
                                    </section>
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





</footer>
        
        <script src="/javascript/lib.js">
        </script>
        <script src="/javascript/common.js">
        </script>
        <script>
            var Yo = Yo || {};

            Yo.config = {
                product_id: 471,
                isPreorder: false,
                account_url: "//my.oppo.com",
                login_url: "https://id.oppo.com/login",
                countdown_start: "2018/04/24 00:00:00",
                countdown_end: '2018/04/24 10:00:00',
                isCartDisabled: true
            };

            var is_insurance_allowed = true;
        </script>
        <script src="/javascript/oppo.login.js">
        </script>
        <script src="/javascript/products.js">
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
    </body>

</html>
@endsection