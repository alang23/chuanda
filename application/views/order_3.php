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
                <dd>第三步：填写需求</dd>
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
                    <span>这一步骤：您可以具体填写您的修改穿搭需求哦</span>
                </div>

            </div>

            
            <div class="order-step-article order-need ">
                <form class="form-common" id="form1" action="<?=base_url()?>index.php?c=myorder&m=step4" method="post">
                <div class="order-need-item">
                    <span>季节</span>
                    <div class="order-need-list">
                        <ul> 
                            <li><input type="checkbox" name="season" value="1" /> 春</li>
                            <li><input type="checkbox" name="season" value="1" /> 夏</li>
                            <li><input type="checkbox" name="season" value="1" /> 秋</li>
                            <li><input type="checkbox" name="season" value="1" /> 冬</li>
                        </ul>
                        
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="order-need-item">
                    <span>场合</span>
                    <div class="order-need-list">
                        <ul> 
                            <li><input type="radio" name="occasion" value="1" /> 旅游</li>
                            <li><input type="radio" name="occasion" value="1" /> 逛街</li>
                            <li><input type="radio" name="occasion" value="1" /> 派对</li>
                            <li><input type="radio" name="occasion" value="1" /> 竞标</li>
                            <li><input type="radio" name="occasion" value="1" /> 旅游</li>
                            <li><input type="radio" name="occasion" value="1" /> 逛街</li>
                            <li><input type="radio" name="occasion" value="1" /> 派对</li>
                            <li><input type="radio" name="occasion" value="1" /> 竞标</li>
                            <li><input type="radio" name="occasion" value="1" /> 旅游</li>
                            <li><input type="radio" name="occasion" value="1" /> 逛街</li>
                            <li><input type="radio" name="occasion" value="1" /> 派对</li>
                            <li><input type="radio" name="occasion" value="1" /> 竞标</li>
                            <li><input type="radio" name="occasion" value="1" /> 旅游</li>
                            <li><input type="radio" name="occasion" value="1" /> 逛街</li>
                            <li><input type="radio" name="occasion" value="1" /> 派对</li>
                            <li><input type="radio" name="occasion" value="1" /> 竞标</li>
                            <li><input type="radio" name="occasion" value="1" /> 旅游</li>
                            <li><input type="radio" name="occasion" value="1" /> 逛街</li>
                            <li><input type="radio" name="occasion" value="1" /> 派对</li>
                            <li><input type="radio" name="occasion" value="1" /> 竞标</li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="order-need-item">
                    <span>风格</span>
                    <div class="order-need-list">
                        <ul> 
                            <li><input type="radio" name="style" value="1" /> 甜美</li>
                            <li><input type="radio" name="style" value="1" /> 可受</li>
                            <li><input type="radio" name="style" value="1" /> 少女</li>
                            <li><input type="radio" name="style" value="1" /> 英伦</li>
                            <li><input type="radio" name="style" value="1" /> 甜美</li>
                            <li><input type="radio" name="style" value="1" /> 可受</li>
                            <li><input type="radio" name="style" value="1" /> 少女</li>
                            <li><input type="radio" name="style" value="1" /> 英伦</li>
                            <li><input type="radio" name="style" value="1" /> 甜美</li>
                            <li><input type="radio" name="style" value="1" /> 可受</li>
                            <li><input type="radio" name="style" value="1" /> 少女</li>
                            <li><input type="radio" name="style" value="1" /> 英伦</li>
                            <li><input type="radio" name="style" value="1" /> 甜美</li>
                            <li><input type="radio" name="style" value="1" /> 可受</li>
                            <li><input type="radio" name="style" value="1" /> 少女</li>
                            <li><input type="radio" name="style" value="1" /> 英伦</li>
                            <li><input type="radio" name="style" value="1" /> 甜美</li>
                            
                        </ul>
                        
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="order-need-item">
                    <span>天气</span>
                    <div class="order-need-list">
                        <ul> 
                            <li><input type="radio" name="weaher" value="1" /> 晴天</li>
                            <li><input type="radio" name="weaher" value="1" /> 阴天</li>
                            <li><input type="radio" name="weaher" value="1" /> 雨天</li>
                            <li><input type="radio" name="weaher" value="1" /> 雪天</li>
                            <li><input type="radio" name="weaher" value="1" /> 其它</li>
                        </ul>
                        
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="order-need-item">
                    <span>身份</span>
                    <div class="order-need-list">
                        <ul> 
                            <li><input type="radio" name="identity" value="1" /> 主角</li>
                            <li><input type="radio" name="identity" value="1" /> 配角</li>
                        </ul>
                        
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="order-need-item">
                    <span>备注</span>
                    <div class="order-need-list">
                        <textarea name="demand" id="demand" class='textarea-default' ></textarea>
                    </div>
                    <div class="clear"></div>
                </div>
                <input type="hidden" name="yin" id="yin" />
				<input type="submit" value="submit" />
                </form>

            </div>

            <div class="clear"></div>

            

            <div class="order-step-btn">
                <a href="<?=base_url()?>index.php?c=myorder&m=step2&uid=<?=$uid?>" class="lg-btn lg-btn-default lg-btn-large">上一步</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="javascript:void(0);" onClick="dopost();" class="lg-btn lg-btn-primary lg-btn-large">下一步</a>
            </div>
            
            



		</div>
		<!--//end subContent -->
	</div>


	<script>

		$(function(){
			
	        var jsHome = '<?=base_url()?>static/js/';
			var account;
	        $LAB.script(jsHome+'lg.js?v=0.0.1')
	            .script(jsHome+'public/daren.js?v=0.0.1')
				.script(jsHome+'vender/jquery.cookie.js?v=1.4.1')
	            .wait(function(){
	                
                    daren.orderInit(jsHome);
	                account = $.cookie('yin');
					$("#yin").val(account);
					//alert(account);
	            });


	    });
	       
		
		function dopost()
		{		
			document.form1.submit();
		}	
	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>