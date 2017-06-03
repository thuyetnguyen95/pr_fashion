<?php  
	// ====================phân trang============
	// số bản ghi trên 1 trang
	$record_perpage = 15;
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
?>