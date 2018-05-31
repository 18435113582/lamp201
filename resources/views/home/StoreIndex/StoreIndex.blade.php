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
        <section class="ste-title ste-star-title chaxunjieguo">
            <h2>查询结果 (<span id="searchCount">{!!count($data)!!}</span>)</h2>

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
        <div class="store-section" id="appear">
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
                            <span id="see-map" class='chakanditu' dt="{{$v->StoreUrl}}">查看地图</span>
                        </a>
                        <a class="send-message" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-message"></i>
                            <span class="send-phone">发送地址到手机</span>
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
                        <a class="oc-btn btn-master show-route" href=""></a>
                    </div>
                </section>
            </li>
        @endforeach
        </ul>
    </div>
     
        <div class="h-gamma search-error" style="display:none;">对不起，找不到对应的体验店信息，请重新搜索。</div>
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


    $('#city').change(function(){

        var ct = $(this).val();
        var ae = $(this).next().val();
        var tp = $(this).next().next().val();
        if(tp == null){
            tp = 0;
        }

        $.get('/home/StoreAjax',{city:ct,area:ae,type:tp},function(data){

            if(data == '0'){

                $('.h-gamma').eq(0).show();
                $('.active').eq(0).empty();
                $('#searchCount').text(0);

            } else {

                $('.active').eq(0).empty();
                $('.h-gamma').eq(0).hide();
                $('#searchCount').text(data.length);

                for(var i = 0; i < data.length; i++){
                    
                    $('.active').eq(0).append(`<li class="map-address-item  col-6 col-xs-12  store-level-20">
                                <section class="map-address-view">
                                        <div class="address-item-name">
                        `+data[i].StoreName+`
                        @if(`+data[i].StoreType+` == 1)
                        <span class="store-level">超级旗舰店</span>
                        @elseif(`+data[i].StoreType+` == 2)
                        <span class="store-level">旗舰店</span>
                        @elseif(`+data[i].StoreType+` == 3)
                        <span class="store-level" style="border:1px solid green;color:green">专卖店</span>
                        @endif
                    </div>
                    <div class="address-item-map">
                        <a class="view-map" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-view-map"></i>
                            <span id="see-map" class='chakanditu' dt='`+data[i].StoreUrl+`'>查看地图</span>
                        </a>
                        <a class="send-message" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-message"></i>
                            <span class="send-phone">发送地址到手机</span>
                        </a>
                    </div>
                    <div class="address-item-title">地址</div>
                    <div class="address-item-text address">
                        `+data[i].StoreAddress+`
                    </div>
                    <div class="address-item-title">营业时间</div>
                    <div class="address-item-text">
                        `+data[i].StartHours+`-`+data[i].EndHours+`
                    </div>
                    <div class="address-item-title">联系电话</div>
                    <div class="address-item-text">
                        <a href="tel:18301384365">`+data[i].StorePhone+`</a>
                    </div>
                    <div class="address-item-btn miniprogram-hide">
                        <a class="oc-btn btn-master show-route" href=""></a>
                    </div>
                </section>
            </li>`).show();

                }
                $('.chakanditu').click(function(){
                    var dt = $('.chakanditu').attr('dt');
                    //alert(dt);
                        layer.open({
                          type: 1,
                          skin: 'layui-layer-demo', //样式类名
                          closeBtn: 0, //不显示关闭按钮
                          anim: 2,
                          area: ['600px', '780px'], //宽高
                          shadeClose: true, //开启遮罩关闭
                          content: dt
                        });

                    })

            }

        })

    })

    $('#area').change(function(){

        var ae = $(this).val();
        var tp = $(this).next().val();
        var ct = $(this).prev().val();
        if(tp == null){
            tp = 0;
        }

        $.get('/home/StoreAjax',{city:ct,area:ae,type:tp},function(data){


            if(data == '0'){

                $('.h-gamma').eq(0).show();
                $('.active').eq(0).empty();
                $('#searchCount').text(0);

            } else {

                $('.active').eq(0).empty();
                $('.h-gamma').eq(0).hide();
                $('#searchCount').text(data.length);

                for(var i = 0; i < data.length; i++){
                    // console.log(data[i].StoreName);

                    
                    $('.active').eq(0).append(`<li class="map-address-item  col-6 col-xs-12  store-level-20">
                                <section class="map-address-view">
                                        <div class="address-item-name">
                        `+data[i].StoreName+`
                        @if(`+data[i].StoreType+` == 1)
                        <span class="store-level">超级旗舰店</span>
                        @elseif(`+data[i].StoreType+` == 2)
                        <span class="store-level">旗舰店</span>
                        @elseif(`+data[i].StoreType+` == 3)
                        <span class="store-level" style="border:1px solid green;color:green">专卖店</span>
                        @endif
                    </div>
                    <div class="address-item-map">
                        <a class="view-map" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-view-map"></i>
                            <span id="see-map" class='chakanditu' dt='`+data[i].StoreUrl+`'>查看地图</span>
                        </a>
                        <a class="send-message" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-message"></i>
                            <span class="send-phone">发送地址到手机</span>
                        </a>
                    </div>
                    <div class="address-item-title">地址</div>
                    <div class="address-item-text address">
                        `+data[i].StoreAddress+`
                    </div>
                    <div class="address-item-title">营业时间</div>
                    <div class="address-item-text">
                        `+data[i].StartHours+`-`+data[i].EndHours+`
                    </div>
                    <div class="address-item-title">联系电话</div>
                    <div class="address-item-text">
                        <a href="tel:18301384365">`+data[i].StorePhone+`</a>
                    </div>
                    <div class="address-item-btn miniprogram-hide">
                        <a class="oc-btn btn-master show-route" href=""></a>
                    </div>
                </section>
            </li>`).show();

                }

                $('.chakanditu').click(function(){
                    var dt = $('.chakanditu').attr('dt');
                    //alert(dt);
                        layer.open({
                          type: 1,
                          skin: 'layui-layer-demo', //样式类名
                          closeBtn: 0, //不显示关闭按钮
                          anim: 2,
                          area: ['600px', '780px'], //宽高
                          shadeClose: true, //开启遮罩关闭
                          content: dt
                        });

                    })


            }

        })

    })

    $('#type').change(function(){

        // var ct = this.value;

        var ct = $(this).prev().prev().val();
        var ae = $(this).prev().val();
        var tp = $(this).val();
        
        if(tp == null){
            tp = 0;
        }

        if(!ct){
            ct = 0;
        }

        if(!ae){
            ae = 0;
        }


        $.get('/home/StoreAjax',{city:ct,area:ae,type:tp},function(data){

            // console.log(data);
            // eval('var arr ='+data);
            
            if(data == '0'){

                $('.h-gamma').eq(0).show();
                $('.active').eq(0).empty();
                $('#searchCount').text(0);

            } else {

                $('.active').eq(0).empty();
                $('.h-gamma').eq(0).hide();
                $('#searchCount').text(data.length);

                for(var i = 0; i < data.length; i++){
                    // console.log(data[i].StoreName);

                    
                    $('.active').eq(0).append(`<li class="map-address-item  col-6 col-xs-12  store-level-20">
                                <section class="map-address-view">
                                        <div class="address-item-name">
                        `+data[i].StoreName+`
                        @if(`+data[i].StoreType+` == 1)
                        <span class="store-level">超级旗舰店</span>
                        @elseif(`+data[i].StoreType+` == 2)
                        <span class="store-level">旗舰店</span>
                        @elseif(`+data[i].StoreType+` == 3)
                        <span class="store-level" style="border:1px solid green;color:green">专卖店</span>
                        @endif
                    </div>
                    <div class="address-item-map">
                        <a class="view-map" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-view-map"></i>
                            <span id="see-map" class='chakanditu' dt='`+data[i].StoreUrl+`'>查看地图</span>
                        </a>
                        <a class="send-message" data-id="bUdUaThGdXFMTytxbHRua1k5ZUtidz09">
                            <i class="oc-icon oc-iconfont-service-message"></i>
                            <span class="send-phone">发送地址到手机</span>
                        </a>
                    </div>
                    <div class="address-item-title">地址</div>
                    <div class="address-item-text address">
                        `+data[i].StoreAddress+`
                    </div>
                    <div class="address-item-title">营业时间</div>
                    <div class="address-item-text">
                        `+data[i].StartHours+`-`+data[i].EndHours+`
                    </div>
                    <div class="address-item-title">联系电话</div>
                    <div class="address-item-text">
                        <a href="tel:18301384365">`+data[i].StorePhone+`</a>
                    </div>
                    <div class="address-item-btn miniprogram-hide">
                        <a class="oc-btn btn-master show-route" href=""></a>
                    </div>
                </section>
            </li>`).show();

                }

                // for(var i = 0; i < data.length; i++){
                $('.chakanditu').click(function(){
                    var dt = $('.chakanditu').attr('dt');
                    //alert(dt);
                        layer.open({
                          type: 1,
                          skin: 'layui-layer-demo', //样式类名
                          closeBtn: 0, //不显示关闭按钮
                          anim: 2,
                          area: ['600px', '780px'], //宽高
                          shadeClose: true, //开启遮罩关闭
                          content: dt
                        });

                    })

            }

        })

    })

    $('.chakanditu').click(function(){
        var dt = $('.chakanditu').attr('dt');
        //alert(dt);
        layer.open({
          type: 1,
          skin: 'layui-layer-demo', //样式类名
          closeBtn: 0, //不显示关闭按钮
          anim: 2,
          area: ['600px', '780px'], //宽高
          shadeClose: true, //开启遮罩关闭
          content: dt
        });

    })

    $('.send-phone').click(function(){

        layer.open({
          type: 1,
          skin: 'layui-layer-demo', //样式类名
          closeBtn: 0, //不显示关闭按钮
          anim: 2,
          shadeClose: true, //开启遮罩关闭
          content:
          `<form class="layui-form" action="">
  <div class="layui-form-item" style="width:350px;>
    <div class="layui-input-inline">
      <input id="phone" type="text" required   autocomplete="off" name="phoneNumber" style="width:250px;margin-left:50px;margin-top:30px;" placeholder="请输入手机号" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux" style="width:20px"></div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label" style="width:20px"></label>
    <div class="layui-input-inline" style="width:260px;">
      <input type="text" required   name="password" autocomplete="off" placeholder="请输入验证码" class="layui-input" style="width:130px;margin-left:20px;padding-right:0px;">
      <button class="yanzheng" style="width:88px;display:inline;float:right;line-height:32px;margin-top:-38px;-left:-100px;">获取验证码</button>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn"  lay-filter="formDemo">立即发送</button>
    </div>
  </div>
</form>`
        });

    });


//Demo
layui.use('form', function(){
  var form = layui.form;
  
  //监听提交
  form.on('submit(formDemo)', function(data){
    var reg = layer.msg(JSON.stringify(data.field));
    return false;
    // console.log(reg);
  });
});


$('.yanzheng').click(function(){

   var ph =  $('#phone').val();

   console.log(ph);

})

</script> 

@endsection