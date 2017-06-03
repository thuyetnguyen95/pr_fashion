<?php  
	include "controller/controller_pagination.php";
	$id = isset($_GET["id"]) ? $_GET["id"]:0;
	if($id==1){
		$arr_spring = fetch("select * from tbl_product where fk_season_id = 1 and c_status = 1 order by pk_product_id desc limit $from,$record_perpage");
		include "view/view_season_spring.php";
		include "controller/controller_right.php";
	}
	else if($id==2){
			$arr_summer = fetch("select * from tbl_product where fk_season_id = 2 and c_status = 1 order by pk_product_id desc limit $from,$record_perpage");
			include "view/view_season_summer.php";
			include "controller/controller_right.php";
		}
		else if($id==3){
			$arr_autumn = fetch("select * from tbl_product where fk_season_id = 3 and c_status = 1 order by pk_product_id desc limit $from,$record_perpage");
				include "view/view_season_autumn.php";
				include "controller/controller_right.php";
			}
			else if($id==4){
				$arr_winter = fetch("select * from tbl_product where fk_season_id = 4 and c_status = 1 order by pk_product_id desc limit $from,$record_perpage");
				include "view/view_season_winter.php";
				include "controller/controller_right.php";
			}

?>