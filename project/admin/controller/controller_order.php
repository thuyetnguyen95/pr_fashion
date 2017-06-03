<?php
	$count_dg = fetch("select * from tbl_order where c_status = 1");
	$count_cg = fetch("select * from tbl_order where c_status = 0");
	$arr_order = fetch("select * from tbl_order order by pk_order_id desc");
	//$arr_order_detail = fetch("select * from tbl_order_detail order by pk_order_id desc");
	include "view/view_order.php";	
?>