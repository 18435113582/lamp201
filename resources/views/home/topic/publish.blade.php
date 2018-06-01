@extends('layout.topic.defaultArt')

@section('title',$title)

@section('content')
<div class="container">
	<div class="panel mv2">
		<div class="panel-title">
            发表
		</div>
		<div class="panel-body pv3 ph2">
			<!-- post 到 store方法 -->
			<form action="/home/arts/store" id="publish"  method="POST"  >
				{{ csrf_field() }}
				 <input type="hidden" name="id" id="user_id" value="{{session('homeInfo')->id}}" >
				<p class="form-control">
					<input placeholder="请输入标题" name="title" value="">
				</p>
				<!-- 文本域 -->
				<p class="form-control Editor p1">

					<textarea placeholder="请输入内容" name="content" style="min-height: 400px; display:block; "></textarea>
				<!-- 	input type="text" id="xhe0_fixffcursor" style="position:absolute;display:block;"> -->
					<table id="xhe0_container" class="xhe_default" cellspacing="0" cellpadding="0" role="presentation">
					
					</table>
				</p>
				
				<p class="form-control text-center">
					
					<button type="submit" onclick="timedMsg()" class="btn btn-brand btn-large">发表</button>
				</p>
			</form>
		</div>
	</div>
</div>	
<script>
	function timedMsg()
{
var t=setTimeout("alert('提交成功')",1000);
	window.close();
}
</script>
@endsection