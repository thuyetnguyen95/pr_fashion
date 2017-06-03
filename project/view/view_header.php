<div id="top_header" >
    <div class="wp_inner clearfix">
        <ul id="top_menu" class="clearfix">
            <li><a href="index.php?controller=about">Giới thiệu</a></li>
            <li><a href="index.php?controller=contact">Liên hệ</a></li>
            <!-- <li><a href="">ABC</a></li> -->
            <li><a>Địa chỉ: 125 Hoàng Quốc Việt, Cầu giấy, Hà Nội</a></li>
            <li><a>SDT: (04) 23165465</a></li>
        </ul>
        <div id="action_cart">
            <a  href="index.php?controller=cart" class="glyphicon glyphicon-shopping-cart">Cart</a>
        </div>
    </div>
</div>
<div class="wp_inner">
<!-- <div class="xxx"> -->
    <div id="header">
    <!--top_header-->
        <div id="second_header">
            <div class="top clearfix">
                <a id="logo" href="index.php"><img alt=""   src="public/images/logo.png"/></a>
                <!-- ===== Quảng cáo -->
               <?php include "controller/controller_advertise.php";?>
                <!-- ===*==-->
            </div>
            
            <div id="wp_main_nav" class="clearfix" >
                <ul id="main_nav" >
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="main"?"active_menu":"";?>"><a class="glyphicon glyphicon-home" href="index.php?controller=main"> Home</a></li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="male"?"active_menu":"";?>"><a href="index.php?controller=male">Nam</a></li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="female"?"active_menu":"";?>"><a href="index.php?controller=female">Nữ</a></li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="gallery"?"active_menu":"";?>"><a href="index.php?controller=gallery">Bộ sưu tập</a></li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="news"?"active_menu":"";?>"><a href="index.php?controller=news">Tin tức</a></li>
                    <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="example"?"active_menu":"";?>"><a href="index.php?controller=example">Example</a></li>
                </ul>
                <?php include "controller/controller_search.php";?>
            </div>
        </div>
<!--second_head-->
    </div>
<!--end header-->