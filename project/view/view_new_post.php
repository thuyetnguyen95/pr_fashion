<!-- Kinh nghiệm -->
        <div class="block mgt20 exp_sidebar">
            <h2 class="title_block">Tin mới</h2>
            <div class="detail_block">
                <ul class="exp">
                    <?php  
                        foreach ($arr_new_post as $key) {
                    ?>
                        <li><a href="index.php?controller=detail_news&id=<?php echo $key["pk_news_id"];?>">
                            <?php
                                $str = $key["c_name"];
                                echo "<span>+ </span>".substr($str, 0,70)."...";
                            ?>
                        </a></li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <!-- End Kinh nghiệm -->