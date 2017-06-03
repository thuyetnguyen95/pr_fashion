<?php
	$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
	$arr_detail_product = fetch_one("select * from tbl_product where pk_product_id=$id");
	include "controller/controller_right.php";
	include "view/view_detail_product.php";	
?>