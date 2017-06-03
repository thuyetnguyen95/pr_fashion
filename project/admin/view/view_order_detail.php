<div class="col-md-12" >
	<div class="panel panel-primary">
		<div class="panel-heading ">Chi tiết đơn hàng</div>
		<div class="panel-body">
			<div class="info_cus" style="margin-bottom: 10px;">
				<span style="color: red; ">Thông tin khách hàng:</span>
				<div class="">
					<div style="float: left;margin-right: 60px; "><span style="font-weight: bold; ">Tên khách hàng:</span> <?php echo $arr_order["c_fullname"] ;?></div>
					<div style="float: left;margin-right: 60px; "><span style="font-weight: bold; ">Địa chỉ:</span> <?php echo $arr_order["c_address"] ;?></div>
					<div><span style="font-weight: bold; ">Số điện thoại:</span> <?php echo $arr_order["c_phone"] ;?></div>

				</div>
			</div>
			<!-- <form method="post" action="index.php?controller=order_detail&&act=send_product&id=<?php echo $id_order_detail;?>"> -->
				<div class="table-responsive">
					<table cellpadding="5" class="table table-hover table-bordered" style="text-align: center; ">
					<tr style="background: #ddd;">
						<th style="width:50px;">STT</th>
						<th style="text-align: center;width:150px; ">Mã đơn hàng</th>
						<th style="text-align: center;width:150px; ">Mã mặt hàng</th>
						<th style="text-align: center; ">Ngày đặt</th>
						<th style="text-align: center; ">Ngày nhận</th>
						<th style="text-align: center; ">Số lượng</th>
						<th style="text-align: center; ">Giá sản phẩm</th>
						<!-- <th style="text-align: center;width: 100px; ">Giao hàng</th> -->
					</tr>
						<?php  
						$stt= 0;
						$spay = 0;
						foreach ($arr_order_detail as $key ) {
							$stt++;
							$spay += $key["c_number"] * $key["c_price"];
						?>
					<tr>
						<td style="width:50px;"><?= $stt;?></td>
						<td style="text-align: center; "><?= $key["fk_order_id"];?></td>
						<td style="text-align: center; "><?= $key["fk_product_id"];?></td>
						<td style="text-align: center; "><?php echo $arr_order["c_create"] ;?></td>
						<td style="text-align: center; "><?php echo $arr_order["c_recive"] ;?></td>
						<td style="text-align: center; "><?= $key["c_number"];?></td>
						<td style="text-align: center; "><?= number_format($key["c_price"]);?></td>
					</tr>
					<?php } ?>
				</table>
				</div>
				<div style="margin-bottom: 20px;font-weight: 700 ">
					Tổng giá trị:  <?php echo number_format($spay);?> VND
				</div>
			<!-- </form> -->
				<a href="index.php?controller=order_detail&&act=back_to_order"><input type="submit" name="" class="btn btn-warning" value="Trở lại"></a>
				<a style="margin-left: 10px; " href="index.php?controller=order_detail&&act=send_product&id=<?php echo $id_order_detail;?>"><input type="submit" name="" class="btn btn-success" value="Giao hàng"></a>
				<a style="margin-left: 10px; " href="index.php?controller=order_detail&&act=destroy_product&id=<?php echo $id_order_detail;?>"><input type="submit" name="" class="btn btn-danger" value="Hủy giao hàng"></a>
		</div>
	</div>
</div>
