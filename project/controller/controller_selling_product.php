<?php 
	$arr_selling_product = fetch_one("select * from tbl_product where c_selling_product = 1 and c_status = 1 order by pk_product_id desc");
	
	include "view/view_selling_product.php";	
?>