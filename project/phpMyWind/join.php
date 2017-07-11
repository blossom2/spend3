<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,0,0,'人才招聘'); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/joinUs.css">
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
   			$row=$dosql->getone("SELECT * FROM `#@__infoimg` WHERE id=26");	
				?>
 	<img src="<?php echo $row['picurl']; ?>" /> 
 </div> 
<!-- /banner-->
<!-- notice-->
<!-- <div class="subnotice"><strong>网站公告：</strong><?php echo Info(1); ?> </div> -->
<!-- /notice-->
<!-- mainbody-->
	<div class="all">
	<div class="text">
	<span>公司简介</span>
	<p>您当前所在位置:首页>公司简介</p>
	</div>
	</div>
	<div class="head">
	<p>关于我们</p>
	</div>
<div class="container">
	<div class="row">
	  	<div class="col-lg-12 col-md-12 col-xs-12">
			<div class="text1">
				<h1>前言</h1>
				<?php
   			  $row=$dosql->getone("SELECT * FROM `#@__infolist` WHERE id=58");
				?>
				<p><?php echo $row['description']; ?></p>
				<h3>请输入职位</h3><input type="text" name=""><input type="submit" value="搜索"></h3>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-xs-12">
			<div class="text2">
		<!-- 	<h1>软件研发部经理/高级软件工程师</h1> -->
		<?php
   			  $row=$dosql->getone("SELECT * FROM `#@__infolist` WHERE id=59");
				?>
			<p><?php echo $row['content']; ?></p>
			<span class="der">发布时间</span>2015-09-15  有效时间：<span class="ten">不限</span>
	</div>
</div>
</div>
</div>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>