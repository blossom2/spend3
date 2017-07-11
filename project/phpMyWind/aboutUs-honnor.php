<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 2 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="css/aboutUs-honnor.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
 <div class="picture"> 
 		<?php
   			$row=$dosql->getone("SELECT * FROM `#@__infoimg` WHERE id=25");	
				?>
 <img src="<?php echo $row['picurl']; ?>" />
  </div> 
<!-- /banner-->
<!-- notice-->
<!-- <div class="subnotice"><strong>网站公告：</strong><?php echo Info(1); ?></div> -->
<!-- /notice-->
<!-- mainbody-->
<!-- <div class="subBody"> -->
<div class="all">
	<div class="text">
	<span>荣誉资质</span>
	<p>您当前所在位置:首页>公司简介</p>
	</div>
	</div>
	<div class="head">
	<p>荣誉资质</p>
	</div>
	<div class="container">
	  	<div class="row">
	  	    <div class="col-lg-2 col-md-2 col-xs-2">
	  	    	<div class="about">
					<p>关于我们/About Us</p>
				</div>
				<div class="aboutus">
					<ul>
						<li>公司简介</li>
						<li>荣誉资质</li>
						<li>企业文化</li>
						<li>董事长致词</li>
						<li>公司风采</li>
						<li>合作伙伴</li>
						<li>公司地址</li>
					</ul>
				</div>
			</div>
	<div class="col-lg-8 col-md-8 col-xs-8">
		<?php
   			  $row=$dosql->getone("SELECT * FROM `#@__infolist` where id=62");
				?>
			<div class="pic">
				<img src="<?php echo $row['picurl']; ?>">
			</div>
		</div>
		<div class="letter">
			<ul>
			<?php
   			  $row=$dosql->getone("SELECT * FROM `#@__infolist` where id=63");
				?>
				<li><?php echo $row['content']; ?></li>
				
			</ul>
			</div>
	</div>
	</div>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>