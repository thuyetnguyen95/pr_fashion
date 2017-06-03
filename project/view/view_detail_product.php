<!-- <div id="wp_content" class="clearfix"> -->
<div id="main_content" class="colum_left">
    <div class="block">
        <h3 class="title_block">Thông tin sản phẩm</h3>
        <div class="detail_block">
            <div class="img_detail">
                <img src="<?php echo $arr_detail_product["c_img"];?>">
            </div>
            <div class="content_detail">
                <div class="detail_name"><p><?php echo $arr_detail_product["c_name"];?></p></div>
                <div class="detail_price"><span><?php echo number_format($arr_detail_product["c_price"]);?></span>   VNĐ <a class="buy_detail" href="index.php?controller=cart&act=add&id=<?php echo $_GET['id'];?>">Mua ngay</a></div>                           
                <div class="line-detail">
                <?php
                    echo $arr_detail_product["c_description"];
                ?>
                </div>
            </div>
            
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="feature_product" >
        <div class="block">
            <h2 class="title_block">Chi tiết</h2>
            <?php  echo $arr_detail_product["c_content"];?>
        </div>
    </div>
</div>
</div>
</div>
