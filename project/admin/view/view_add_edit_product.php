
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel panel-heading">Thêm, Sửa sản phẩm</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
				<!-- row -->
				<div class="row">
					<div class="col-md-2">Tên sản phẩm</div>
					<div class="col-md-10">
						<input type="text" name="c_name" class="form-control" value="<?php echo isset($arr["c_name"])?$arr["c_name"]:"";?>" required>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2">Danh mục</div>
					<div class="col-md-10">
						<select name="fk_category_product_id" class="form-control">
						<?php  
							$category = fetch("select * from tbl_category_product");
							foreach ($category as $rows_category) {
							
						?>
							<option <?php echo isset($arr["fk_category_product_id"])&&$arr["fk_category_product_id"]==$rows_category["pk_category_product_id"]?"selected":"";?> value="<?php echo $rows_category["pk_category_product_id"];?>">
								<?php echo $rows_category["c_name"];?>
							</option>
						<?php } ?>
						</select>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2">Mô tả</div>
					<div class="col-md-10">
						<textarea name="c_description" style="width:100%;height: 50px; "><?php echo isset($arr["c_description"])?$arr["c_description"]:"";?></textarea>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2">Chi tiết</div>
					<div class="col-md-10">
						<textarea name="c_content" style="width:500px;"><?php echo isset($arr["c_content"])?$arr["c_content"]:"";?>
						</textarea>
						<script type="text/javascript">
							CKEDITOR.replace('c_content');
						</script>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2">Giá</div>
					<div class="col-md-5">
						<input type="number" name="c_price" class="form-control" value="<?php echo isset($arr["c_price"])?$arr["c_price"]:"";?>" required>
					</div>
				</div>
				<!-- end row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2">Ảnh</div>
					<div class="col-md-10">
						<input type="file" name="c_img" >
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="checkbox" name="c_hotproduct" id="c_hotproduct" <?php echo isset($arr["c_hotproduct"]) && $arr["c_hotproduct"] == 1 ? "checked":"";?>>
						<label for="c_hotproduct">Sản phẩm nổi bật</label>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="checkbox" name="c_selling_product" id="c_selling_product" <?php echo isset($arr["c_selling_product"]) && $arr["c_selling_product"] == 1 ? "checked":"";?>>
						<label for="c_selling_product">Sản phẩm bán chạy nhất</label>
					</div>
				</div>
				<!-- end row -->
				<?php 
					if($_GET["controller"]=="add_edit_product" && $_GET["act"]=="add"){
						include "v_add_product.php";
					}
					else if($_GET["controller"]=="add_edit_product" && $_GET["act"]=="edit"){
						include "v_edit_product.php";
					}
				?>
				<!-- row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="checkbox" name="c_status" id="c_status" <?php echo isset($arr["c_status"]) && $arr["c_status"] == 1 ? "checked":"";?>>
						<label for="c_status">Trạng thái mặt hàng (còn/hết)</label>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top: 15px; ">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" value="Process" class="btn btn-primary">
						<input type="reset" value="Reset" class="btn btn-warning">
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>