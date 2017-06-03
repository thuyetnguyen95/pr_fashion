<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
		$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$arr = fetch_one("select * from tbl_advertise where pk_advertise_id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_advertise&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			$c_url = mysql_escape_string($_POST["c_url"]);
			execute("update tbl_advertise set c_name='$c_name',c_url='$c_url' where pk_advertise_id=$id");
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/advertise/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
				// update CSDL
				execute("update tbl_advertise set c_img='$c_img' where pk_advertise_id = $id");
			}
			header("location:index.php?controller=advertise");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_advertise&act=do_add";
			break;
		case 'do_add':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			$c_url = mysql_escape_string($_POST["c_url"]);
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/advertise/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
	}
			execute("insert into tbl_advertise(c_name,c_url,c_img) values ('$c_name','$c_img','$c_url')");
			header("location:index.php?controller=advertise");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_advertise.php";
?>