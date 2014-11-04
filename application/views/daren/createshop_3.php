<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>来穿搭过</title>
<?php Widget::web_header_public();?>

    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/home.css?v=0.0.1">
	 <script>var hostname = '<?=base_url()?>';</script>
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
                    <li class="daren-step3 active">
                        <span class="daren-step-icon">3</span>
                        <span class="h5">达人认证信息</span>
                        <span class="daren-step-bar"></span>
                    </li>
                </ul>
                <div class="clear"></div>

            </div>



			<form class="form-common" id="form1" action="<?=base_url()?>index.php?c=createshop&m=step3" method="post" enctype="multipart/form-data">
            <div class="panel">
                <div class="panel-title">
                    <span>达人认证信息</span>
                </div>
                <div class="panel-body">
                    <form class="form-common form-star" id="form1" action="#" method="post">
                        <div class="form-item">
                            <label for=""></label>
                            <div class="form-field text-primary">
                                您的穿搭测试得分：85分
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-item">
                            <label for="truename">真实姓名</label>
                            <div class="form-field">
                                <input type="text" name="name" id="truename" class="form-text" placeholder="请填写您的真实姓名">
                                <span class="required-dot">*</span>
                                <span class="item-tip form-alert"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-item">
                            <label for="">性 别</label>
                            <div class="form-field">
                                <input type="radio" name="gender" value='0' /> 男 &nbsp;&nbsp;
                                <input type="radio" name="gender" value='0' /> 女 
                                <span class="required-dot">*</span>
                                <span class="item-tip form-alert"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-item">
                            <label for="idcard">身份证号码</label>
                            <div class="form-field">
                                <input type="text" name="identity" id="idcard" class="form-text" placeholder="请填写您的身份证号码">
                                <span class="required-dot">*</span>
                                <span class="item-tip form-alert"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-item">
                            <label for="">上传证件照</label>
                            <div class="form-field">
                                <span id="idcard-show" class="idcard-show"></span>
                                <div id="queue1"></div>
                                <input type="hidden" name="useridcard" id="idcard-show-input" />
                                <span class="idcard-show-btn"><input id="idcard-show-btn" name="idcard" type="file" multiple="false" /></span>
                                <span class="required-dot">*</span>
                                <span class="item-tip form-alert"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-item">
                            <label for="truename">上传半身照</label>
                            <div class="form-field">
                                <span id="bust-show" class="bust-show"></span>
                                <div id="queue2"></div>
                                <input type="hidden" name="userphoto" id="bust-show-input" />
                                <span class="bust-show-btn"><input id="bust-show-btn" name="photo" type="file" multiple="false" /></span>
                                <span class="required-dot">*</span>
                                <span class="item-tip form-alert"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-item">
                            <label for="">银行卡号</label>
                            <div class="form-field">
                                <input type="text" name="bank_card_number" id="cardno" class="form-text" placeholder="请填写您的银行卡号">
                                <span class="required-dot">*</span>
                                <span class="item-tip form-alert"></span>

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-item">
                            <label for="bankname">银行名称</label>
                            <div class="form-field">
                                <select name="bank_card_type" id="bankname">
                                    <option value="0">请选择</option>
                                    <option value="1">中国工商银行</option>
                                    <option value="2">招商银行</option>
                                </select>
                                <span class="required-dot">*</span>
                                <span class="item-tip form-alert"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="form-item">
                            <label for="">支付密码</label>
                            <div class="form-field">
                                <a href="#" class="lg-btn-link">去设置您的支付密码</a>
                                <span class="required-dot">*</span>
                                <span class="item-tip form-alert"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <p class="super-line align-center padding-top-default">
                            <input type="submit" class="lg-btn lg-btn-primary lg-btn-large" value="提 交" />
                        </p>

                    </form>
                </div>
            </div>
            


            </form>
		</div>
		<!--//end subContent -->


	</div>


	<script>

		$(function(){

	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'lg.js?v=0.0.1')
	            .script(jsHome+'vender/jquery.placeholder.js?v=2.0.8')
	            .script(jsHome+'public/shop.js?v=0.0.1')
	            .script(jsHome+'lib/http.js?v=0.0.1')
	            .wait(function(){
	                
                    var r = new DarenVerify('form1');
                    shop.daren_reg(jsHome);

	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>