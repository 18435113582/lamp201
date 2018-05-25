@extends('layout.admin')

@section('title',$title)

@section('content')
	

	<hr>
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>{{$title}}</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/img/save" method="post" enctype="multipart/form-data">

                    		<div class="mws-form-inline">
                    			
                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品标题1</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="hone">
                    				</div>
                    			</div>
                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品标题2</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="htwo">
                    				</div>
                    			</div>
                    			
                    			<div class="mws-form-row">
                                        <label class="mws-form-label">商品ID</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name="gid">
                                        </div>
                                   </div>
                                

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品轮播图片</label>
                    				<div class="mws-form-item">
                    					<input type="file" name="gpic" multiple="multiple" />
                    				</div>
                                   </div>
                    			
                    			
                    			
                    			{{csrf_field()}}
                    			
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="提交" class="btn btn-danger">
                    			
                    		</div>
                    	</form>
                    </div>    	
                </div>


@endsection

@section('js')
	
@endsection