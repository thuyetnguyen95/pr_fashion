

    <div id="sidebar" class="colum_right season_right">
        <div class="detail_season">
            <span class="title_block">
            <span style="color:#39E819;font-size:22px;">THỜI</span>
            <span style="color:#FFDE27;font-size:22px; ">TRANG</span>
            <span style="color:#E8801C;font-size:22px;">THEO</span>
            <span style="color:#7BA2FF;font-size:22px;">MÙA</span>
        </span>
        </div>
        <div class="ads">
            <?php
            foreach ($arr_season as $key) {
             ?>
                <div class="ads mgt20">
                    <a href="index.php?controller=season_select&id=<?php echo $key["pk_season_id"];?>"><img alt="" style="max-width: 280px;" src="<?php echo isset($key["c_img"])?$key["c_img"]:"";?>"></a>
                </div>
            <?php }?>
        </div>
<!--     </div>    -->     
