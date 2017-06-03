<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
		$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$arr = fetch_one("select * from tbl_slide where pk_slide_id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_slide&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			$c_status =$_POST["c_status"];
			execute("update tbl_slide set c_name='$c_name',c_status=$c_status where pk_slide_id=$id");
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/slide/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
				// update CSDL
				execute("update tbl_slide set c_img='$c_img' where pk_slide_id = $id");
			}
			header("location:index.php?controller=slide");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_slide&act=do_add";
			break;
		case 'do_add':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			// $check_status = "";
			if($_POST["$c_status"]==1)
				// {$check_status = 1;}
				$c_status = 1;
			else if($_POST["c_status"]==0)
				$c_status = 0;
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/slide/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
	}
			execute("insert into tbl_slide(c_name,c_img,c_status) values ('$c_name','$c_img','$c_status')");
			header("location:index.php?controller=slide");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_slide.php";
?>