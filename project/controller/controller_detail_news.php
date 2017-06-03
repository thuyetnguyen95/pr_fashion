<?php
	$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
	$arr_detail_news = fetch_one("select * from tbl_news where pk_news_id=$id");
	include "controller/controller_right.php";
	include "view/view_detail_news.php";	
?>