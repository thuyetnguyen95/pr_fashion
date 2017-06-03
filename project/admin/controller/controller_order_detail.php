<?php

	$id_order_detail = isset($_GET["id"]) ? $_GET["id"] : "";
	$arr_order_detail = fetch("select * from tbl_order_detail where fk_order_id = $id_order_detail");
	$arr_order = fetch_one("select * from tbl_order where pk_order_id = $id_order_detail");
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'send_product':
			$id= isset($_GET["id"]) ? $_GET["id"] : "";
			execute("update tbl_order set c_status=1 where pk_order_id = $id");
			header("location:index.php?controller=order");
			break;
		case 'destroy_product':
			$id= isset($_GET["id"]) ? $_GET["id"] : "";
			execute("update tbl_order set c_status=0 where pk_order_id = $id");
			header("location:index.php?controller=order");
			break;
		case 'back_to_order':
			header("location:index.php?controller=order");
			break;
		
		default:
			# code...
			break;
	}
	// =========================================

	include "view/view_order_detail.php";
?>