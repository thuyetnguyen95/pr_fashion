<?php  
	// $arr_new_product = fetch("select * from tbl_product order by pk_product_id desc limit 0,9 ");

	include "controller/controller_pagination.php";
	$arr_new_product = fetch("select * from tbl_product where c_status = 1 order by pk_product_id desc limit $from,$record_perpage");
	// phân trang==================
	include "view/view_new_product.php";
?>