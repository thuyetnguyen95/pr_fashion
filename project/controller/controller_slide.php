<?php  
	$arr_slide = fetch("select * from tbl_slide where c_status = 1 order by pk_slide_id desc");
	include "view/view_slide.php";
?>