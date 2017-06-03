<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
		$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$arr = fetch_one("select * from tbl_404 where pk_404_id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_404&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			execute("update tbl_404 set c_name='$c_name' where pk_404_id=$id");
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/404/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
				// update CSDL
				execute("update tbl_404 set c_img='$c_img' where pk_404_id = $id");
			}
			header("location:index.php?controller=404");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_404&act=do_add";
			break;
		case 'do_add':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/404/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
	}
			execute("insert into tbl_404(c_name,c_img) values ('$c_name','$c_img')");
			header("location:index.php?controller=404");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_404.php";
?>