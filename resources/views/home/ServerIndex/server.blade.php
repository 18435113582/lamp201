@extends('layout.home')

@section('title',$title)

@section('content')

<link media="all" type="text/css" rel="stylesheet" href="/server/css/home.css">

<i id="oc-mask"></i>        
                                
            <section id="oc-container">

        <section class="service-high-stage">
    <seciton class="service-high-bg">
                <picture>
            <img src="/server/images/201712041012275a255c0364897.jpg">
        </picture>
            </seciton>
    <section class="service-high-title">
        <h2>真诚服务 如友相随</h2>
        <h3>欢迎使用 OPPO 服务</h3>
        <seciton class="oc-input-search">
            <seciton class="association-stage">
                <p class="ass-title">热门搜索：</p>
                <ul class="ass-list"></ul>
            </seciton>
        </seciton>
    </section>
</section>
        <section class="service-self-help-stage">
    <section class="service-wrapper">
        <seciton class="ssh-title">
            <p>自助服务</p>
        </seciton>
        <ul class="ssh-type-list oc-row">
                        <li class="service-type-itme col-3 col-sm-4 col-xs-6" style="margin-right:40px;margin-left:60px;">
                <a href="/home/price" target="_blank" class="oppo-tj" data-tj="www|service|home|part">
                    <seciton class="service-type-view">
                        <seciton class="type-title">
                            <i class="oc-icon oc-iconfont-service4"></i>
                            <p>零配件价格</p>
                        </seciton>
                        <p class="type-text">通过手机型号查询手机配件和手机附件的参考价格。</p>
                    </seciton>
                </a>
            </li>
            <li class="service-type-itme col-3 col-sm-4 col-xs-6" style="margin-right:40px;margin-left:40px;">
                <a href="/home/ServerIndex" target="_blank" class="oppo-tj" data-tj="www|service|home|repair">
                    <seciton class="service-type-view">
                        <seciton class="type-title">
                            <i class="oc-icon oc-iconfont-service5"></i>
                            <p>寄修服务</p>
                        </seciton>
                        <p class="type-text">运费全免，足不出户即可享受OPPO便捷专业的寄修服务。</p>
                    </seciton>
                </a>
            </li>
            <li class="service-type-itme col-3 col-sm-4 col-xs-6" style="margin-right:40px;margin-left:40px;">
                <a href="/home/repair" target="_blank" class="oppo-tj" data-tj="www|service|home|repair-query">
                    <seciton class="service-type-view">
                        <seciton class="type-title">
                            <i class="oc-icon oc-iconfont-service8"></i>
                            <p>维修进度查询</p>
                        </seciton>
                        <p class="type-text">通过手机号码或 IMEI 号查询手机的维修处理状态。</p>
                    </seciton>
                </a>
            </li>
                    </ul>
    </section>
</section>


<hr>
    </section>

@endsection