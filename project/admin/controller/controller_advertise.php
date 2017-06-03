<?php
	// =========================================
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
	switch ($act) {
		case 'delete':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			// xóa bản ghi bằng truy vấn SQL
			execute("delete from tbl_advertise where pk_advertise_id = $id");
			// chuyển đến trang chỉ định
			header("location:index.php?controller=advertise");
			break;
		
		default:
			# code...
			break;
	}
	// =========================================
	$arr_advertise = fetch("select * from tbl_advertise");
	// load view
	include "view/view_advertise.php";
?>