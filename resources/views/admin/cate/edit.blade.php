@extends('layout.admin')

@section('title',$title)

@section('content')
	
            
            	<!-- Statistics Button Container -->
            	<hr>
                <div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>添加类别</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/cate/{{$res->cid}}" method="post">
                    		<div class="mws-form-inline">

                    		

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">类别名称</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text" name="cname" value="{{$res->cname}}">
                    				</div>
                    			</div>
								{{ method_field('PUT') }}
                    			{{csrf_field()}}
                    		</div>
                    		<div class="mws-button-row">
                    			<input value="提交" class="btn btn-danger" type="submit">
                    			
                    		</div>
                    	</form>
                    </div>    	
                </div>
                <!-- Panels Start -->
     
            
@endsection

@section('js')
	
@endsection