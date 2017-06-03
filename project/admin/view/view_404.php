<div class="col-md-8 col-xs-offset-2" >
	<div style="margin-bottom: 15px; ">
		<a class="btn btn-primary" href="index.php?controller=add_edit_404&act=add">Add 404</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">404</div>
		<div class="panel-body">
			<table cellpadding="5px;" class="table table-bordered table-hover ">
				<tr>
					<th style="width: 50px; ">STT</th>
					<th style="width: 150px;text-align:center">Tên 404</th>
					<th style="text-align:center">Hình ảnh</th>
					<th style="width: 150px;text-align:center">Tác vụ</th>
				</tr>
				<?php  
					$stt=0;
					foreach ($arr_404 as $key) {
						$stt++;
				?>
				<tr>
					<td><?php echo $stt;?></td>
					<td style="text-align:center"><?php echo $key["c_name"];?></td>
					<td style="text-align:center">
						<?php
							if($key["c_img"] != ""){
						?>
							<img style="max-width: 300px;" src="../<?php echo $key["c_img"];?>">
						<?php }?>
					</td>
					<td style="text-align:center">
						<a href="index.php?controller=add_edit_404&act=edit&id=<?php echo $key["pk_404_id"];?>">Edit</a>
					</td>
				</tr>
				<?php  } ?>
			</table>
		</div>
	</div>
</div>

<!--  -->
<!-- &nbsp&nbsp|
						<a onclick="return window.confirm('Có muốn xóa ?')" href="index.php?controller=404&act=delete&id=<?php echo $key["pk_404_id"];?>">Delete</a> -->
<!--  -->