<?php
	$arr_about = fetch_one("select * from tbl_about order by pk_about_id desc");

	include "view/view_about.php";

?>