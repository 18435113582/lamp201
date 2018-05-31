@extends('layout.admin')

@section('title',$title)

@section('content')
	
	
            
            	<!-- Statistics Button Container -->
            	<hr>
                
                <!-- Panels Start -->
                
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>添加类别</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/cate" method="post">
                    		<div class="mws-form-inline">

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">父类</label>
                    				<div class="mws-form-item">
                    					<select class="small" name="pid">
                    						<option value="0">根类</option>

											@foreach($res as $k=>$v)

                    						<option value="{{$v->cid}}">{{$v->cname}}</option>

											@endforeach
                    					</select>
                    				</div>
                    			</div>

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">类别名称</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text" name="cname">
                    				</div>
                    			</div>

                    			
                    			{{csrf_field()}}
                    		</div>
                    		<div class="mws-button-row">
                    			<input value="提交" class="btn btn-danger" type="submit">
                    			
                    		</div>
                    	</form>
                    </div>    	
                </div>
              
            
@endsection

@section('js')
	
@endsection