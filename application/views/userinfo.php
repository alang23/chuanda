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
				<dd>我的主页</dd>
			</dl>
			<div class="clear"></div>
		</div>



<?php Widget::web_member_banner($userid);?>



		<!-- start subContent -->
		<div class="myinfo-subpage">
			
			<div class="infoTitle">
				<span class="fl">基本信息</span>
				<a href="<?=base_url()?>index.php?c=userinfo&m=edit" class="lg-btn lg-btn-default-round">编辑</a>
			</div>
			<div class="field-group">
				<label>昵 称</label>
				<span class="normalText"><?=$userbaseinfo['nick_name']?></span>
			</div>
			<div class="field-group">
				<label>性 别</label>
				<span class="normalText">
				
				<?php
					if($userbaseinfo['sex'] == '0'){
				?>
				男
				<?php
					}elseif($userbaseinfo['sex'] == '1'){
				?>
					女
				<?php
					}
				?>
				</span>	
			</div>	
			<div class="field-group">
				<label>年 龄</label>
				<span class="normalText"><?=$userbaseinfo['age']?></span>	
			</div>	
			<div class="field-group">
				<label>星 座</label>
				<span class="normalText"><?=$userbaseinfo['constellation']?></span>		
			</div>
			<div class="field-group">
				<label>喜欢的品牌</label>
				<span class="normalText"><?=$userbaseinfo['like_brand']?></span>			
			</div>	
			<div class="field-group">
				<label>喜欢的颜色</label>
				<span class="normalText"><?=$userbaseinfo['like_color']?></span>			
			</div>	
			<div class="field-group">
				<label>喜欢的名人</label>
				<span class="normalText"><?=$userbaseinfo['like_star']?></span>				
			</div>	
			<div class="field-group">
				<label>喜欢的风格</label>
				<span class="normalText"><?=$userbaseinfo['like_style']?></span>			
			</div>	
			
			<br /><br />
			<div class="infoTitle"><span class="fl">联系信息</span></div>			
			<div class="field-group">
				<label>QQ</label>
				<?php
					if($userbaseinfo['qq_install'] || $checkuser['isown']){
				?>
				<span class="normalText"><?=$userbaseinfo['qq']?></span>	
				<?php
					}
				?>		
			</div>	
			<div class="field-group">
				<label>新浪微博</label>
				<?php
					if($userbaseinfo['weixin_install'] || $checkuser['isown']){
				?>
				<span class="normalText"><?=$userbaseinfo['sina_weibo']?></span>
				<?php
					}
				?>			
			</div>	
			<div class="field-group">
				<label>手机号</label>
				
								<?php
					if($userbaseinfo['sina_weibo_install'] || $checkuser['isown']){
				?>
				<span class="normalText"><?=$userbaseinfo['mobile']?></span>
				<?php
					}
				?>			
			</div>	
			<div class="field-group">
				<label>微 信</label>	
												<?php
					if($userbaseinfo['qq_install'] || $checkuser['isown']){
				?>
				<span class="normalText"><?=$userbaseinfo['weixin']?></span>	
				<?php
				}
				?>		
			</div>	
			<div class="userOtherInfo">
				<table class="fr">
					<tr>
						<td width="100">注册时间</td>
						<td>2009-01-17</td>
					</tr>
					<tr>
						<td>最近更新</td>
						<td> 2013-05-14 21:19</td>
					</tr>
					<tr>
						<td>最后登录</td>
						<td>2013-12-08 23:43</td>
					</tr>
				</table>			
			</div>
			<div class="clear"></div>



		</div>
		<!--//end subContent -->


	</div>


	<script>

		$(function(){

	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'lg.js?v=0.0.1')
	            .script(jsHome+'vender/jquery.placeholder.js?v=2.0.8')
	            .script(jsHome+'plugin/register.js?v=0.0.1')
	            .script(jsHome+'lib/http.js?v=0.0.1')
	            .script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
	            .wait(function(){
	                
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>