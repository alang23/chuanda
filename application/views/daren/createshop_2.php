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
				<dd><a href="home.html">我的主页</a> > </dd>
                <dd>达人开店</dd>
			</dl>
			<div class="clear"></div>
		</div>





		<!-- start subContent -->
		<div class="daren-create-subpage">

            <div class="daren-step-list">
                
                <ul>
                    <li class="daren-step1 active">
                        <span class="daren-step-icon">1</span>
                        <span class="h5">趣味问答</span>
                        
                    </li>
                    <li class="daren-step2 active">
                        <span class="daren-step-icon">2</span>
                        <span class="h5">穿搭测试</span>
                        <span class="daren-step-bar"></span>
                    </li>
                    <li class="daren-step3">
                        <span class="daren-step-icon">3</span>
                        <span class="h5">达人认证信息</span>
                        <span class="daren-step-bar"></span>
                    </li>
                </ul>
                <div class="clear"></div>

            </div>



			<form class="form-common" id="form1" action="#" method="post">
            <div class="panel">
                <div class="panel-title">
                    <span>穿搭测试<i>（完成10次穿搭测试）</i></span>
                </div>
                <div class="panel-body">
                    
                    <img src="<?=base_url()?>static/images/t4.jpg" alt="">



                </div>
            </div>
            <p class="super-line align-center padding-top-default"><a href="<?=base_url()?>index.php?c=createshop&m=step3" class="lg-btn lg-btn-primary lg-btn-large">下一步</a></p>


            </form>
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