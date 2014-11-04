<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>来穿搭过</title>
<?php Widget::web_header_public();?>

    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/home.css?v=0.0.1">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/order.css?v=0.0.1">
</head>
<body>
<?php Widget::web_header();?>

    <!--=====以上头部================================-->
	

	<div class="lg-sub-container top-padding">
        
		<div class="lg-breadcrumb">
			<dl>
				<dt>您当前位置：</dt>
				<dd><a href="home.html">首页</a> > </dd>
                <dd><a href="#">请TA穿搭</a> > </dd>
                <dd>第四步：穿搭确认</dd>
			</dl>
			<div class="clear"></div>
		</div>

		<!-- start subContent -->
		<form name="form1" method="post" action="<?=base_url()?>index.php?c=myorder&m=save&uid=<?=$uid?>">
		<div class="order-subpage">
			
            
            <!--daren nav start-->
            <div class="order-step-list">
                <ul>
                    <li class="order-step1 active">
                        <span class="order-step-icon">1</span>
                        <span class="h5">隐藏衣饰</span>
                    </li>
                    <li class="order-step2  active">
                        <span class="order-step-icon">2</span>
                        <span class="h5">优选衣饰 </span>
                        <span class="order-step-bar"></span>
                    </li>
                    <li class="order-step3 active">
                        <span class="order-step-icon">3</span>
                        <span class="h5">填写需求</span>
                        <span class="order-step-bar"></span>
                    </li>
                    <li class="order-step4 active">
                        <span class="order-step-icon">4</span>
                        <span class="h5">穿搭确认</span>
                        <span class="order-step-bar"></span>
                    </li>
                    <li class="order-step5">
                        <span class="order-step-icon">5</span>
                        <span class="h5">支付</span>
                        <span class="order-step-bar"></span>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <!--// daren nav end-->

            <div class="order-step-article">
                
                <div class="order-confirm-item">
                    <p class='h5'>穿搭名人：<br><br></p>
                    <div class='avatar-box-default'>
                        <a href="#"><img src="<?=base_url()?><?=$userinfo['photo']?>" alt="" class="avatar avatar-default"></a>
                        <br>
                        <a href="#"><?=$userinfo['username']?></a>
                    </div>
                    <p class="order-confirm-p1">订单回复时间: 2小时 &nbsp;&nbsp;&nbsp;&nbsp; 穿搭时间：3小时</p>
                    <div class="clear"></div>
                </div>

                <div class="order-confirm-item">
                    <span class="h5">穿搭需求</span>
                    <div class="order-confirm-list">
                        <ul class="order-confirm-need"> 
                            <li>衣柜：已整理47件</li>
                            <li>季节：春天</li>
                            <li>天气：晴</li>
                            <li>场合：酒店</li>						
                            <li>风格：酒会</li>
                            <li>身份：主人</li>
							<input type="hidden" name="season" value="<?=$season?>">
							<input type="hidden" name="occasion" value="<?=$occasion?>">
							<input type="hidden" name="style" value="<?=$style?>">
							<input type="hidden" name="weaher" value="<?=$weaher?>">
							<input type="hidden" name="identity" value="<?=$identity?>">
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="order-confirm-item">
                    <span class="h5">隐藏衣饰</span>
                    <div class="order-confirm-list">
                        <ul class="order-confirm-hide"> 
						<?php
							foreach($yinarr as $k => $v){
						?>
                            <li><a href="#"><img src="<?=base_url()?>uploads/member/clothespress/<?=$v['imageUrl']?>" alt=""></a></li>
   						<?php
							}
						?> 
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="order-confirm-item">
                    <span class="h5">优选衣饰</span>
                    <div class="order-confirm-list">
                        <ul class="order-confirm-hide"> 
                            <li><a href="#"><img src="<?=base_url()?>uploads/member/clothespress/<?=$you['imageUrl']?>" alt=""></a></li>

                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="order-confirm-item">
                    <span class="h5">穿搭价格</span>
                    <div class="order-confirm-list">
                        500元
						<input type="hidden" name="transactionAmount" value="500" />
                    </div>
                    <div class="clear"></div>
                </div>
				<input type="hidden" name="demand" value="<?=$demand?>">
				<input type="hidden" name="yin" value="<?=$yin?>" />
				<input type="hidden" name="you" value="<?=$you['apparelId']?>" />
                <div class="order-confirm-item no-border-bottom">
                    <!--<a href="#" class="lg-btn lg-btn-primary lg-btn-large">确 认</a>--><input type="submit" class="lg-btn lg-btn-primary lg-btn-large" value="确认"/>
                    <div class="clear"></div>
                </div>



            </div>

            <div class="clear"></div>

            

            
            



		</div>
		</form>
		<!--//end subContent -->


	</div>


	<script>

		$(function(){

	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'lg.js?v=0.0.1')
	            .script(jsHome+'public/daren.js?v=0.0.1')
	            .wait(function(){
	                
                    daren.orderInit(jsHome);
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>