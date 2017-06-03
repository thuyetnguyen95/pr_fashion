<?php
	// =========================================
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
	switch ($act) {
		case 'delete':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			// xóa bản ghi bằng truy vấn SQL
			execute("delete from tbl_season where pk_season_id = $id");
			// chuyển đến trang chỉ định
			header("location:index.php?controller=season");
			break;
		
		default:
			# code...
			break;
	}
	// =========================================
	$arr_season = fetch("select * from tbl_season");
	// load view
	include "view/view_season.php";
?>