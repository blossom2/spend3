<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 14 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link href="templates/default/style/lightbox.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/solution-details.css">
<link rel="stylesheet"  href="css/bootstrap.min.css">

<!--[if IE 6]><link href="templates/default/style/lightbox.ie6.css" rel="stylesheet" type="text/css"/><![endif]-->
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="templates/default/js/loadimage.js"></script>
<script type="text/javascript" src="templates/default/js/slidespro.js"></script>
<script type="text/javascript" src="templates/default/js/lightbox.js"></script>
<script type="text/javascript" src="templates/default/js/comment.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
</head>
<div class="pic">
	<img src="images/detailsNav.jpg" alt="">
	</div>
 <div class="git">
	<span>新闻资讯</span>
	<p>您当前所在位置:首页>新闻资讯</p>
	</div>
	<div class="head1">
<div class="word">
	<p>湖南奥易信息互联网+监督 项目介绍</p>
</div>
<div class="auto">
	<p>更新时间：2017-6-20 19:58 点击率：539次</p>
</div>
	</div>
		 <?php
   			  $row=$dosql->getone("SELECT * FROM `#@__infolist` WHERE classid=14 and flag LIKE '%c%' AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
				?>
				<?php
			//获取描述
			if(!empty($row['description'])) echo '<div class="cols">'.$row['description'].'</div>';
			?>
			<div id="textarea">
				<?php
				if($row['content'] != '')
					echo GetContPage($row['content']);
				else
					echo '网站资料更新中...';
				?>
			<!-- 相关文章开始 -->
			<div class="preNext">
				<div class="line"><strong></strong></div>
				<ul class="text">
				<?php
				//获取上一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE classid=".$row['classid']." AND orderid<".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
				if($r < 1)
				{
					echo '<li>上一篇：已经没有了</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'caseshow.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'caseshow-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '<li>上一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
				}
				//获取下一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infoimg` WHERE classid=".$row['classid']." AND orderid>".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid ASC");
				if($r < 1)
				{
					echo '<li>下一篇：已经没有了</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'caseshow.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'caseshow-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '<li>下一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
				}
				?>
				</ul>
				<ul class="actBox">
					<li id="act-pus"><a href="javascript:;" onclick="<?php $c_uname = isset($_COOKIE['username']) ? AuthCode($_COOKIE['username']) : '';if($c_uname != ''){echo 'AddUserFavorite()';}else{echo 'AddFavorite();';} ?>">收藏</a></li>
					<li id="act-pnt"><a href="javascript:;" onclick="window.print();">打印</a></li>
				</ul>
                <input type="hidden" name="aid" id="aid" value="<?php echo $id; ?>" />
				<input type="hidden" name="molds" id="molds" value="2" />
			</div>
			<!-- 相关文章结束 -->
			<?php
			if($cfg_comment == 'Y')
			{
			?>
			<div class="commnet">
				<form name="form" id="form" action="" method="post">
					<div class="msg">
						<textarea name="comment" id="comment">说点什么吧...</textarea>
					</div>
					<div class="toolbar">
						<div class="options">
							不想登录？直接点击发布即可作为游客留言。
						</div>
						<button class="button" type="button">发 布</button>
					</div>
				</form>
			</div>
			<!-- 评论区域结束 -->
			<?php
			}
			?>
		</div>
		<!-- 详细区域结束 -->
	</div>

<!-- /mainbody-->
<?php require_once('footer.php'); ?>
<body>