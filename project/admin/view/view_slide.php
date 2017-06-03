<div class="col-md-12" >
	<div style="margin-bottom: 15px; ">
		<a class="btn btn-primary" href="index.php?controller=add_edit_slide&act=add">Add Slide</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading ">Slide</div>
		<div class="panel-body">
			<table cellpadding="5px;" class="table table-bordered table-hover ">
				<tr>
					<th style="width: 50px; ">STT</th>
					<th style="width: 80px;text-align:center">Mô tả</th>
					<th style="text-align:center; ">Hình ảnh</th>
					<th style="text-align:center; ">Trạng thái</th>
					<th style="width: 100px;text-align:center">Tác vụ</th>
				</tr>
				<?php  
					$stt=0;
					foreach ($arr_slide as $key) {
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
						<?php
							if($key["c_status"]==1){
						?>
						<span style="color: blue; ">Hiện</span>
						<?php }?>
						<?php
							if($key["c_status"]==0){
						?>		
						<span style="color: red; ">Ẩn</span>
						<?php }?>				
					</td>
					<td style="text-align:center">
						<a href="index.php?controller=add_edit_slide&act=edit&id=<?php echo $key["pk_slide_id"];?>">Edit</a>&nbsp&nbsp|
						<a onclick="return window.confirm('Có muốn xóa ?')" href="index.php?controller=slide&act=delete&id=<?php echo $key["pk_slide_id"];?>">Delete</a>
					</td>
				</tr>
				<?php  } ?>
			</table>
		</div>
	</div>
</div>