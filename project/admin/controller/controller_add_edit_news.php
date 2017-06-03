<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
		$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$arr = fetch_one("select * from tbl_news where pk_news_id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_news&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			$c_description = mysql_escape_string($_POST["c_description"]);
			$c_content = mysql_escape_string($_POST["c_content"]);
			execute("update tbl_news set c_name='$c_name',c_description='$c_description',c_content='$c_content' where pk_news_id=$id");
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/news/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
				// update CSDL
				execute("update tbl_news set c_img='$c_img' where pk_news_id = $id");
			}
			header("location:index.php?controller=news");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_news&act=do_add";
			break;
		case 'do_add':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			$c_description = mysql_escape_string($_POST["c_description"]);
			$c_content = mysql_escape_string($_POST["c_content"]);
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/news/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
	}
			execute("insert into tbl_news(c_name,c_description,c_content,c_img) values ('$c_name','$c_description','$c_content','$c_img')");
			header("location:index.php?controller=news");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_news.php";
?>