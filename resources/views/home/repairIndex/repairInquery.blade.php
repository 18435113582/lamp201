@extends('layout.home')


<link media="all" type="text/css" rel="stylesheet" href="/css/repair/repair.css">

@section('title',$title)

@section('content')

<section id="oc-container"><section class="repairFailure-wrapper">
        <section class="repairFailure-result">
            <p class="cont1">抱歉，暂无维修进度。</p>
                        <p class="cont2">请确保输入的&nbsp;IMEI&nbsp;号或手机号正确，如有疑问请联系&nbsp;OPPO&nbsp;官网<a href="http://oim.oppo.com/oim/chatClient/chatbox.jsp?companyID=8092&amp;configID=890&amp;enterurl=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2Fpreview%2Ejsp&amp;pagereferrer=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2FembedScript%2Ejsp%3Ft%3D1517&amp;k=1" target="_blank" class=" oppo-tj" data-tj="www|service|repair|oim">在线客服</a>进行咨询。</p>
                        <a href="/home/repair" onclick="location.reload()" class="oc-btn btn-master check-again-btn oppo-tj" ">重新查询</a>
        </section>
        <section class="repairFailure-tips">
            <h3 class="tips-title">温馨提示</h3>
            <p class="tips-content content1">若输入正确的 IMEI 后仍查询不到您手机的相关信息：</p>
            <p class="tips-content content2"><span>•</span>请核查购买渠道是否为官方授权渠道。<br><span>•</span>携带您的手机和完整包装前往当地服务中心检测处理。</p>
        </section>
    </section>

</section>

@endsection