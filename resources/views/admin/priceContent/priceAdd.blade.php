@extends('layout.admin')

@section('title',$title)

@section('content')

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">
		
		<!-- @if (count($errors) > 0)
    		<div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style='color:blue;font-size:17px;list-style:none'>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif -->


    	<form action="/admin/addPrice" method='post' class="mws-form" >
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label">手机名</label>
    				<div class="mws-form-item">
    					<input type="text" name='aname' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">屏幕组件</label>
    				<div class="mws-form-item">
    					<input type="text" name='screen' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">主板</label>
    				<div class="mws-form-item">
    					<input type="text" name='mainboard' class="small">
    				</div>
    			</div>
		

    			<div class="mws-form-row">
    				<label class="mws-form-label">前摄像头</label>
    				<div class="mws-form-item">
    					<input type="text" name='fcamera' class="small">
    				</div>
    			</div>


    			<div class="mws-form-row">
    				<label class="mws-form-label">后摄像头</label>
    				<div class="mws-form-item">
    					<input type="text" name='acamera' class="small">
    				</div>
    			</div>


    			<div class="mws-form-row">
    				<label class="mws-form-label">电池</label>
    				<div class="mws-form-item">
    					<input type="text" name='cell' class="small">
    				</div>
    			</div>


    			<div class="mws-form-row">
    				<label class="mws-form-label">电源适配器</label>
    				<div class="mws-form-item">
    					<input type="text" name='plug' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">闪充USB线</label>
    				<div class="mws-form-item">
    					<input type="text" name='usbCable' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">耳机</label>
    				<div class="mws-form-item">
    					<input type="text" name='headset' class="small">
    				</div>
    			</div>

    		</div>
    		<div class="mws-button-row">

    			{{csrf_field()}}
    			<input type="submit" class="btn btn-danger" value="提交">
    			
    		</div>
    	</form>
    </div>    	
</div>

@endsection