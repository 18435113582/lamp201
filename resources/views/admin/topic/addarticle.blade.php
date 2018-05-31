@extends('layout.topic.adminyu')

@section('title',$title)

@section('content')
	<div class="container">
		<div>发表文章</div>
		@if(count($errors) >0 )
		<div class="alert alert-danger">
			<strong>新增失败</strong>输入不符合要求<br><br>
			{{implode('<br>', $errors->all())}}
		</div>
		@endif
		<form action="{{url('admin/arts/store')}}" method="POST">
			{{ csrf_field() }}
		<div id='title' border='solid 1px red'>
			<span>标题:</span><br>
			<input type="text" name='title' style='width:450px'>
		</div>
		<!-- <div id='title' border='solid 1px red'>
			<span>用户名:</span><br>
			<input type="text" value='Admin' readonly="readonly" name='username' style='width:450px'>
		</div> -->
		<div id='content' border='solid 1px green'>
			<span>内容:</span><br>
			<textarea name="content" id="" cols="100" rows="20">
				
			</textarea><br><br>
		<input type="submit" class="layui-btn layui-btn-normal" >
		</div>
		</form>
	</div>	
@endsection

@section('js')
	<script>
		



	</script>
@endsection