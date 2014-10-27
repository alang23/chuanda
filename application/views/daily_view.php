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
				<dd>穿搭详情</dd>
			</dl>
			<div class="clear"></div>
		</div>



		



		<!-- start subContent -->
		<div class="myhome-subpage">
			
			<div class="myhome-dview-header">
                <span>分类：<em>自己穿搭</em></span>
                <span>2014-10-19 13:45</span>
                <span><a href="#">分享</a></span>
                <span class="right-return-btn"><a href="<?=base_url()?>index.php?c=home">返回我的主页</a></span>
            </div>
            <div class="clear"></div>
			
    		<!--article start-->
    		<div class="myhome-dview-article">
    			<?php
						$picstr = $info['picinfo'];
						$picarr = explode(',',$picstr);
					?>
                <div class="myhome-dview-grid">
                    
                    <div class="grid-show"><img src="<?=base_url()?>uploads/member/daily/<?=$picarr[0]?>" alt=""></div>
                    <!--
                    <div class="lg-grid lg-grid2">
                        <dl>
                            <dd><img src="<?=base_url()?>static/images/user/u2.jpg" alt=""></dd>
                            <dd><img src="<?=base_url()?>static/images/user/u5.jpg" alt=""></dd>
                        </dl>
                    </div>
                    <div class="clear"></div>
                    -->
	
                    <div class="lg-grid lg-grid3">
                        <dl>
                            <dd class="grid-1"><img src="<?=base_url()?>uploads/member/clothespress/<?=$picarr[1]?>" alt=""></dd>
                            <dd class="grid-2"><img src="<?=base_url()?>uploads/member/clothespress/<?=$picarr[2]?>" alt=""></dd>
                            <dd class="grid-3"><img src="<?=base_url()?>uploads/member/clothespress/<?=$picarr[3]?>" alt=""></dd>
                        </dl>
                    </div>
                    <div class="clear"></div>

                </div>

                <div class="diary-con">

                 <?=$info['message']?>

                </div>
                
                
                    
    

    		</div>
    		<!--article end-->

				


			




		</div>
		<!--//end subContent -->


	</div>


	<script>

		$(function(){

			
	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'public/uhome.js?v=0.0.1')
	            .wait(function(){
                    p.home_diary_view(jsHome);
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>