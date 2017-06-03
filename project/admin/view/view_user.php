<div class="col-md-6 col-xs-offset-3">
	<div style="margin-bottom: 15px; ">
		<a class="btn btn-primary" href="index.php?controller=add_edit_user&act=add">Add user</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel panel-heading">User</div>
		<div class="panel-body">
			<div class="col-md-12">
				<table cellpadding="5" class="table table-bordered table-hover">
					<tr style="background-color: #ddd; ">
						<th style="width: 50px; ">STT</th>
						<th style="width: 150px; ">Username</th>
						<th style="width: 150px; ">Fullname</th>
						<th style="width: 100px; ">Manager</th>
						
					</tr>
					<?php 
						$stt = 0;
						foreach ($arr_user as $rows_user) {
							$stt++;
					?>
					<tr>
						<td style="text-align: center; "><?php echo $stt;?></td>
						<td style="text-align: center; "><?php echo $rows_user["c_username"];?></td>
						<td style="text-align: center; "><?php echo $rows_user["c_fullname"];?></td>
						<td style="width: 100px;">
							<a href="index.php?controller=add_edit_user&act=edit&id=<?php echo $rows_user["pk_user_id"]?>">Edit</a>&nbsp&nbsp|&nbsp
							<a onclick="return window.confirm('Bạn có muốn xóa!')" href="index.php?controller=user&act=delete&id=<?php echo $rows_user["pk_user_id"]?>">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
				<div>
					<ul class="pagination" style="margin: 0px; padding: 0px; ">
						<?php  
							for($i=1; $i<=$num_page; $i++) {
						?>
						<li><a href="index.php?controller=user&p=<?php echo $i;?>"><?php echo $i;?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>