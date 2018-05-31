@extends('layout.admin')

@section('title',$title)


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">
		
		@if (count($errors) > 0)
    		<div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style='color:blue;font-size:17px;list-style:none'>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

    	<form action="/admin/user/{{$res->id}}" method='post' class="mws-form" enctype='multipart/form-data'>
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名</label>
    				<div class="mws-form-item">
    					<input type="text" name='username' class="small" value="{{$res->username}}">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">邮箱</label>
    				<div class="mws-form-item">
    					<input type="text" name='email' class="small" value="{{$res->email}}">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">手机号</label>
    				<div class="mws-form-item">
    					<input type="text" name='phone' class="small" value="{{$res->phone}}">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">头像</label>

    				<div class="mws-form-item">
                        <img src="{{$res->profile}}" alt="" width='180px' height='120px'>
    					<input type="file" name='profile' readonly="readonly" style="width: 100%; padding-right: 85px;" class="fileinput-preview" placeholder="No file selected...">
    				</div>
    			</div>


    			<div class="mws-form-row">
    				<label class="mws-form-label">状态</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li><input type="radio" name='status' value='1' @if($res->status == 1) checked @endif

                                > <label>启用</label></li>
    						<li><input type="radio" name='status' value='0' @if($res->status == 0) checked @endif> <label>禁止</label></li>
    						
    					</ul>
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
                {{method_field('PUT')}}
    			{{csrf_field()}}
    			<input type="submit" class="btn btn-danger" value="修改">
    			
    		</div>
    	</form>
    </div>    	
</div>

@endsection

@section('js')
<script>
	setTimeout(function(){

		$('.mws-form-message').slideUp(1000);

	},2000)

	// $('.mws-form-message').delay(3000).slideUp(1000);

</script>

@endsection