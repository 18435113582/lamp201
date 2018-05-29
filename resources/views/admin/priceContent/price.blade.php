@extends('layout.admin')

@section('title',$title)

@section('content')

<table class="layui-table">
  <colgroup>
    <!-- <col width="150"> -->
    <!-- <col width="200"> -->
    <col>
  </colgroup>
  <thead>
    <tr>
      <th style="text-align: center;">名字</th>
      <th style="text-align: center;">屏幕组件</th>
      <th style="text-align: center;">主板</th>
      <th style="text-align: center;">前摄像头</th>
      <th style="text-align: center;">后摄像头</th>
      <th style="text-align: center;">电池</th>
      <th style="text-align: center;">闪充电源适配器</th>
      <th style="text-align: center;">闪充USB线</th>
      <th style="text-align: center;">耳机</th>
      <th style="text-align: center;">操作</th>
    </tr> 
  </thead>
  <tbody>
    @foreach($prr as $k=>$v)
    <tr>
      <td style="text-align: center;">{{$v->aname}}</td>
      <td style="text-align: center;">{{$v->screen}}</td>
      <td style="text-align: center;">{{$v->mainboard}}</td>
      <td style="text-align: center;">{{$v->fcamera}}</td>
      <td style="text-align: center;">{{$v->acamera}}</td>
      <td style="text-align: center;">{{$v->cell}}</td>
      <td style="text-align: center;">{{$v->plug}}</td>
      <td style="text-align: center;">{{$v->usbCable}}</td>
      <td style="text-align: center;">{{$v->headset}}</td>
      <td style="text-align: center;"><a href="/admin/priceEdit/{{$v->pid}}"><button class="layui-btn layui-btn-radius layui-btn-normal">修改</button></a>

		  <a href="/admin/priceDelete/{{$v->pid}}"><button onclick = "return confirm('确定删除吗')" class="layui-btn layui-btn-radius layui-btn-normal" style="margin-left:0px">删除</button></a>

	  </td>
    </tr>
	@endforeach



  </tbody>
</table>

@endsection