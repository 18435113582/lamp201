@extends('layout.topic.adminyu')

@section('title',$title)

@section('content')
	<span>现在是北京时间</span>
	<div id="dvs" style="width:500px;height:40px;border:1px solid blue;line-height:40px;text-align:center;font-size:25px;color:black;margin-top:20px;"></div>

@endsection

@section('js')
	<script>
		

		setInterval(function(){

			var d = new Date();

			var y = d.getFullYear();

			var m = d.getMonth();

			if(m < 10){
				m = '0' + m;
			}

			var t = d.getDate();

			if(t < 10){
				t = '0' + t;
			}

			var h = d.getHours();

			if(h < 10){
				h = '0' + h;
			}

			var ms = d.getMinutes();

			if(ms < 10){
				ms = '0' + ms;
			}

			var s = d.getSeconds();

			if(s < 10){
				s = '0' + s;
			}

			var ds = d.getDay();

			switch(ds){

				case 0:
					ds = '星期日';
					break;
				case 1:
					ds = '星期一';
					break;
				case 2:
					ds = '星期二';
					break;
				case 3:
					ds = '星期三';
					break;
				case 4:
					ds = '星期四';
					break;
				case 5:
					ds = '星期五';
					break;
				case 6:
					ds = '星期六';
					break;

			}

			dvs.innerHTML = y+'年'+m+'月'+t+'日 '+h+'时'+ms+'分'+s+'秒 '+ds;

		},1000)



	</script>
@endsection