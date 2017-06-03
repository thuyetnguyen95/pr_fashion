<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
		$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$arr = fetch_one("select * from tbl_user where pk_user_id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_user&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$c_username = mysql_escape_string($_POST["c_username"]);
			$c_password = mysql_escape_string($_POST["c_password"]);
			$c_fullname = mysql_escape_string($_POST["c_fullname"]);

			// echo $c_fullname."<br />".$c_password."<br />".$c_username;
			// die();
			execute("update tbl_user set c_username='$c_username',c_password='$c_password',c_fullname='$c_fullname' where pk_user_id = $id");
			if(empty($c_password)==false){
				$c_password = md5($c_password);
				execute("update tbl_user set c_password='$c_password' where pk_user_id=$id");
			}
			header("location:index.php?controller=user");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_user&act=do_add";
			break;
		case 'do_add':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
			$c_username = mysql_escape_string($_POST["c_username"]);
			$c_password = mysql_escape_string($_POST["c_password"]);
			$c_fullname = mysql_escape_string($_POST["c_fullname"]);
			// mysql_escape_string() chuyển ký tự đặc biệt về kiểu string
			$c_password = md5($c_password);
			execute("insert into tbl_user(c_username,c_password,c_fullname) values ('$c_username','$c_password','$c_fullname')");
			header("location:index.php?controller=user");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_user.php";
?>