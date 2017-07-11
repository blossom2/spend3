<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 2 : intval($cid);
$id = empty($id) ?0 : intval($id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/aboutUs.css">
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
	<span>公司简介</span>
	<p>您当前所在位置:首页>公司简介</p>
	</div>
	</div>
	<div class="head">
	<p>关于我们</p>
	</div>
	<div class="container">
	  	<div class="row">
	  	    <div class="col-lg-3 col-md-3 col-xs-3">
	<div class="conter">
		<div class="pink">
			<p>关于我们/About Us</p>
		</div>
			<div class="pink1">
				<ul>
		<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=2 AND flag LIKE '%c%'   AND delstate='' AND checkinfo=true ORDER BY orderid asc LIMIT 0,7");
				while($row = $dosql->GetArray())
				{
					//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'about.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'about-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];
				?>
					<li><a href="<?php echo $gourl; ?>"><?php echo $row['title']; ?></a></li>
					<?php
				}
				?>
				</ul>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
	  	<div class="row">
	  	    <div class="col-lg-8 col-md-8 col-xs-8">
	<div class="writing">
	 <?php
	 if(empty($id))
   			  $row=$dosql->getone("SELECT * FROM `#@__infolist` WHERE id=49 and classid=2");
				else
					$row=$dosql->getone("SELECT * FROM `#@__infolist` WHERE id=$id and classid=2");
				?>
		<p><?php echo $row['content']; ?></p>
	</div> 
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