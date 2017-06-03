<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2">Trang phục theo mùa</div>
					<div class="col-md-10">
						<?php 
							$arr_season = fetch("select * from tbl_season");
							$arr = fetch_one("select * from tbl_product");
							foreach ($arr_season as $key) {
								
						?>
						<input type="radio" value="<?php echo $key["pk_season_id"]?>" name="pk_season_id" id="<?php echo $key["pk_season_id"]?>" <?php echo isset($key["pk_season_id"]) && $key["pk_season_id"] == $arr["fk_season_id"] ? "checked":"";?>>
						<label for="<?php echo $key["pk_season_id"]?>" style="margin-right: 10px; "><?php echo $key["c_name"]?></label>
						<?php }?>
					</div>
				</div>
				<!-- end row -->