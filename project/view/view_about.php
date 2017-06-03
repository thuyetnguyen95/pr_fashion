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
<div id="main_content" class="colum_left">
    <div class="block">
        <h3 class="title_block">giới thiệu</h3>
        <div class="detail_block">
            <div class="fb_about">
                <div class="g-plusone" data-size="medium"></div>
                <div class="fb-like" data-href="https://www.facebook.com/Fashion-247-1815355935362704/" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="feature_product" >
        <div class="block">
            <h3 class="title_about"><?php echo $arr_about["c_name"] ;?></h3>
            <div class="img_about"><img src="./<?php echo isset($arr_about["c_img"])?$arr_about["c_img"]:"";?>"></div>
            <?php  echo $arr_about["c_content"];?>
        </div>
    </div>
</div>
</div>
</div>
