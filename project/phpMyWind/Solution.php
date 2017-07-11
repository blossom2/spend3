<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 4 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="css/news.css">
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
 <div class="pic"> 
 <?php
   			$row=$dosql->getone("SELECT * FROM `#@__infoimg` WHERE id=23");	
				?>
 <img src="<?php echo $row['picurl']; ?>" />
  </div> 

<!-- /banner-->
<!-- notice-->
<!-- <div class="subnotice"><strong>网站公告：</strong><?php echo Info(1); ?></div>-->
<!-- /notice-->
<div class="all">
	<div class="text">
		<span>解决方案</span>
		<p>您当前所在位置:首页>解决方案</p>
</div>
	</div>
		<div class="head1">
			<p>解决方案</p>
		</div>
	
<div class="tell">
	<div class="container">
	<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=14 AND delstate='' AND checkinfo=true ORDER BY orderid asc LIMIT 0,3");
				while($row = $dosql->GetArray())
				{
					//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];
				?>
	  	<div class="row">
	  	<div class="one">
	  		<div class="col-lg-4 col-md-4 col-xs-4">
			<div class="pink">
				<img src="<?php echo $row['picurl']; ?>" alt="">
			</div>
			</div>
			<div class="col-lg-8 col-md-8 col-xs-8">
				<div class="true">
					<h4><a href="<?php echo $gourl ?>"><?php echo $row['title']; ?></a></h4>
				<p><?php echo $row['description']; ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php
				}
				?>
</div>
</div>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>