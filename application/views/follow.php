<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>来穿搭过</title>
<?php Widget::web_header_public();?>

    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/home.css?v=0.0.1">
</head>
<body>
<?php Widget::web_header();?>


    <!--=====以上头部================================-->
	

	<div class="lg-sub-container top-padding">
        
		<div class="lg-breadcrumb">
			<dl>
				<dt>您当前位置：</dt>
				<dd><a href="index.html">首页</a> > </dd>
				<dd><a href="home.html">我的主页</a> > </dd>
				<dd>我的关注</dd>
			</dl>
			<div class="clear"></div>
		</div>



<?php Widget::web_member_banner($userid);?>



		<!-- start subContent -->
		<div class="myhome-subpage">
			
			
			<!-- start diary -->
			<div class="myhome-diary" id="allCon">
				<!-- start toolbar -->
				<div class="myhome-toolbar">
					<ul>
						<li>
							<div class="drop-box" id="drop-box-class">
								<a href="javascript:void(0);" id="class-drop">全 部 <span class="caret"></span></a>
								<ul class="dropdown-menu" id="class-drop-meau">
									<li><a href="#">全 部 <span class="caret"></span></a></li>
									<li><a href="#">名 人</a></li>
									<li><a href="#">达 人</a></li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
				<!--//end toolbar-->

				<!--article start-->
				<div class="myhome-follow-article" id="myhome-follow-article">
					<ul>
						<?php
							foreach($list as $k => $v){
						?>
						<li>
							<div class="follow-avatar">
								<a href="#"><img src="<?=base_url()?><?=$v['photo']?>" alt="" class="avatar avatar-middle"></a>
								<div class="follow-detail">
									<span class="detail-top-caret"></span>
									<div class="detail-left">
										<img src="<?=base_url()?><?=$v['photo']?>" alt="" class="avatar avatar-default">
										<p><a href="<?=base_url()?>index.php?c=myorder&uid=<?=$v['userid']?>" class="lg-btn lg-btn-primary-round lg-btn-small">请TA穿搭</a></p>
									</div>
									<div class="detail-right">
										<h5><?=$v['username']?></h5>
										<p>穿搭价格：2万/次</p>
										<p><span>粉丝数：125万</span><span>回复时间：6小时</span></p>
										<p><span>购买量：38万</span><span>穿搭时间：2小时</span></p>
										<p>擅长风格：甜美、可爱</p>
										<p>小喇叭：萌妹子看过来</p>
										<p>闪亮过往：2014毕业于北大设计学院</p>
									</div>
								</div>
							</div>
							<div class="follow-name">
								<a href="#"><?=$v['username']?></a> <span class="icon icon-crown-small"></span>
							</div>
							<div class="follow-num">
								<a href="#">粉丝数 <em>123456</em></a> <a href="#">购买量 <em>654321</em></a>
							</div>
							<div class="follow-btn">
								<a href="javascript:void(0);" data-id="1" data-isfollow="no" class="lg-btn lg-btn-primary lg-btn-small">+ 关 注</a>
							</div>
							
						</li>
						<?php
							}
						?>
						
					
						
						
					</ul>

				</div>
				<!--article end-->

				<div class="myhome-diary-pagebar">
					<ul class="pagination">
<!--					  <li><a href="#">上一页</a></li>
					  <li><span  class="page-active">1</span></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">6</a></li>
					  <li><a href="#">7</a></li>
					  <li><a href="#">8</a></li>
					  <li><span>...</span></li>
					  <li><a href="#">下一页</a></li>-->
					</ul>
				</div>


			</div>
			<!--//end diary all -->





		</div>
		<!--//end subContent -->


	</div>


	<script>

		$(function(){
			var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'public/uhome.js?v=0.0.1')
	            .wait(function(){
	               p.home_follw(jsHome);
	            });

	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>