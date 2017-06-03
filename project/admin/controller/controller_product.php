<?php
	// =========================================
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
	switch ($act) {
		case 'delete':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;\
			// xóa bản ghi bằng truy vấn SQL
			execute("delete from tbl_product where pk_product_id = $id");
			// chuyển đến trang chỉ định
			header("location:index.php?controller=product");
			break;
		
		default:
			# code...
			break;
	}
	// =========================================
	// ====================phân trang============
	// số bản ghi trên 1 trang
	$record_perpage = 10;
	// tổng số bản ghi
	$total_record = fetch_one("select count(*) as total from tbl_product");
	// lấy tổng số trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	// lấy trang hiện tại
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0:$page-1;
	// các bản ghi trên trang đó
	$from = $page * $record_perpage;
	// thực hiện truy vấn khi có các thông tin ở trên
	$arr_product = fetch("select * from tbl_product order by pk_product_id desc limit $from,$record_perpage");
	// phân trang==================
	// load view
	include "view/view_product.php";
?>