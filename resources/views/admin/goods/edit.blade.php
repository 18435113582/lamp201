@extends('layout.admin')

@section('title',$title)

@section('content')
	

	<hr>
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>{{$title}}</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/goods/{{$res->gid}}" method="post" enctype="multipart/form-data">

                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">类别选择</label>
                    				<div class="mws-form-item">
                    					<select class="small" name="cid">
											@foreach($cates as $k=>$v)
                    						<option @if($res->cid == $v->cid)  selected @endif value="{{$v->cid}}">{{$v->cname}}</option>
												
											@endforeach
                    					</select>
                    			</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品名称</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="gname" value="{{$res->gname}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品描述</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="descr" value="{{$res->descr}}">
                    				</div>
                    			</div>
                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品颜色</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="color" value="{{$res->color}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品配置</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="config" value="{{$res->config}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品库存</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="stock" value="{{$res->stock}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品价格</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="price" value="{{$res->price}}">
                    				</div>
                    			</div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">赠品名称</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name="zname" value="{{$res->zname}}">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">赠品图片</label>
                                        <div class="mws-form-item">
                                             <input type="file" name="zp" multiple="multiple" />
                                             <img src="{{$res->zp}}" style="width:100px">
                                        </div>
                                   </div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品主图片</label>
                    				<div class="mws-form-item">
                    					<input type="file" name="gpic" multiple="multiple" />
                                             <img src="{{$res->gpic}}" style="width:200px">
                    				</div>
                                   </div>
							<div class="mws-form-row">
                    				<label class="mws-form-label">商品四体图片</label>
                    				<div class="mws-form-item">
                    					<input type="file" name="showpic[]" multiple="multiple" />
                                             @foreach($show as $k=>$v)

                                             <img src="{{$v->gpic}}" style="width:200px">
                                             @endforeach
                    				</div>

                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品详情图片</label>
                    				<div class="mws-form-item">
                    					<input type="file" name="detpic[]" multiple="multiple" />
                                             @foreach($det as $k=>$v)

                                             <img src="{{$v->gpic}}" style="width:200px">
                                             @endforeach
                    				</div>
                    			</div>
                    			
                    			{{method_field('PUT')}}
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