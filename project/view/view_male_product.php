
<!-- <div id="wp_content" class="clearfix"> -->
<div id="main_content" class="colum_left">
    <div class="block">
        <h3 class="title_block">Sản phẩm mới</h3>
        <div class="detail_block">
            <ul class="list_items">
                <?php 
                   foreach ($arr_male_product as $key) {
                ?>
                    <li>
                        <div class="thumb">
                            <a href="index.php?controller=detail_product&id=<?php echo $key["pk_product_id"];?>" class="full_img">
                                <img alt="" style="height:230px;"  src="<?php echo isset($key["c_img"]) ? $key["c_img"]:"";?>">
                            </a>
                        </div>
                        <div class="info">
                            <h2 class="title_items">
                                <a  href="index.php?controller=detail_product&id=<?php echo $key["pk_product_id"]?>" class="full_img"><?php echo $key["c_name"];?></a>
                            </h2>
                            <p>
                                <span class="price">
                                    <?php echo $key["c_price"];?> đ
                                </span>
                                <a class="buy" href="index.php?controller=cart&act=add&id=<?php echo $key["pk_product_id"];?>">Mua hàng</a>
                            </p>
                        </div>
                    </li>
                <?php } ?>
            </ul>

        </div>
    </div>
    <div class="clearfix">
        <ul class="pagination" style="margin: 0px; padding: 0px; ">
            <?php  
                for($i=1; $i<=$num_page; $i++) {
            ?>
            <li><a href="index.php?controller=male&p=<?php echo $i;?>"><?php echo $i;?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>

