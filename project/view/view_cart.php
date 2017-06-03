<!-- <div id="wp_content" class="clearfix"> -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'vi'}
</script>
<div id="main_content" class="">
    <div class="block">
        <h5 class="title_block">Giỏ hàng của bạn</h5>
        <div class="detail_block">
            <div class="fb_about">
                <div class="g-pl usone" data-size="medium"></div>
                <div class="fb-like" data-href="https://www.facebook.com/Fashion-247-1815355935362704/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="feature_product" >
        <div class="block">
            <h3 class="title_about">Sản phẩm</h3>
            <div>
            	<!-- <form method="post" action=""> -->
            		<div class="table-responsive">
                        <table border="1" cellpadding="5px" class="table table-hover table-bordered">
                        <tr style="background: #ddd; ">
                            <th style="text-align: center;width: 50px; ">STT</th>
                            <th style="text-align: center;width: 120px; "> Ảnh </th>
                            <th style="text-align: center; ">Tên mặt hàng</th>
                            <th style="text-align: center;width: 100px; ">Số lượng</th>
                            <th style="text-align: center;width: 150px ">Đơn giá</th>
                            <th style="text-align: center;width: 80px; ">Xóa</th>
                        </tr>
                        <?php  
                            $stt = 0;
                            foreach ($_SESSION['cart'] as $product) {
                                $stt ++;
                        ?>
                        <tr>
                            <td style="text-align: center;width: 50px; "><?php echo $stt;?></td>
                            <td style="text-align: center; "><img width="150px" src="<?php echo $product["c_img"];?>"></td>
                            <td style="text-align: center; "><?php echo $product["c_name"];?></td>
                            <td style="text-align: center;"><?php echo $product["number"];?></td>
                            <td style="text-align: center; "><?php echo number_format($product["c_price"]);?></td>
                            <td style="text-align: center; "><a href="index.php?controller=cart&act=delete&id=<?php echo $product["pk_product_id"];?>" class="glyphicon glyphicon-trash"></a></td>
                        </tr>
                        <?php } ?>
                    </table>      
                    </div>
                    <!-- ============= -->
                    <?php
                        if(cart_total() == 0)
                            echo "<div style = 'margin-top:5px;margin-bottom:10px;color:red;'>Không có sản phẩm nào trong giỏ hàng</div>";
                        else
                        {
                    ?>
                    <div style="margin-top: 5px;">
                        <span style="font-weight: bold">Số lượng sản phẩm&nbsp: </span>&nbsp
                        <span style="color:red;"><?php echo cart_number();?></span>
                    </div>
                    <div style="margin-bottom:10px;">
                        <span style="font-weight: bold">Tổng giá &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </span>&nbsp
                        <span style="color:red;"><?php echo number_format(cart_total());?> VND</span>
                    </div>
                    <?php } ?>
                    <!-- ============= -->

                    <script type="text/javascript">
                        function goBack(){
                            window.history.back();
                        }
                    </script>
                    <a><input type="button" name="" class="btn btn-warning" onclick="goBack()" value="Trở về"></a>
            		<?php 
            			if(cart_number() > 0){
            		?>
            		<a style="margin-left:10px;"" href="index.php?controller=cart&act=bill"><input type="button" name="" class="btn btn-info" value="Thanh toán"></a>
            		<?php } ?>
            		<a style="margin-left:10px;" href="index.php?controller=cart&act=destroy" onclick="return window.confirm('Bạn có muốn xóa toàn bộ giỏ hàng ?')"><input type="button" name="" class="btn btn-danger" value="Xóa giỏ hàng"></a>
            	<!-- </form> -->
               
            <!-- </div>
                   
                    
            </div>
        </div> -->
    </div>
    <!--=======================  -->
    <style type="text/css">
        .cart_menu{margin-top: 10px;}
        .cart_menu ul{padding: 0px;margin: 0px;}
        .cart_menu ul li{display: inline;padding: 10px;}
        .cart_menu ul li a{font-weight: bold; text-decoration: none}
    </style>
    	<?php 
    		if(isset($_GET["act"])){
    			if($_GET["act"] == "bill"){
    	?>
    	<h3 class="title_bill" style="margin-bottom: 20px; ">Thông tin khách hàng:</h3>
                    <div class="">
                        <form method="post" action="index.php?controller=cart&act=do_bill">
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Họ và tên: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="text" name="fullname" class="form-control" placeholder="Tên của bạn" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Số điện thoại: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="number" name="phone" class="form-control" placeholder="Di động" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Địa chỉ: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="text" name="address" class="form-control" placeholder="Địa chỉ" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3" style="font-weight:bold;padding-top: 3px;  ">Ngày giao hàng: <span style="color:red">(*)</span></div>
                                <div class="col-md-8">
                                    <input type="date" name="date" class="form-control" placeholder="Địa chỉ" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-8 col-xs-offset-3">
                                    <span style="color:red;font-weight:bold; ">(*)</span> 
                                    <span class="form-text text-muted">Mục bắt buộc nhập</span>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px; ">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Gửi">
                                    <input type="reset" name="reset" class="btn btn-warning" value="Nhập lại">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="" style="margin-top: 50px; ">
                        <p>
                            Chân trọng cảm ơn quý khách hàng đã sử dụng sản phẩm của chúng tôi
                            . Chúng tôi cam kết đảm bảo chất lượng sản phẩm tới tay khách hàng,
                            mọi thắc mắc xin vui lòng liên hệ với chúng tôi
                            qua hòm thư điện tử: <a href="#" style="margin-left:10px;">ffshopsupport@gmail.com</a>
                            .  Xin chân thành cảm ơn quý khách
                        </p>
                    </div>
    	<?php } } ?>
    <!--=======================  -->
</div>
</div>
</div>
