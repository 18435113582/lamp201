
@extends('layout.admin')

@section('head')
<!--  -->
@endsection
@section('title',$title)

@section('content')
	

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div style="margin-bottom: 5px;">          
 
<!-- 示例-970 -->
<ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-6111334333458862" data-ad-slot="3820120620" bq1i8yn="" hidden=""></ins>
 
</div>
 
<div class="layui-btn-group demoTable">
  <button class="layui-btn" data-type="getCheckData">获取选中行数据</button>
  <button class="layui-btn" data-type="getCheckLength">获取选中数目</button>
  <button class="layui-btn" data-type="isAll">验证是否全选</button>
</div>
<!-- 操作button -->
<script type="text/html" id="barDemo">
  <a class="layui-btn layui-btn-primary layui-btn-xs"  id="detail" lay-event="detail">查看详情</a>
  <!-- <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a> -->
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del" id="delit">删除</a>
</script>
<!-- 操作button -->
 <script src="/static/layui/layui.js"></script>
<!-- 表格table -->
<table class="layui-table" lay-data="{width: 892, height:500, url:'/home/layui', page:true, id:'idTest'}" lay-filter="demo">
  <thead>
    <tr>
      <th lay-data="{type:'checkbox', fixed: 'left'}"></th>
      <th lay-data="{field:'id', width:80, sort: true, fixed: true}">ID</th>
      <th lay-data="{field:'username', width:150, sort: true, fixed: true}">用户名</th>
      <th lay-data="{field:'title', width:180 , fixed: true}">标题</th>
      <th lay-data="{field:'content', width:320 }">内容</th>
      <!-- <th lay-data="{field:'experience', width:80, sort: true}">积分</th> -->
      
      <!-- <th lay-data="{field:'wealth', width:135, sort: true}">财富</th>
      <th lay-data="{field:'score', width:80, sort: true, fixed: 'right'}">评分</th> -->
      <th lay-data="{fixed: 'right', width:178, align:'center', toolbar: '#barDemo'}">操作</th>
    </tr>
  </thead>
  {{csrf_field()}}
  {{method_field('DELETE')}}
</table>
 
<!-- 表格table -->
<script>

layui.use('table', function(){
  var table = layui.table;
  //监听表格复选框选择
  table.on('checkbox(demo)', function(obj){
    console.log(obj)
  });
  //监听工具条
  table.on('tool(demo)', function(obj){
    var data = obj.data;
    var en = JSON.stringify(data);
    var en2 = JSON.parse(en);
    var id = en2['art_id'];
    if(obj.event === 'detail'){


     // Loading
     var ii =layer.load();
     setTimeout(function(){
      layer.close(ii);
     },1000);

     $.get("/arts/detail",{id:id},function(data){
       console.log(data);
         layer.open({
            type:1,
            title: '内容',
            maxmin: true,
            shadeClose:true,
            area: ['800px','520px'],
            content: data
         });
     });

      // layer.msg('ID：'+ data.id + ' 的查看操作');
    } else if(obj.event === 'del'){
      layer.confirm('真的删除行么', function(index){
        obj.del();
        layer.close(index);
   // $('#delit').click(function(){

         $.get("arts/delete",{id:id},function(data){
              if(data){
              layer.msg('删除成功',{time:2000});
        }else {
              layer.msg('删除失败',{time:2000});
              }
            });   
        // });
      });
    } 
    // else if(obj.event === 'edit'){
    //   layer.alert('编辑行：<br>'+ JSON.stringify(data))
    // }


  });
  
  //===================================================
  var $ = layui.$, active = {
    getCheckData: function(){ //获取选中数据
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.alert(JSON.stringify(data));
    }
    ,getCheckLength: function(){ //获取选中数目
      var checkStatus = table.checkStatus('idTest')
      ,data = checkStatus.data;
      layer.msg('选中了：'+ data.length + ' 个');
    }
    ,isAll: function(){ //验证是否全选
      var checkStatus = table.checkStatus('idTest');
      layer.msg(checkStatus.isAll ? '全选': '未全选')
    }
  };
  
  $('.demoTable .layui-btn').on('click', function(){
    var type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
  });
  //===================================================
  // $.ajaxSetup({
  //   headers: {
  //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   }
  // });

  //   var data = obj.data;
  //   var en = JSON.stringify(data);
  //   var en2 = JSON.parse(en);
  //   var id = en2['art_id'];

   
});
 
// //===============================================
 


  



 


</script>
<style>
	.layui-table-page{background-color:white;}
</style>
@endsection
