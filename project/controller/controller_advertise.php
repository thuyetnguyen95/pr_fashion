<?php  
	$arr_advertise = fetch_one("select * from tbl_advertise order by pk_advertise_id desc");
	include "view/view_advertise.php";
?>