@extends('layout.home')


<link media="all" type="text/css" rel="stylesheet" href="/css/repair/repair.css">

@section('title',$title)

@section('content')

<section id="oc-container"><section class="repairFailure-wrapper">
        <section class="repairFailure-result">
            <p class="cont1">维修进度。</p>

    @foreach($hrr as $k=>$v)
        @if($v->fixStatus != 5)
            <div class="detail-box">
                <hr>
                <div class="phone-detail oc-row">
                    
                    <div class="model num col-3 col-xs-12">
                        
                        <p>手机型号</p>
                        <span>{{$v->btype}}</span>
                    </div>
                    <div class="imei num col-3 col-xs-12">
                        <p>寄修时间</p>
                        <span>{{date('Y-m-d H:i:s',$v->bbtime)}}</span>
                    </div>
                    <div class="imei num col-3 col-xs-12">
                        <p>保修状态</p>
                        <span>{{$v->bstatus}}</span>
                    </div>

                    <div class="imei num col-3 col-xs-12">
                        <p>维修进度</p>
                        <span>
                            @if($v->fixStatus == 1)
                            <h5 style="color:blue;">未处理<h5>
                            @elseif($v->fixStatus == 2)
                            <h5 style="color:orange;">等待快递员取货<h5>
                            @elseif($v->fixStatus == 3)
                            <h5 style="color:orange;">维修中<h5>
                            @elseif($v->fixStatus == 4)
                            <h5 style="color:orange;">维修完毕,快递寄回<h5>
                            @elseif($v->fixStatus == 5)
                            <h5 style="color:green;">维修完成<h5>
                            @endif
                        </span>
                    </div>
                    
                </div>
                <hr>
            </div>
            @endif
@endforeach

                        <a href="/home/repair" onclick="location.reload()" class="oc-btn btn-master check-again-btn oppo-tj" data-tj="www|service|repair|requery">重新查询</a>
        </section>
        <section class="repairFailure-tips">
            <h3 class="tips-title">温馨提示</h3>
            <p class="tips-content content1">若输入正确的 IMEI 后仍查询不到您手机的相关信息：</p>
            <p class="tips-content content2"><span>•</span>请核查购买渠道是否为官方授权渠道。<br><span>•</span>携带您的手机和完整包装前往当地服务中心检测处理。</p>
        </section>
    </section>

</section>

@endsection