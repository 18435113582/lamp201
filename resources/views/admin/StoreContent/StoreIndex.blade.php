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
						@if($num == '10')
						selected
						@endif 
	        			>10</option>

	        			<option value="20"
						@if($num == '20')
						selected
						@endif 
	        			>20</option>

	        			<option value="30"
						@if($num == '30')
						selected
						@endif 
	        			>30</option>
	        			
	        		</select> 条数据
        		</label>
        	</div>

        	<div class="dataTables_filter" id="DataTables_Table_1_filter">
    			<label>关键字:
    				<input type="text" name='search' aria-controls="DataTables_Table_1" value="{{$search}}">
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
      <th>id</th>
      <th>店铺名</th>
      <th style="width:200px">店铺地址</th>
      <th>营业时间</th>
      <th>店铺类型</th>
      <th>联系电话</th>
      <th>城市</th>
      <th>操作</th>
    </tr> 
  </thead>
  <tbody>
  	@foreach($res as $k => $v)
    <tr>
      <td>{{$v->sid}}</td>
      <td>{{$v->StoreName}}</td>
      <td>{{$v->StoreAddress}}</td>
      <td>{{$v->StartHours}}-{{$v->EndHours}}</td>
      <td>@if($v->StoreType == 1)
			超级旗舰店
		  @elseif($v->StoreType == 2)
			旗舰店
		  @elseif($v->StoreType == 3)
			专卖店
		  @endif
      </td>
      <td>{{$v->StorePhone}}</td>
      <td>{{$cs["$v->city"]}}-{{$city["$v->city"]["$v->area"]}}</td>
      <td><a href="/admin/StoreIndex/{{$v->sid}}/edit"><button class="layui-btn layui-btn-radius layui-btn-normal">修改</button></a>

      	<form action="/admin/StoreIndex/{{$v->sid}}" method='post' style='display:inline'>
			{{csrf_field()}}

			{{method_field('DELETE')}}

			<button class="layui-btn layui-btn-radius layui-btn-normal" style="margin-left:0px">删除</button>

		</form>
	  </td>
    </tr>

    @endforeach

  </tbody>
</table>
		<div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
				
				<style>
					.pagination li{
						float: left;
					    height: 20px;
					    padding: 0 10px;
					    display: block;
					    font-size: 12px;
					    line-height: 20px;
					    text-align: center;
					    cursor: pointer;
					    outline: none;
					    background-color: #444444;
					   
					    text-decoration: none;
					    border-right: 1px solid #232323;
					    border-left: 1px solid #666666;
					    border-right: 1px solid rgba(0, 0, 0, 0.5);
					    border-left: 1px solid rgba(255, 255, 255, 0.15);
					    -webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
					    -moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
					    box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);

					}

					.pagination li a{
 					color: #fff;
					}

					.pagination .active{
					background-color: #88a9eb;
					color: #323232;
				    border: none;
				    background-image: none;
				    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
					}

					.pagination .disabled{

						color: #666666;
    					cursor: default;
					}

					

					.pagination{
						margin:0px;
					}
				
				</style>

               <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">

    			{{$res->links()}}
	</div>

    	</div>

</div>

@endsection