<div class="col-md-12">
	<div style="margin-bottom: 15px; ">
		<a class="btn btn-primary" href="index.php?controller=add_edit_product&act=add">Thêm sản phẩm</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel panel-heading">Sản phẩm</div>
		<div class="panel-body">
			<div class="col-md-12">
				<!-- List sản phẩm -->
					<table cellpadding="5" class="table table-hover table-bordered ">
						<tr style=" ">
							<th style="width: 50px;text-align: center; ">STT</th>
							<th style="width: 50px;text-align: center; ">Season</th>
							<th style="width: 100px;text-align: center; ">Ảnh</th>
							<th style="text-align: center;width: 150px;">Tên sản phẩm</th>
							<th style="text-align: center;">Mô tả</th>
							<th style="text-align: center;width: 150px; ">Thuộc danh mục</th>
							<th style="text-align: center;">Giá</th>
							<th style="text-align: center;width: 100px; ">Trạng thái</th>
							<th style="text-align: center;width:100px;">Quản lý</th>
						</tr>
						<?php
							$stt = 0;  
							foreach ($arr_product as $key) {
								$stt++;
						?>
						<tr style="text-align: center;">
							<td><?php echo $stt;?></td>
							<td>
								<?php
									$arr_season = fetch("select * from tbl_season where pk_season_id=".$key["fk_season_id"]);
									foreach ($arr_season as $key_season) {
								?>
									<?php echo $key_season["c_name"];?>
								<?php }?>
							</td>
							<td>
							<?php
								// echo $key["c_img"] != "" ? "
								// <img src='../".$key["c_img"]."' style='width: 100px;'
								// ":"";
								// ====== cách khác
								if($key["c_img"] != ""){
							?>
								<img src="../<?php echo $key["c_img"];?>" style="width: 100px;">
							<?php } ?>
							</td>
							<td><?php echo $key["c_name"]?></td>
							<td><?php echo $key["c_description"]?></td>
							<td>
								<?php
									$category = fetch_one("select c_name from tbl_category_product where pk_category_product_id=".$key["fk_category_product_id"]);
									echo $category["c_name"];
								?>
							</td>
							<td style="text-align: right; "><?php echo number_format($key["c_price"]);?>VND</td>
							<td>
								<?php echo ($key["c_status"])==1 ?
								 "<span style='color:blue'>Còn hàng</span>":
								 "<span style='color:red'>Hết hàng</span>";?>
							</td>
							<td>
								<a href="index.php?controller=add_edit_product&act=edit&id=<?php echo $key["pk_product_id"];?>">Edit</a>&nbsp;&nbsp;|
								<a onclick="return window.confirm('Bạn có muốn xóa sản phẩm này ?')" href="index.php?controller=product&act=delete&id=<?php echo $key["pk_product_id"];?>">Delete</a>
								
							</td>
						</tr>
						<?php } ?>
					</table>
				<!-- List sản phẩm -->
				<div>
					<ul class="pagination" style="margin: 0px; padding: 0px; ">
						<?php  
							for($i=1; $i<=$num_page; $i++) {
						?>
						<li><a href="index.php?controller=product&p=<?php echo $i;?>"><?php echo $i;?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>