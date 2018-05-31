@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="mws-panel-header">
    	<span><i class="icon-table"></i>{{$title}}</span>
    </div>

    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

		<form action="/admin/ServerHistory" method='get'>
        	<div id="DataTables_Table_1_length" class="dataTables_length">
        		<label>显示
        			
	        		<select name="num" size="1" aria-controls="DataTables_Table_1">

	        			<option value="10"
						selected
	        			>10</option>

	        			<option value="20"
						selected
	        			>20</option>

	        			<option value="30"
						selected
	        			>30</option>
	        			
	        		</select> 条数据
        		</label>
        	</div>

        	<div class="dataTables_filter" id="DataTables_Table_1_filter">
    			<label>关键字:
    				<input type="text" name='search' aria-controls="DataTables_Table_1" value="">
    			</label>

    			<button class='btn btn-info'>搜索</button>
    		</div>

    		</form>

<table class="layui-table">
  <colgroup>
    <!-- <col width="150"> -->
    <!-- <col width="200"> -->
    <col>
  </colgroup>
  <thead>
    <tr>
      <th style="text-align: center">预约单号</th>
      <th style="text-align: center">姓名</th>
      <th style="text-align: center">用户</th>
      <th style="width:150px">取件地址</th>
      <th style="text-align: center">手机类型</th>
      <th style="text-align: center">购买时间</th>
      <th style="text-align: center">保修期状态</th>
      <th style="text-align: center;width:120px;">故障原因</th>
      <th style="text-align: center">预约时间</th>
      <th style="text-align: center">联系电话</th>
      <th style="text-align: center">维修进度</th>
      <th style="text-align: center;width:40px;">操作</th>
    </tr> 
  </thead>
  <tbody>
  	@foreach($data as $k=>$v)
  	@if($v->fixStatus == '5')
    <tr>
      <td>{{$v->bid}}</td>
      <td>{{$v->bname}}</td>
      <td>{{$v->uname}}</td>
      <td>{{$v->bAddress}}</td>
      <td>{{$v->btype}}</td>
      <td>{{$v->btime}}</td>
      <td>{{$v->bstatus}}</td>
      <td>{{$v->bdescription}}</td>
      <td>{{date('Y-m-d H:i:s',$v->bbtime)}}</td>
      <td>{{$v->bphone}}</td>
      <td style="color:orange;">
      	完成
      </td>
      <td>
        <a style="color:red;" href="/admin/ServerDelete/{{$v->bid}}">删除</a>
  	  </td>
    </tr>
    @endif
    @endforeach

@endsection