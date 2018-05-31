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
    	
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
        aria-describedby="DataTables_Table_1_info">
            <thead>
                <tr role="row">
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 200px;">
                    
                    	商品名称
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 200px;">
                        图片
                    </th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                    style="width: 200px;">
                       	颜色
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                    style="width: 200px;">
                       配置
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                    style="width: 200px;">
                        单价
                    </th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 200px;">
                        数量
                    </th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                    rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                    style="width: 200px;">
                       赠品
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

                    <td>{{$v->gname}}</td>
                    <td><img src="{{$v->show}}" alt=""></td>
                    <td>{{$v->color}}</td>
                    <td>{{$v->config}}</td>
                    <td>{{$v->price}}</td>
                    <td>{{$v->cnt}}</td>
                    <td>
						<img src="{{$v->zp}}" alt="">
						{{$v->zname}}
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
           
    </script>

@endsection