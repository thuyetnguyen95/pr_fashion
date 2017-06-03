<?php  
	$arr_hot_product = fetch("select * from tbl_product  where c_hotproduct = 1 and c_status = 1 order by pk_product_id desc limit 0,10");
	include "view/view_hot_product.php";
?>