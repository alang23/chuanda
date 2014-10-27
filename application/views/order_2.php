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
                <dd>第二步：优选衣饰</dd>
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
                    <span>这一步骤：选择希望出现在TA穿搭方案中的衣饰，只可选择一件，并且TA可以不采纳意见哦</span>
                </div>

            </div>

            
            <div class="order-step-article">
                <div class="myhome-chest-nav">
                    <ul>
                        <li><a href="#" class="chest-nav1 active">全部 (60)</a></li>
                        <li><a href="#" class="chest-nav2">上衣 (20)</a></li>
                        <li><a href="#" class="chest-nav3">裤子 (60)</a></li>
                        <li><a href="#" class="chest-nav4">裙子 (60)</a></li>
                        <li><a href="#" class="chest-nav5">鞋子 (60)</a></li>
                        <li><a href="#" class="chest-nav6">单品 (60)</a></li>
                        <li><a href="#" class="chest-nav7">未分类 (60)</a></li>
                    </ul>
                </div>


                <div class="myhome-chest-list" id="myhome-chest-list">
                    <ul>
                        <li data-id="1">
                            <img src="<?=base_url()?>static/images/t2.jpg" alt="">
                            <div class="chest-list-info">
                                <a href="javascript:void(0);">点击优选</a>          
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="1" /></span> 
                            <div class="chest-icon chest-icon-you"></div>
                        </li>
                        <li data-id="2">
                            <img src="<?=base_url()?>static/images/t2.jpg" alt="">
                            <div class="chest-list-info">
                                <a href="javascript:void(0);">点击优选</a>   
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="2" /></span>
                            <div class="chest-icon chest-icon-you"></div>
                        </li>
                        <li data-id="3">
                            <img src="<?=base_url()?>static/images/t2.jpg" alt="">
                            <div class="chest-list-info">
                                <a href="javascript:void(0);">点击优选</a>  
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="3" /></span>
                            <div class="chest-icon chest-icon-you"></div>
                        </li>
                        <li data-id="4">
                            <img src="<?=base_url()?>static/images/t2.jpg" alt="">
                            <div class="chest-list-info">
                                <a href="javascript:void(0);">点击优选</a>    
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="4" /></span>
                            <div class="chest-icon chest-icon-you"></div>
                        </li>
                        <li data-id="5">
                            <img src="<?=base_url()?>static/images/t2.jpg" alt="">
                            <div class="chest-list-info">
                                <a href="javascript:void(0);">点击优选</a>     
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="5" /></span> 
                            <div class="chest-icon chest-icon-you"></div>
                        </li>
                        <li data-id="6">
                            <img src="<?=base_url()?>static/images/t2.jpg" alt="">
                            <div class="chest-list-info">
                                <a href="javascript:void(0);">点击优选</a>      
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="6" /></span>  
                            <div class="chest-icon chest-icon-you"></div>
                        </li>
                        <li data-id="7">
                            <img src="<?=base_url()?>static/images/t2.jpg" alt="">
                            <div class="chest-list-info">
                                <a href="javascript:void(0);">点击优选</a>
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="7" /></span>
                            <div class="chest-icon chest-icon-you"></div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>


            </div>

            <div class="clear"></div>

            <div class="myhome-diary-pagebar">

                <ul class="pagination">
                  <li><a href="#">上一页</a></li>
                  <li><span  class="page-active">1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">6</a></li>
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><span>...</span></li>
                  <li><a href="#">下一页</a></li>
                </ul> 
            </div>

            <div class="order-step-btn">
                <a href="#" class="lg-btn lg-btn-default lg-btn-large">上一步</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="lg-btn lg-btn-primary lg-btn-large">下一步</a>
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
	                
                   daren.orderStep2_init(jsHome);
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>