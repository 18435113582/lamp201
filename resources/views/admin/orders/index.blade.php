@extends('layout.admin')

@section('title',$title)

@section('content')
	

	<hr>
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> {{$title}}</span>
                    </div>
                    <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    	<form action="/admin/orders" method='get'>
        <div id="DataTables_Table_1_length" class="dataTables_length">
            <label>
                Show
                <select size="1" name="num" aria-controls="DataTables_Table_1">
                   <option value="10" 
	        			@if($num == 10) 
	        			selected="selected"
						@endif
	        			>10</option>



	        			<option value="20"
						@if($num == 20) 
	        			selected="selected"
						@endif
	        			>20</option>


	        			<option value="30"
						@if($num == 30) 
	        			selected="selected"
						@endif

	        			>30</option>
                </select>
                条数据
            </label>
        </div>
       
        <div class="dataTables_filter" id="DataTables_Table_1_filter">
            订单状态:
             <select name="status" id="">
                <option value="">全部</option>
                <option value="0">未发货</option>
                <option value="1">已发货</option>
                <option value="2">交易完成</option>
                <option value="3">用户取消</option>
            </select>
            <label>
                订单号:
                <input type="text" aria-controls="DataTables_Table_1" name="oid" value="{{$search}}">
            </label>
            <button class='btn btn-info'>搜索</button>
        </div>
		</form>
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
        aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr role="row">
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 100px;">
                    
                    	订单号
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 150px;">
                        收货人
                    </th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 500px;">
                        收货地址
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                    style="width: 127px;">
                        联系电话
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                    style="width: 163px;">
                        下单时间
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
                        总数量
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 80px;">
                       总金额
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
                       订单状态
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 400px;">
                       操作
                    </th>
                    
                </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
            	@foreach($res as $k=>$v)
                <tr class="
                	@if($k % 2 == 1) 
						odd 
					@else
						even
					@endif 
                " align="center">

                    <td class="">
                        {{$v->oid}}
                    </td>
                    <td class="">
                        {{$v->rec}}
                    </td>
                    <td class=" ">
                        {{$v->addr}}
                    </td>
                    <td class=" ">
                        {{$v->tel}}
                    </td>
                    <td class=" ">
                         {{date('Y-m-d H:i:s',$v->otime)}}
                    </td>
                    <td class=" ">
                       {{$v->cnt}}
                    </td>
                    <td class="">
                         {{$v->sum}}
                    </td>
                    <td class=" ">
                         {{status($v->status)}}
                    </td>
                   
                    <td class=" ">
                       	<a href="/admin/orders/edit/{{$v->oid}}"><button>修改</button></a>
						
                        <a href="/admin/orders/det/{{$v->oid}}"><button>订单详情</button></a>
                        @if($v->status == 0)
                        <button class="go">发货</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="dataTables_info" id="DataTables_Table_1_info">
            Showing 1 to 10 of 57 entries
        </div>
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
          	{{$res->appends($request)->links()}}
        </div>
    </div>
</div>
</div>

@endsection

@section('js')
	
    <script>

        $('.remove').click(function(){

            var remove = confirm('你确定删除吗??');

            if(!remove) return;
        })
       
            
        $('.go').click(function(){
            var oid = $(this).parents('tr').find('td').eq(0).text();
            var status = $(this).parents('tr').find('td').eq(7);
            var go = $(this);
            console.log(oid);
            $.get('/admin/orders/go',{oid:oid},function(data){
               
               if(data == '1'){

                    status.text('已发货');
                    go.remove();
               }

            })
            

        })
           
    </script>

@endsection