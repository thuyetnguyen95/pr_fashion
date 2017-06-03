<?php 
	$name = isset($_SESSION["username"]) ? $_SESSION["username"]:"";
	$arr_profile = fetch("select * from tbl_user where c_username = '$name'");
	include "view/view_profile.php";
?>