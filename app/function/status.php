<?php 


	function status($str)
	{

		if($str == 0){

			return '未发货';
		}else if($str == 1){

			return '已发货';
		}else if($str == 2){

			return '交易完成';
		}else if($str == 3){

			return '用户取消订单';
		}
	}

	function goodsstatus($str)
	{

		if($str == 0){

			return '新品';
		}else if($str == 1){

			return '上架';
		}else if($str == 2){

			return '下架';
		}
	}

	function HomeStatus($str)
	{

		if($str == 0){

			return '正在出库';
		}else if($str == 1){

			return '已完成发货';
		}else if($str == 2){

			return '交易完成';
		}else if($str == 3){

			return '已取消';
		}
	}


 ?>