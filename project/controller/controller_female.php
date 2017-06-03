<?php

	// include "controller/controller_pagination.php";
	$record_perpage = 15;
	// tổng số bản ghi
	$total_record = fetch_one("select count(*) as total from tbl_product where fk_category_product_id = 2");
	// lấy tổng số trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	// lấy trang hiện tại
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0:$page-1;
	// các bản ghi trên trang đó
	$from = $page * $record_perpage;
	$arr_female_product = fetch("select * from tbl_product where fk_category_product_id = 2 and c_status = 1 order by pk_product_id desc limit $from,$record_perpage");
	include "view/view_female_product.php";
	include "controller/controller_right.php";
?>