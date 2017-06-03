<?php
	// $id = isset($_GET["id"]) ? $_GET["id"]:0;
	
	$arr_season = fetch("select * from tbl_season");
	include "view/view_season.php";
?>