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
                                    <th>编号</th>
                                    <th>图片</th>
                                    <th>标题1</th>
                                    <th>标题2</th>
                                    <th>商品ID</th>
                                    <th>操作</th>
                                    
                                </tr>
                            </thead>
                            <tbody align="center">
                               @foreach($res as $k=>$v) 
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td><img src="{{$v->gpic}}" alt="" width="200"></td>
                                    <td>{{$v->hone}}</td>
                                    <td>{{$v->htwo}}</td>
                                    <td>{{$v->gid}}</td>

                                    <td>
                                    	<a href="/img/edit/{{$v->id}}"><button class='btn btn-primary'>修改</button></a>
                                    	<form action="/img/delete/{{$v->id}}" method='post' style='display:inline'>
											{{csrf_field()}}

											
											<button class='btn btn-danger'>删除</button>

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
	


	
@endsection