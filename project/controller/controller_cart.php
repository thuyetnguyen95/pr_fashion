<?php  
	include "./admin/model/cart.php";
	
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'add':
			$id = isset($_GET["id"]) ? $_GET["id"]:"";
			$product = fetch_one("select * from tbl_product where pk_product_id = $id");
			cart_add($product,$id);
			header("location:index.php?controller=cart");
			break;
		case 'delete':
			$id = isset($_GET["id"]) ? $_GET["id"]:"";
			cart_delete($id);
			header("location:index.php?controller=cart");
			break;
		case 'destroy':
			cart_destroy();
			header("location:index.php?controller=cart");
			break;
		case 'do_bill':
			// insert into tbl_order
			$c_fullname = $_POST["fullname"];
			$c_address = $_POST["address"];
			$c_phone = $_POST["phone"];
			$c_create = date("Y-m-d");
			$recive_date = $_POST["date"];
			$c_recive = str_replace("-","/",$recive_date);
			$c_sum = cart_total();
			execute("insert into tbl_order(c_fullname,c_address,c_phone,c_create,c_recive,c_sum) values('$c_fullname','$c_address','$c_phone','$c_create','$c_recive',$c_sum)");
			
			// insert into tbl_order_detail
			$insert_id = fetch_one("select pk_order_id from tbl_order order by pk_order_id desc limit 0,1");
			$fk_order_id = $insert_id["pk_order_id"];
			foreach ($_SESSION['cart'] as $product) {
				$fk_product_id = $product["pk_product_id"];
				$c_number = $product["number"];
				$c_price = $product["c_price"];
				execute("insert into tbl_order_detail(fk_order_id,fk_product_id,c_number,c_price) values($fk_order_id,$fk_product_id,$c_number,$c_price)");
			}
			cart_destroy();
			break;
		default:
			# code...
			break;
	}
	include "view/view_cart.php";
?>