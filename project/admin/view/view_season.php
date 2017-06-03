<div class="col-md-8 col-xs-offset-2" >
	<!-- <div style="margin-bottom: 15px; ">
		<a class="btn btn-primary" href="index.php?controller=add_edit_season&act=add">Add Season</a>
	</div> -->
	<div class="panel panel-primary">
		<div class="panel-heading ">Season</div>
		<div class="panel-body">
			<table cellpadding="5px;" class="table table-bordered table-hover ">
				<tr>
					<th style="width: 50px; ">STT</th>
					<th style="width: 150px;text-align:center">Tên mùa</th>
					<th style="text-align:center">Hình ảnh</th>
					<th style="width: 150px;text-align:center">Tác vụ</th>
				</tr>
				<?php  
					$stt=0;
					foreach ($arr_season as $key) {
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
						<a href="index.php?controller=add_edit_season&act=edit&id=<?php echo $key["pk_season_id"];?>">Edit</a>
					</td>
				</tr>
				<?php  } ?>
			</table>
		</div>
	</div>
</div>

<!--  -->
<!-- &nbsp&nbsp|
						<a onclick="return window.confirm('Có muốn xóa ?')" href="index.php?controller=season&act=delete&id=<?php echo $key["pk_season_id"];?>">Delete</a> -->
<!--  -->