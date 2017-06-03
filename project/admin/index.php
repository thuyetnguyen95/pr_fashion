<?php  
	session_start();
		// load file config
	include "../config.php";
	include "model/model.php";
		// -----------------------------
	$controller = isset($_GET["controller"]) ? $_GET["controller"]:"";
		// $load_controller = "controller/controller_home.php";
	if($controller == "login")
		include "controller/controller_login.php";
	else if($controller == "logout")
				// hủy session username
		unset($_SESSION["username"]);
	else 
			// $load_controller = "controller/controller_$controller.php";
		$load_controller = "controller/controller_home.php";
	if(file_exists("controller/controller_".$controller.".php"))
		$load_controller = "controller/controller_".$controller.".php";
		// -----------------------------
	if(isset($_SESSION["username"])==true){
			// echo "Đã đăng nhập";
		include "view/view_layout.php";
	}
	else{
			// echo "Phải đăng nhập vào trang admin";
		include "view/login.php";
	}
?>