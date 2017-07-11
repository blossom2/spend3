<div class="header-home navbar-fixed-top">
	 <div class="container">
	  	<div class="row">
	  	    <div class="col-lg-3 col-md-3 col-xs-3">
	  	       <div class="header-logo">
			     <img src="images/header-logo.png" alt="头部图片"/>
		      </div>
	  	    </div>
	  	    <div class="col-lg-9 col-md-9 col-xs-9">
	  	        <div class="header-nav">
					<ul>
						<?php echo GetNav(); ?>
					</ul>
		     </div>
	  	    </div>
	  	</div>
	  </div>
	</div>
<script type="text/javascript">

$(function(){

	/*当前页面导航高亮*/
	var href = window.location.href.split('/')[window.location.href.split('/').length-1].substr(0,4);
	if(href.length > 0){
		$(function(){
			$("ul.nav a:first[href^='"+href+"']").attr("class","on");
			if($("ul.nav a:first[href^='"+href+"']").size() == 0){
				$("ul.nav a:first[href^='index']").attr("class","on");
			}
		});
	}else{
		$(function(){$("ul.nav a:first[href^='index']").attr("class","on")});
	}

	/*下拉菜单*/
	$(".nav li").hover(function(){
		$(this).parents(".nav > li").find("a:first").addClass("on2");
		$(this).find("ul:first").show(); //鼠标滑过查找li下面的第一个ul显示
	},function(){
		var navobj = $(this).find("ul:first");
		navobj.hide();

		//鼠标离开隐藏li下面的ul
		if(navobj.attr("class") == "nav_sub")
		{
			$(this).find("a:first").removeClass("on2");
		}
	})

	//给li下面ul是s的样式的前一个同辈元素添加css
	$(".nav li ul li ul").prev().addClass("t");
})


//加入收藏
function AddFavorite(){
	if(document.all){
		try{
			window.external.addFavorite(window.location.href,document.title);
		}catch(e){
			alert("加入收藏失败，请使用Ctrl+D进行添加！");
		}
	}else if(window.sidebar){
		window.sidebar.addPanel(document.title, window.location.href, "");
	}else{
		alert("加入收藏失败，请使用Ctrl+D进行添加！");
	}
}
</script>