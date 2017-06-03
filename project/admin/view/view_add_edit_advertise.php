
<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel panel-heading">Thêm, Sửa quảng cáo</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
				<!-- row -->
				<div class="row">
					<div class="col-md-3">Tên nhà quảng cáo</div>
					<div class="col-md-8">
						<input type="text" name="c_name" class="form-control" value="<?php echo isset($arr["c_name"])?$arr["c_name"]:"";?>" required>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-3">Đường dẫn/URL</div>
					<div class="col-md-8">
						<input type="text" name="c_url" class="form-control" value="<?php echo isset($arr["c_url"])?$arr["c_url"]:"";?>" required>
					</div>
				</div>
				<!-- end row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-3">Ảnh</div>
					<div class="col-md-8">
						<input type="file" name="c_img" >
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 15px; ">
					<div class="col-md-3"></div>
					<div class="col-md-8">
						<input type="submit" value="Process" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-warning">
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>