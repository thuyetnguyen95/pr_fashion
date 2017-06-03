<div class="container">
	<div class="alert alert-success" role="alert" style="margin-top: 50px; ">
		<marquee width="300px;">
			<span style="color:red">Xin chào: <?php  echo $name;?> </span>
		</marquee>
	</div>
	<div class="panel panel-primary">
		<div class="row">
			<div class="col-md-3" >
				<div class="panel-body" style="width:220px;">
					<div class="panel panel-primary" style="margin-left: 10px; ">
						<img src="./img/user.png" width="180" height="200">
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel-body">
					<!--  -->
					<div class="row" style="margin-top:80px; font-size: 16px; ">
						<div class="col-md-2" style="font-weight: 700;">
							Họ và tên: 
						</div>
						<?php  
						foreach ($arr_profile as $key){
							?>
							<div class="col-md-8"><?= $key["c_fullname"];?></div>
							<?php }?>
						</div>
					</div>
					<!--  -->
					<!--  -->
					<!-- <div class="row" style="margin-top:80px; font-size: 16px; ">
						<div class="col-md-2" style="font-weight: 700;">
							Địa chỉ: 
						</div>
						<?php  
						foreach ($arr_profile as $key){
							?>
							<div class="col-md-8">
								<?= $key["c_address"];?>
							</div>
							<?php }?>
						</div>
					</div> -->
					<!--  -->
				</div>
			</div>
		</div>
	</div>