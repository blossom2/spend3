<!-- weblink-->

<!-- <div class="weblink">
	<?php
	$dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=1 AND checkinfo=true ORDER BY orderid,id DESC");
	while($row = $dosql->GetArray())
	{
	?>
	<a href="<?php echo $row['linkurl']; ?>" target="_blank"><?php echo $row['webname']; ?></a>
	<?php
	}
	?>
</div> -->
<!-- /weblink-->
<!-- footer-->
<!-- <div class="footer"><?php echo $cfg_copyright ?><br />网站采用 <a href="http://phpmywind.com" target="_blank">PHPMyWind</a> 核心</div> -->
<div class="footer">
	<div class="container">
   			 <div class="row">
   			 	 <div class="col-md-9 col-lg-9">
			<div class="f-left">
				<img src="images/header-logo.png" alt="">
				<p>opyright © 2014 - 2017 aorise All Rights Reserved<br/>
				本栏目文字内容归aorise.cn 所有,任何单位及个人未经许可，不得擅自转摘使用</p>
			</div>
		<div class="col-md-3 col-lg-3">
			<div class="f-right">
				<img src="images/houpu_code.png" alt="">
				<p>奥昇教育公众号</p>
			</div>
			</div>
			</div>
		</div>
		</div>
		</div>
<!-- /footer-->
<?php

echo GetQQ();

//将流量统计代码放在页面最底部
$cfg_countcode;

?>