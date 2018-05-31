@extends('layout.admin')

@section('content')
<div id="table">
	
	<table class="layui-table">
		<thead>
			
		<tr>
			<th>ID</th>
			<th>链接名</th>
			<th>链接地址</th>
			<th>操作</th>
		</tr>
		</thead>
		<tbody>
	@foreach($links as $k => $v)
			
		<tr>
			<td>{{$k+1}}</td>
			<td>{{$v->linkname}}</td>
			<td>{{$v->url}}</td>
			<td>
				<a href="/admin/link/edit/{{$v->id}}" class="layui-btn">修改</a>
				<a href="/admin/link/del/{{$v->id}}" class="layui-btn">删除</a>
			</td>
		</tr>
	@endforeach
		</tbody>
	</table>
</div>	
<!-- ========================================================= -->


      

@endsection