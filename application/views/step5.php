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
                <dd>第五步：支付</dd>
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
                    <li class="order-step5 active">
                        <span class="order-step-icon">5</span>
                        <span class="h5">支付</span>
                        <span class="order-step-bar"></span>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <!--// daren nav end-->

            <div class="order-step-article order-step-rs">
                
                
                <div class="order-rs-wrap">
                    
                    <p class="p1 h4 text-primary">
                        <span class="icon icon-right"></span>
                        支付成功，请耐心等待搭配结果。
                    </p>
                    <p class="p2"><span class="icon icon-info"></span>温馨提示：订单成功后，记得及时回传真人秀哦，这样我们才能帮您把这条记录写进穿搭日记，并给它打上尊享标记</p>

                </div>
                

                

                

                



            </div>

            <div class="clear"></div>

            

		</div>
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