@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="mws-panel-header">
    	<span><i class="icon-table"></i>{{$title}}</span>
    </div>

    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

		<form action="/admin/StoreIndex" method='get'>
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
      <th style="width:150px">取件地址</th>
      <th style="text-align: center">手机类型</th>
      <th style="text-align: center">购买时间</th>
      <th style="text-align: center">保修期状态</th>
      <th style="text-align: center">故障原因</th>
      <th style="text-align: center">预约时间</th>
      <th style="text-align: center">联系电话</th>
      <th style="text-align: center">维修进度</th>
      <th style="text-align: center">操作</th>
    </tr> 
  </thead>
  <tbody>
  	@foreach($data as $k=>$v)
  	@if($v->fixStatus != '5')
    <tr>
      <td>{{$v->bid}}</td>
      <td>{{$v->bname}}</td>
      <td>{{$v->bAddress}}</td>
      <td>{{$v->btype}}</td>
      <td>{{$v->btime}}</td>
      <td>{{$v->bstatus}}</td>
      <td>{{$v->bdescription}}</td>
      <td>{{date('Y-m-d H:i:s',$v->bbtime)}}</td>
      <td>{{$v->bphone}}</td>
      <td style="color:orange;">
      	@if($v->fixStatus == '1') 待处理 @endif
      	@if($v->fixStatus == '2') 快递员取货中 @endif
      	@if($v->fixStatus == '3') 返厂维修中 @endif
      	@if($v->fixStatus == '4') 维修完毕,快递送回 @endif
      </td>
      <td>
      	@if($v->fixStatus == '1') <a style="color:red;" href="/admin/ServerEdit/{{$v->bid}}">派快递员取货</a> @endif
        @if($v->fixStatus == '2') <a style="color:red;" href="/admin/ServerEditt/{{$v->bid}}">返厂维修中</a> @endif
      	@if($v->fixStatus == '3') <a style="color:red;" href="/admin/ServerEdittt/{{$v->bid}}">维修完毕,快递寄回</a> @endif
      	@if($v->fixStatus == '4') <a style="color:red;" href="/admin/ServerEditttt/{{$v->bid}}">完成维修</a> @endif
  	  </td>
    </tr>
    @endif
    @endforeach

@endsection