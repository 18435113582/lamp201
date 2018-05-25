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
                    	<form class="mws-form" action="/admin/orders/update/{{$res->oid}}" method="post">
                    		<div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">收货人</label>
                                    <div class="mws-form-item">
                                        <input class="small" type="text" name="rec" value="{{$res->rec}}">
                                    </div>
                                </div>
                    		

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">收货地址</label>
                    				<div class="mws-form-item">
                    					<input class="small" type="text" name="addr" value="{{$res->addr}}">
                    				</div>
                    			</div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">联系电话</label>
                                    <div class="mws-form-item">
                                        <input class="small" type="text" name="tel" value="{{$res->tel}}">
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
                <!-- Panels Start -->
     
            
@endsection

@section('js')
	
@endsection