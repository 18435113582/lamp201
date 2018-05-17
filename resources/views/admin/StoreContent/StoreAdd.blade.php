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


    	<form action="/admin/StoreIndex" method='post' class="mws-form" >
    		<div class="mws-form-inline">

    			<div class="mws-form-row">
    				<label class="mws-form-label">店铺名</label>
    				<div class="mws-form-item">
    					<input type="text" name='StoreName' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">店铺地址</label>
    				<div class="mws-form-item">
    					<input type="text" name='StoreAddress' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">联系电话</label>
    				<div class="mws-form-item">
    					<input type="text" name='StorePhone' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">营业时间</label>
    				<!-- <div class="mws-form-item">
    					<input type="phone" name='StorePhone' class="small">
    				</div> -->
    				<div class="form-control"> <!-- 注意：这一层元素并不是必须的 -->
  						&nbsp;&nbsp;&nbsp;&nbsp;am:<input type="text" class="small" id="test1" name='StartHours'>&nbsp;&nbsp;&nbsp;&nbsp;pm:<input type="text" class="small" id="test2" name='EndHours'>
					</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">地图地址</label>
    				<div class="mws-form-item">
    					<input type="text" name='StoreUrl' class="small">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">地域选择</label>
    				<div class="mws-form-item">
    					<select class="form-control" name="city" id="city">
    						
						</select>
						<select class="form-control" name="area" id="area">

						</select>
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">店铺类型</label>
    				<div class="mws-form-item clearfix">
    					<ul class="mws-form-list inline">
    						<li><input type="radio" name='StoreType' value='1' checked> <label>超级旗舰店</label></li>
    						<li><input type="radio" name='StoreType' value='2'> <label>旗舰店</label></li>
    						<li><input type="radio" name='StoreType' value='3'> <label>专卖店</label></li>
    					</ul>
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

@section('js')

	<script>

	var cs = ['北京市','上海市','山西省','山东省'];

	var city = document.getElementById('city');

	var area = document.getElementById('area');
		
	for(var i = 0; i < cs.length; i++) {

		var op = new Option(cs[i],i);

		city.options.add(op);

	}

	var ass = [
				['北京市'],
				['上海市'],
				['太原市','临汾市','运城市'],
				['济南市','滨州市','东营市']
	];

	city.onchange = function(){

		area.innerHTML = '';

		var cv = this.value;

		for(var i = 0; i < ass[cv].length; i++) {

			var op = new Option(ass[cv][i],i);

			area.options.add(op);

		}

	}

	for(var i = 0; i < ass[0].length; i++){
			area.innerHTML += '<option value="">'+ass[0][i]+'</option>';
		}

	$('.mws-form-message').delay(2000).slideUp(1000);

	</script>

	<script>
		layui.use('laydate', function(){
		  var laydate = layui.laydate;
		  
		  //执行一个laydate实例
		  laydate.render({
		    elem: '#test1', //指定元素
		    type: 'time'
		  });
		});
	</script>
	<script>
		layui.use('laydate', function(){
		  var laydate = layui.laydate;
		  
		  //执行一个laydate实例
		  laydate.render({
		    elem: '#test2', //指定元素
		    type: 'time'
		  });
		});
	</script>

@endsection