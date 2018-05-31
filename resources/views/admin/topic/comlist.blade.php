@extends('layout.admin')

@section('content')
<div id="table">
	
	<table class="layui-table">
		<thead>
			
		<tr>
			<th>ID</th>
			<th>文章名</th>
			<th>用户名</th>
			<th>评论</th>
			<th>操作</th>
		</tr>
		</thead>
		<tbody>
	@foreach($com as $k => $v)
			
		<tr>
			<td>{{$k+1}}</td>
			<td>{{$v->art_title}}</td>
			<td>{{$v->username}}</td>
			<td>{{$v->content}}</td>
			<!-- <td></td> -->
			<td>
				<!-- <a href="/admin/link/edit/{{$v->id}}" class="layui-btn">修改</a> -->
				<a href="/admin/com/del/{{$v->id}}" class="layui-btn">删除</a>
			</td>
		</tr>
	@endforeach
		</tbody>
	</table>
</div>	
<!-- ========================================================= -->


      

@endsection