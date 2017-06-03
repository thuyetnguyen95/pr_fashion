<div class="col-md-10 col-xs-offset-1" >
	<div class="panel panel-primary">
		<div class="panel-heading ">Đơn hàng</div>
		<div class="panel-body">
			<div class="row" style="margin-bottom: 20px; ">
				<div class="col-md-3">
					<span style="font-weight:700">Đã giao:</span>
					<span style="color:red;"><?php echo count($count_dg); ?></span>
				</div>
				<div class="col-md-3">
					<span style="font-weight:700">Chưa giao:</span>
					<span style="color:red;"><?php echo count($count_cg); ?></span>
				</div>
				<div class="col-md-3">
					<span style="font-weight:700">Tổng số đơn hàng:</span>
					<span style="color:red;"><?php echo count($arr_order); ?></span>
				</div>
			</div>
			<div class="table-responsive">
				<table cellpadding="5" class="table table-hover table-bordered" style="text-align: center; ">
				<tr style="background: #ddd;">
					<th style="width:50px;">STT</th>
					<th style="text-align: center; ">Tên khách hàng</th>
					<th style="text-align: center; ">Địa chỉ</th>
					<th style="text-align: center; ">Điện thoại</th>
					<th style="text-align: center; ">Trạng thái</th>
					<th style="text-align: center;width: 80px; ">Tác vụ</th>
				</tr>
				<?php 
					$stt = 0;
					$c_status = "";
					foreach ($arr_order as $key) {
						$stt++;
						($key["c_status"]==0)?$c_status = "Chưa giao hàng":$c_status="Đã giao hàng";
				?>
				<tr>
					<td><?= $stt;;?></td>
					<td><?= $key["c_fullname"];?></td>
					<td><?= $key["c_address"];?></td>
					<td><?= $key["c_phone"];?></td>
					<td style="color:<?php echo ($key["c_status"]) == 0 ? "red":"blue" ;?>"><?= $c_status;?></td>
					<td><a href="index.php?controller=order_detail&id=<?php echo $key["pk_order_id"];?>">Chi tiết</a></td>
				</tr>
				<?php } ?>
			</table>
			<script type="text/javascript">
				function back(){
					window.history.back();
				}
			</script>
			<!-- <div style="margin-top:10px; text-align: right; margin-right: 20px; ">
				<a href="" onclick="back()"><input type="submit" name="" class="btn btn-warning" value="Hoàn tác"></a>
			</div> -->
			</div>
		</div>
	</div>
</div>
