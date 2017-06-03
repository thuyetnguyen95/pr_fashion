<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom: 15px; ">
		<a class="btn btn-primary" href="index.php?controller=add_edit_about&act=add">Thêm bài viết mới</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel panel-heading">Bài giới thiệu</div>
		<div class="panel-body">
			<div class="col-md-12">
				<!-- List sản phẩm -->
					<table cellpadding="5" class="table table-hover table-bordered ">
						<tr style=" ">
							<th style="width: 50px;text-align: center; ">STT</th>
							<th style="width: 100px;text-align: center; ">Ảnh</th>
							<th style="text-align: center;">Tên bài viết</th>
							<th style="text-align: center;">Mô tả</th>
							<!-- <th style="text-align: center;">Chi tiết</th> -->
							<th style="text-align: center;width:100px;">Quản lý</th>
						</tr>
						<?php
							$stt = 0;  
							foreach ($arr_about as $key) {
								$stt++;
						?>
						<tr style="text-align: center;">
							<td><?php echo $stt;?></td>
							<td>
							<?php
								if($key["c_img"] != ""){
							?>
								<img src="../<?php echo $key["c_img"];?>" style="width: 100px;">
							<?php } ?>
							</td>
							<td><?php echo $key["c_name"]?></td>
							<td><?php echo $key["c_description"]?></td>
							<td>
								<a href="index.php?controller=add_edit_about&act=edit&id=<?php echo $key["pk_about_id"];?>">Edit</a>&nbsp;&nbsp;|
								<a onclick="return window.confirm('Bạn có muốn xóa bài viết này ?')" href="index.php?controller=about&act=delete&id=<?php echo $key["pk_about_id"];?>">Delete</a>
								
							</td>
						</tr>
						<?php } ?>
					</table>
				<!-- List sản phẩm -->
			</div>
		</div>
	</div>
</div>