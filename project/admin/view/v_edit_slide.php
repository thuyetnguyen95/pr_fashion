<!-- end row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2">Trạng thái</div>
					<div class="col-md-10">
						<input type="radio" name="c_status" value="1" id="show" <?php echo ($arr["c_status"]== 1)? "checked":"" ;?>>
							<label for="show">Hiện</label>
						<input type="radio" name="c_status" value="0" id="hidden" <?php echo ($arr["c_status"]== 0)? "checked":"" ;?>>
							<label for="hidden">Ẩn</label>
					</div>
				</div>
				<!-- end row -->