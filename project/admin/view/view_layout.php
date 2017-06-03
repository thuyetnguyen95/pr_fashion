<!DOCTYPE html>
<html>
<head>
	<title>Trang admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
  <!-- load editor -->
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="./public/js/jquery-3.1.0.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="http://localhost:8080/AAAAAAAAAAAA/project/">Fashion</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="home"?"active":"";?>"><a href="index.php?controller=home">Quản lý</a></li>
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="season"?"active":"";?>"><a href="index.php?controller=season">Mùa</a></li>
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="slide"?"active":"";?>"><a href="index.php?controller=slide">Slide</a></li>
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="advertise"?"active":"";?>"><a href="index.php?controller=advertise">Quảng cáo</a></li>
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="product"?"active":"";?>"><a href="index.php?controller=product">Sản phẩm</a></li>
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="news"?"active":"";?>"><a href="index.php?controller=news">Bài viết</a></li>
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="about"?"active":"";?>"><a href="index.php?controller=about">Giới thiệu</a></li>
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="order"?"active":"";?>"><a href="index.php?controller=order">Đơn hàng</a></li>
            <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="user"?"active":"";?>"><a href="index.php?controller=user">Người dùng</a></li>
          </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?controller=logout" onclick="return window.confirm('Đăng xuất ngay ???')"><span class="glyphicon glyphicon-log-out"></span>Đăng xuất</a></li>
        <li class="<?php echo isset($_GET["controller"])&&$_GET["controller"]=="add_edit_user"?"active":"";?>"><a href="index.php?controller=add_edit_user&act=add"><span class="glyphicon glyphicon-user"></span>Đăng ký</a></li>
        
      </ul>
    </div>
  </div>
</nav>
    <div class="container" style="margin-top: 100px; ">
    	<div class="col-md-12">
    		<?php  
    			// load controller
    			if(file_exists($load_controller)){
    				include $load_controller;
    			}
    		?>
    	</div>
    </div>
</body>
</html>