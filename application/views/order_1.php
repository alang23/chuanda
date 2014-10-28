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
                <dd>第一步：隐藏衣饰</dd>
			</dl>
			<div class="clear"></div>
		</div>

		<!-- start subContent -->
		<div class="order-subpage">
			
            
            <!--daren nav start-->
            <div class="order-step-list">
                <ul>

                    <li class="order-step1 active">
                        <span class="order-step-icon">1</span>
                        <span class="h5">隐藏衣饰</span>
                    </li>

                    <li class="order-step2">
                        <span class="order-step-icon">2</span>
                        <span class="h5">优选衣饰 </span>
                        <span class="order-step-bar"></span>
                    </li>
                    <li class="order-step3">
                        <span class="order-step-icon">3</span>
                        <span class="h5">填写需求</span>
                        <span class="order-step-bar"></span>
                    </li>
                    <li class="order-step4">
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
            
            <div class="order-step-toolbar">
                
                <div class="order-step-tip">
                    <span>这一步骤：这个时候您可以先藏起衣柜中不想让TA看到的部分衣饰哦</span>
                </div>

            </div>

            
            <div class="order-step-article">
                <div class="myhome-chest-nav">
					<ul>

						<li><a href="<?=base_url()?>index.php?c=myorder&brand=0&userid=<?=$userid?>" class="chest-nav1 <?php if($brand == 0){ ?> active <?php } ?>">全部 (60)</a></li>
						<?php
								foreach($types as $tk2 => $tv2){
							?>
						<li><a href="<?=base_url()?>index.php?c=myorder&brand=<?=$tv2['id']?>&userid=<?=$userid?>" class="chest-nav<?=$tk2+2?> <?php if($brand == $tv2['id']){ ?> active <?php } ?>"><?=$tv2['attribute']?> (20)</a></li>
						<?php
						}
						?>

						<li><a href="<?=base_url()?>index.php?c=myorder&brand=0&userid=<?=$userid?>" class="chest-nav7 <?php if($brand == 99){ ?> active <?php } ?>">未分类 (60)</a></li>
					</ul>
                </div>


                <div class="myhome-chest-list" id="myhome-chest-list">
                    <ul>
					<?php
						foreach($list as $k => $v){
					?>
                        <li data-id="<?=$v['apparelId']?>">
                            <img src="<?=base_url()?>uploads/member/clothespress/<?=$v['imageUrl']?>" alt="">
                            <div class="chest-list-info">
                                <a href="javascript:void(0);">点击隐藏</a>
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="<?=$v['apparelId']?>" /></span> 
                            <div class="chest-icon chest-icon-yin"></div>
                        </li>
					<?php
						}
					?>

                    </ul>
                    <div class="clear"></div>
                </div>


            </div>

            <div class="clear"></div>

            <div class="myhome-diary-pagebar">

                <ul class="pagination">
 <?=$page?>
                </ul> 
            </div>

            <div class="order-step-btn">
                <a href="<?=base_url()?>index.php?c=myorder&m=step2&uid=<?=$uid?>" class="lg-btn lg-btn-primary lg-btn-large">下一步</a>
            </div>
            
            



		</div>
		<!--//end subContent -->


	</div>


	<script>

		$(function(){

	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'lg.js?v=0.0.1')
	            .script(jsHome+'public/daren.js?v=0.0.1')
	            .wait(function(){
	                
                    daren.orderStep1_init(jsHome);
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->

<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>