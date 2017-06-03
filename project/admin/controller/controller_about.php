<?php
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'delete':
			$id = isset($_GET["id"])?$_GET["id"]:"";
			execute("delete from tbl_about where pk_about_id=$id");
			break;
		
		default:
			# code...
			break;
	}
	$arr_about = fetch("select * from tbl_about order by pk_about_id desc");
	include "view/view_about.php";
?>