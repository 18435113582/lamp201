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
    	<form action="/admin/goods" method='get'>
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
            <label>
                关键字:
                <input type="text" aria-controls="DataTables_Table_1" name="search" value="{{$search}}">
            </label>
            <button class='btn btn-info'>搜索</button>
        </div>
		</form>
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
        aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                    >
                    	编号
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 248px;">
                        商品名称
                    </th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 248px;">
                        商品描述
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                    style="width: 227px;">
                        颜色
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                    style="width: 163px;">
                        配置
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
                       图片
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
                       类别
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
                       状态
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
                       库存
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
                       价格
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
                      创建时间
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 123px;">
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

                    <td class=" ">
                        {{$v->gid}}
                    </td>
                    <td class="">
                        {{$v->gname}}
                    </td>
                    <td class=" ">
                        {{$v->descr}}
                    </td>
                    <td class=" ">
                        {{$v->color}}
                    </td>
                    <td class=" ">
                         {{$v->config}}
                    </td>
                    <td class=" ">
                        <img src="{{$v->gpic}}" alt="">
                    </td>
                    <td class="">
                         {{$v->cid}}
                    </td>
                    <td class=" ">
                         {{$v->status}}
                    </td>
                    <td class=" ">
                         {{$v->stock}}
                    </td>
                    <td class=" ">
                         {{$v->price}}
                    </td>
                    <td class=" ">
                       	{{date('Y-m_d H:i:s',$v->gtime)}} 
                    </td>
                    <td class=" ">
                       	<a href="/admin/goods/{{$v->gid}}/edit"><button>修改</button></a>
						<form action="/admin/goods/{{$v->gid}}" method="post" class='remove'>
							{{csrf_field()}}
							{{method_field('DELETE')}}
                       		<a href="/admin/goods"><button>删除</button></a>
						</form>
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

            var res = confirm('你确定删除吗??');

            if(!res) return;
        }
           
    </script>

@endsection