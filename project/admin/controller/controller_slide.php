<?php
	// =========================================
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
	switch ($act) {
		case 'delete':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			// xóa bản ghi bằng truy vấn SQL
			execute("delete from tbl_slide where pk_slide_id = $id");
			// chuyển đến trang chỉ định
			header("location:index.php?controller=slide");
			break;
		
		default:
			# code...
			break;
	}
	$arr_slide = fetch("select * from tbl_slide order by pk_slide_id desc");
	// =========================================
	// load view
	include "view/view_slide.php";
?>