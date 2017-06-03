<div class="col-md-4 col-xs-offset-4">
	<div class="panel panel-primary">
		<div class="panel panel-heading">Add, Edit-User</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>">
				<!-- row -->
				<div class="row">
					<div class="col-md-3">Username</div>
					<div class="col-md-9">
						<input type="text" name="c_username" class="form-control" value="<?php echo isset($arr["c_username"])?$arr["c_username"]:"";?>" required>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-3">Password</div>
					<div class="col-md-9">
						<input type="password" name="c_password" class="form-control" required>
					</div>
				</div>
				<!-- end row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-3">Fullname</div>
					<div class="col-md-9">
						<input type="text" name="c_fullname" class="form-control" value="<?php echo isset($arr["c_fullname"])?$arr["c_fullname"]:"";?>" required>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 15px; ">
					<div class="col-md-3"></div>
					<div class="col-md-9">
						<input type="submit" value="Process" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-warning">
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>