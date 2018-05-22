@extends('layout.home')

@section('title',$title)

@section('content')
<!-- <link media="all" type="text/css" rel="stylesheet" href="/css/common.css"> -->
<!-- <link rel="stylesheet" href="/css/SearchInfoWindow_min.css"> -->
<!-- <link media="all" type="text/css" rel="stylesheet" href="/css/swiper.min.css"> -->
<link media="all" type="text/css" rel="stylesheet" href="/css/store.css">

<i id="oc-mask"></i>
                                
            <section id="oc-container">

        <section class="store-high store-high-nosearch">

    <!--背景-->
    <section class="ste-high-theme-wrapper">
        <i class="ste-high-theme">
            <picture>
                <!--[if IE 9]><video style="display: none"><![endif]-->
                <img class="lazypreload lazyloaded" alt=""  src="/image/201801030101085a4c70785e69f.jpg">
             </picture>
        </i>
    </section>

</section>

<script>
    


</script>

<section class="store-star">

    <section class="store-section store-selects">
        <section class="ste-title ste-star-title">
            <h2>查询结果 (<span id="searchCount">97</span>)</h2>
        </section>
                <section class="ste-selects">
                    <section class="address-select-views">
                        <form action="" method="">
                            <select  class="form-control col-md-4" id="city" name="city" style="width:200px;margin-left:300px;">
                            </select>
                            <select class="form-control col-md-4" id="area" name="area" style="width:200px;">
                            </select>
                            <select class="form-control col-md-4" id="type" name="StoreType" style="width:200px;">
                              <option value="" disabled selected>选择店铺类型</option>
                              <option value="1">超级旗舰店</option>
                              <option value="2">旗舰店</option>
                              <option value="3">专卖店</option>
                            </select>     
                        </form>
                    </section>
                </section>

    </section>

</section>        
        <section class="store-events">
        <div class="store-section">
        <ul class="map-address map-networks oc-row active">
        @foreach($data as $k=>$v)      
            <li class="map-address-item  col-6 col-xs-12  store-level-20">
                                <section class="map-address-view">
                                        <div class="address-item-name">
                        {{$v->StoreName}}
                        @if($v->StoreType == 1)
                        <span class="store-level">超级旗舰店</span>
                        @elseif($v->StoreType == 2)
                        <span class="store-level">旗舰店</span>
                        @elseif($v->StoreType == 3)
                        <span class="store-level" style="border:1px solid green;color:green">专卖店</span>
                        @endif
                    </div>
                    <div class="address-item-map">
                        <a class="view-map" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-view-map"></i>
                            <span>查看地图</span>
                        </a>
                        <a class="send-message" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-message"></i>
                            <span>发送地址到手机</span>
                        </a>
                    </div>
                    <div class="address-item-title">地址</div>
                    <div class="address-item-text address">
                        {{$v->StoreAddress}}
                    </div>
                    <div class="address-item-title">营业时间</div>
                    <div class="address-item-text">
                        {{$v->StartHours}}-{{$v->EndHours}}
                    </div>
                    <div class="address-item-title">联系电话</div>
                    <div class="address-item-text">
                        <a href="tel:18301384365">{{$v->StorePhone}}</a>
                    </div>
                    <div class="address-item-btn miniprogram-hide">
                        <a class="oc-btn btn-master show-route" href="">打开导航</a>
                    </div>
                </section>
            </li>
        @endforeach       
            
                    </ul>
    </div>
     
        <div class="h-gamma search-error " style="display:none;">对不起，找不到对应的体验店信息，请重新搜索。</div>
    </section>

        <!--服务-->
<section class="store-service">

    <section class="store-section">
        <section class="ste-title ste-service-title">
            <h2>OPPO 会员权益</h2>
            <!--<a href="#" class="ste-arraw-link">查看更多</a>-->
        </section>

        <!--服务列表-->
        <section class="ste-service-content">
            <ul>
                <li>
                    <b class="oc-icon ste-service-1"></b>
                    <p>贴膜服务</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-2"></b>
                    <p>碎屏无忧</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-3"></b>
                    <p>维修费折扣</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-4"></b>
                    <p>备用机</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-5"></b>
                    <p>手机养护</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-6"></b>
                    <p>会员积分</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-7"></b>
                    <p>会员专属价</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-8"></b>
                    <p>新机试用权</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-9"></b>
                    <p>官方专属活动</p>
                </li>
                <li>
                    <b class="oc-icon ste-service-10"></b>
                    <p>生活权益</p>
                </li>
            </ul>
        </section>
    </section>

</section>
	</section>
        
                       
</div>



@endsection

@section('js')

<script>

    var cs = ['北京市','上海市','山西省','山东省'];

    var city = document.getElementById('city');

    var area = document.getElementById('area');
    

    for(var i = 0; i < cs.length; i++) {

        var op = new Option(cs[i],i);

        city.options.add(op);

    }

    var css = [
                ['北京市'],
                ['上海市'],
                ['太原市','临汾市','运城市'],
                ['济南市','滨州市','东营市']
    ];

    city.onchange = function(){

        area.innerHTML = '';

        var cv = this.value;

        for(var i = 0; i < css[cv].length; i++){

            var op = new Option(css[cv][i],i);

            area.options.add(op);

        }
    }

    for(var i = 0; i < css[0].length; i++){

        area.innerHTML += '<option value="">'+css[0][i]+'</option>';
    }


        var ct = '';
        var ae = '';

    $('#city').change(function(){

        // var ct = this.value;

        ct = $(this).val();
        ae = $(this).next().val();

        console.log(ae);


        // $.get('/home/StoreAjax',{city:ct,area:ae},function(data){

        //     console.log(data);

        // })

    })

        

    


</script> 

@endsection