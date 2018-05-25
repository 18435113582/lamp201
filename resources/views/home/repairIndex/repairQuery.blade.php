@extends('layout.home')

<link media="all" type="text/css" rel="stylesheet" href="/css/repair/repair.css">

<script src="/js/holder.js"></script>

@section('title',$title)

@section('content')

<section id="oc-container">

         <section class="repair-wrapper">
                               <div class="repair-con">
                <section class="repair-check">

                    <h2 class="repair-title">维修进度查询</h2>
                    <!-- <input id="isapp" value="0" type="hidden"> -->
                    <form action="/home/both" method="get">
	                    <div class="oc-input input-imei">
	                        <input type="text" class="oc-input-default oc-radius-default get-imei" name="rphone" placeholder="请输入手机IMEI号或手机号" >
	                        <span class="input-warning-text">输入的信息有误，请核对后重新输入</span>
	                    </div>
	                    <div class="phonecheck-captcha">    
	                        <div class="oc-input input-captcha">
	                            <input type="text" class="oc-input-default oc-radius-default" name="rcode" placeholder="请输入验证码" style="width:300px;">
	                            <!-- <span class="input-warning-text">输入的验证码有误</span> -->
	                            <p style="color:red">{{session('cod')}}</p>
	                        </div> 
	                        <div class="captcha-pic" style="margin-left:60px;">
	                            <img src="/home/verifx" id="captcha" onclick='this.src=this.src+"?c="+Math.random()'>
	                        </div>
	                    </div>
	                    {{csrf_field()}}
	                    <section class="btn-wrapper">
	                        <button class="oc-btn btn-master repair-check-btn oppo-tj" type="submit">立即查询</button>
	                        <div class="error_msg_note"></div>
	                    </section>
					</form>

                    <section class="repair-tips">
                        <h3 class="tips-title">温馨提示</h3>
                        <p class="tips-content content1"><span>•</span>系统仅提供 30 天内最近一次&nbsp;OPPO&nbsp;客服中心手机维修进度查询服务。</p>
                        <p class="tips-content content2"><span>•</span>手机&nbsp;IMEI&nbsp;号查询方法：<br>1.&nbsp;手机拨号界面输入&nbsp;*#06#<br>2.&nbsp;查看产品包装盒底部<br>3.&nbsp;手机&nbsp;“设置&nbsp;&gt;&nbsp;关于手机&nbsp;&gt;&nbsp;状态信息&nbsp;&gt;&nbsp;IMEI 号”</p>
                    </section>
                   
                </section>
            </div>    
                
        </section>

	</section>

@endsection