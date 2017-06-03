<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
		$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$arr = fetch_one("select * from tbl_product where pk_product_id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_product&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			$fk_category_product_id = mysql_escape_string($_POST["fk_category_product_id"]);
			$c_description = mysql_escape_string($_POST["c_description"]);
			$c_content = mysql_escape_string($_POST["c_content"]);
			$c_price = mysql_escape_string($_POST["c_price"]);
			$c_hotproduct = isset($_POST["c_hotproduct"]) ? 1:0;
			// ==============check season-==============
			$check_season = "";
			if($_POST["pk_season_id"]==1){$check_season = "1";}
				else if($_POST["pk_season_id"]==2){$check_season = "2";}
					else if($_POST["pk_season_id"]==3){$check_season = "3";}
						else if($_POST["pk_season_id"]==4){$check_season = "4";}
			// ==============check season-==============
			$fk_season_id = $check_season;
			// echo $fk_season_id;
			// die();
			$c_selling_product = isset($_POST["c_selling_product"]) ? 1:0;
			$c_status = isset($_POST["c_status"]) ? 1:0;
			execute("update tbl_product set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_price='$c_price',fk_category_product_id=$fk_category_product_id,c_hotproduct=$c_hotproduct,fk_season_id=$fk_season_id,c_selling_product='$c_selling_product',c_status=$c_status where pk_product_id=$id");
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/product/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
				// update CSDL
				execute("update tbl_product set c_img='$c_img' where pk_product_id = $id");
			}
			header("location:index.php?controller=product");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_product&act=do_add";
			break;
		case 'do_add':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
			$c_name = mysql_escape_string($_POST["c_name"]);
			$fk_category_product_id = mysql_escape_string($_POST["fk_category_product_id"]);
			$c_description = mysql_escape_string($_POST["c_description"]);
			$c_content = mysql_escape_string($_POST["c_content"]);
			$c_price = mysql_escape_string($_POST["c_price"]);
			$c_hotproduct = isset($_POST["c_hotproduct"]) ? 1:0;
			// ==============check season-==============
			$check_season = "";
			if($_POST["pk_season_id"]==1){echo "1";}
				else if($_POST["pk_season_id"]==2){$check_season = "2";}
					else if($_POST["pk_season_id"]==3){$check_season = "3";}
						else if($_POST["pk_season_id"]==4){$check_season = "4";}
			// ==============check season-==============
			$fk_season_id = $check_season;
			$c_selling_product = isset($_POST["c_selling_product"]) ? 1:0;
			//---------------------------
			// upload ảnh
			if(isset($_FILES["c_img"])&& $_FILES["c_img"]["name"] != "" ){
				$img_name = $_FILES["c_img"]["name"];
				$img_size = $_FILES["c_img"]["size"];
				$img_tmp_name = $_FILES["c_img"]["tmp_name"];
				$c_img = "upload/product/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$c_img);
	}
			execute("insert into tbl_product(c_name,c_description,c_content,c_price,fk_category_product_id,c_img,c_hotproduct,c_selling_product,fk_season_id) values ('$c_name','$c_description','$c_content','$c_price','$fk_category_product_id','$c_img','$c_hotproduct','$c_selling_product',$fk_season_id)");
			header("location:index.php?controller=product");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_product.php";
?>