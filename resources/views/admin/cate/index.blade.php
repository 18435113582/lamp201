@extends('layout.admin')

@section('title',$title)

@section('content')
	
            
            	
           
                <!-- Panels Start -->
                <hr>
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> Simple Table</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>类别编号</th>
                                    <th>类别名称</th>
                                    <th>父类编号</th>
                                    <th>操作</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($res as $k=>$v) 
                                <tr>
                                    <td>{{$v->cid}}</td>
                                    <td>{{$v->cname}}</td>
                                    <td>{{$v->pid}}</td>
                                    <td  align="center">
                                    	<a href="/admin/cate/{{$v->cid}}/edit"><button>修改</button></a>
                                    	<form action="/admin/cate/{{$v->cid}}" method='post' style='display:inline'>
											{{csrf_field()}}

											{{method_field('DELETE')}}

											<button>删除</button>

										</form>
                                    	

                                    </td>
                              
                                </tr> 
                             @endforeach
                            </tbody>
                        </table>
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