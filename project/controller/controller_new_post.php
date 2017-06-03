<?php 
	$arr_new_post = fetch("select * from tbl_news order by pk_news_id desc limit 0,5");
	include"view/view_new_post.php";
?>