<div id="main_content" class="colum_left">
    <div class="block">
        <h3 class="title_block">Tin tức thời trang</h3>
        <div class="detail_block">
            <div class="content">
					<ul>
						<?php  
							foreach ($arr_news as $key) {
							
						?>
						<li>
							<div class="content_title">
								<a href="index.php?controller=detail_news&id=<?php echo $key["pk_news_id"];?>"><?php echo $key["c_name"]?></a>
							</div>
							<div class="content_news">
								<div class="image_news"><a href="index.php?controller=detail_news&id=<?php echo $key["pk_news_id"];?>"><img src="./<?php echo isset($key["c_img"]) ? $key["c_img"]:"" ;?>"></a></div>
								<?php
									$str_new = $key["c_content"];
									echo substr($str_new,0,500).".....";
								?>
							</div>
							<div class="content_link"><a href="index.php?controller=detail_news&id=<?php echo $key["pk_news_id"];?>">Chi tiết >> </a></div>
						</li>
						<div class="line_news"></div>
						<?php  } ?>
					</ul>
				</div>
        </div>
    </div>
    <!-- phân trang -->
    <div class="clearfix">
        <ul class="pagination" style="margin: 0px; padding: 0px; ">
            <?php  
                for($i=1; $i<=$num_page; $i++) {
            ?>
            <li><a href="index.php?controller=news&p=<?php echo $i;?>"><?php echo $i;?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>