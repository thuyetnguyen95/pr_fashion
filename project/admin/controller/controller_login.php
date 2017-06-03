<?php  
	// echo md5("123");
	$c_username = $_POST["c_username"];
	$c_password = md5($_POST["c_password"]);
	$check = fetch_one("select c_username,c_password from tbl_user where c_username='$c_username'");
	if($check > 0){
		if($check["c_password"] == $c_password){
			// gán username vào biến $_SESSION
			$_SESSION["username"] = $c_username;
			// di chuyển về trang index
			header("location:index.php");
			
		}
		else echo "sai username or pass";
	}
	else echo "sai username or pass";
?>