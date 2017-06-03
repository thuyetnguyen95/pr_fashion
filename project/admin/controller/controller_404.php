<?php  
	// =========================================
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
	switch ($act) {
		case 'delete':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			// xóa bản ghi bằng truy vấn SQL
			execute("delete from tbl_404 where pk_404_id = $id");
			// chuyển đến trang chỉ định
			header("location:index.php?controller=404");
			break;
		
		default:
			# code...
			break;
	}
	// =========================================
	$arr_404 = fetch("select * from tbl_404");
	// load view
	include "view/view_404.php";
?>