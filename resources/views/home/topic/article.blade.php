@extends('layout.topic.defaultArt')

@section('title',$title)

@section('content')	
<div class="container">
    <div class="thread-detail panel mv1">
      <div class="dropdown">
        <div class="drop-btn">
        
        </div>
        <div class="dropmenu">
        </div>
      </div>
      <div class="user-wrap p2">
       <!--  <a href="#"><img class="avater" src="./picture/头像" alt="夏目贵治头像" style="background: none;">
       <i></i>
       </a> -->
        <div class="info">
          <div class="nickname">
            <a href="#">session(用户名)</a>
          </div>
          <div class="aid-text">
            <!-- <span><i class="op-icon icon-td-date"></i>05-08 23:37</span><span class="pc-style"><i class="op-icon icon-td-look"></i>170306</span><span class="pc-style"><i class="op-icon icon-td-reply"></i>1417</span> -->
          </div>
        </div>
      </div>
      <div class="detail">
        <div class="title">
          {{$article->title}}
        </div>
        <div class="content __reader_view_article_wrap_3243753196643948__">
       <!--  <a type="3" class="C3fcab8" href="#">#遇见夏天#
          </a><a type="3" class="C3fcab8" href="#">#我们正年轻#</a><a type="3" class="C3fcab8" href="#">#星拍客精选#</a><br> -->
          <div><p>{{$article->content}}</p></div>
          
         <!--  <a type="1" class="C3fcab8" href="#" uid="12415956">@颜小爱</a><a type="1" class="C3fcab8" href="#" uid="12572031">@咋拍</a><a type="1" class="C3fcab8" href="#" uid="5038772">@大版主</a> --><br>
          
        </div>
      </div>
      <center>
       <div name="reply"  id="opicon"   onclick="diaShow()" class="commit-btn icon-btn" >
        <i class="op-icon icon-d-commit-btn"></i>
        <span>评论</span>
         
       </div>
      </center><br>


    <!-- 动态 -->
        <div  id="comment" style="display:none;">
  <form class="Comment Cb form "  id="" action="##" method="POST">
  {{csrf_field()}}
    <div class="Editor p1">
      用户：
      <input name="username" id="username" value="" >
      <br>
      评论：
      <textarea name="content" id="content" value="" style="display: block;"></textarea>
      <input type="text" id="xhe0_fixffcursor" style="position:absolute;display:none;">
    </div>
    <p class="form-control mt2 text-left">
      <button class="btn btn-brand right" id="submit" onclick="insert();return false;" type="submit">提交评论</button><a class="Image option" style="visibility: visible;"></a>
      <br>
      <div id="success"></div>
      <br>
    </p>
  </form>
</div>
    </div>
 
      <!-- 评论开始 -->
    <div class="commit-panel panel mb3 " id="comment_top">
      <div class="title">
         全部评论
      </div>
      <div class="commit-list">  
           
		<!-- 一个评论块START -->
    @foreach($comments as $k => $v)
        <div class="commit-item" data-id="418390840" id="floor_2" data-time="1525795816">
         
          <div class="info-wrap">
            <div class="nickname">
              <a href="#" onclick="return false;">$user</a><span name="like" class="" aj-param="{&quot;type&quot;:1,&quot;tid&quot;:269189916,&quot;pid&quot;:418390840,&quot;author_uid&quot;:8152652}"><i class="op-icon icon-th-like mobile-style"></i></span>
            </div>
          
            <div class="dropdown">
              <div class="drop-btn desc">
                 {{$v->content}}
              </div>
            </div>
            <!-- reply======================================================= -->
        </div>
      </div>
    @endforeach  
    <!-- 一个评论块END -->

            <!-- reply======================================================= -->
            <!-- <div class="reply-list " aj-param="{&quot;pid&quot;:418390840,&quot;limit&quot;:5}">
              <p data-time="1525833895" class="reply-item">
                <span>夏目贵治</span> 
                    : 我没发过😂
                <time>05-09 10:44</time>
                <a name="answer" tid="269189916" pid="418390840" fuid="4243080" fusername="夏目贵治" rid="51910038">回复</a>
              </p>
            </div -->

            <!-- reply======================================================= -->

         

    
  

       
    <!-- 评论结束 -->
    <!--分页开始-->
  <!--   <div class="Page Box">
      <a class="Next" href="#" target="_self">下一页<i></i></a>
      <a class="Prev Dis"><i></i>上一页</a>
      <p>
        <span style="">
        <a class="Dis">第1页</a>
        <a href="#" target="_self">第2页</a>
        
        </span>
        <a class="Mid">第1页<i></i></a>
      </p>
    </div> -->
    <!--分页结束-->
  </div>

<!-- 试验  -->
<script>
           $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
            });
   

    //ajax提交Data
    function insert()
    {
         $.ajax({
                type: "POST",//方法
                // headers: {'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')},
                url: "{{route('getajax')}}" ,//表单接收url
                data: $("form").serialize(),
                success: function (data) {
                  //提交成功的提示词或者其他反馈代码
                    var result=document.getElementById("success");
                    result.innerHTML="成功!";
                    console.log(data);
                    // location.reload();
                },
                error : function() {
                  //提交失败的提示词或者其他反馈代码
                    var result=document.getElementById("success");
                    result.innerHTML="失败!";
                },
                async:true
            });
    }
    $.get(
          "{{route('dollarget')}}",function(data.status){
              alert("数据:" + data　+ status);
          }
    );



</script>




<script>
    //显示 隐藏评论栏
    var flag;

    function diaClose(){
      var x  = document.getElementById('comment');
      // var x  = document.getElementById('opicon');

      x.style.display = "none";

    }


    function diaShow(){
      if(!flag){

      var x  = document.getElementById('comment');
       // var x  = document.getElementById('opicon');

      x.style.display = "block";
      }
      else{
        diaClose();
      }
      flag = !flag; 
      // console.log(flag);   成功了,你真棒
    }
    

    </script>

   


    @endsection
