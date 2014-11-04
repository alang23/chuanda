<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>来穿搭过-用户登陆</title>
<?php Widget::web_header_public();?>

    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/register.css?v=0.0.1">
</head>
<body>
<?php Widget::web_header();?>


    <!--=====以上头部================================-->


    <div class="lg-sub-container top-padding">
        
		<div class="lg-breadcrumb">
			<dl>
				<dt>您当前位置：</dt>
				<dd><a href="index.html">首页</a> > </dd>
				<dd>账户登录</dd>
			</dl>
			<div class="clear"></div>
		</div>


        <div class="login-box">

            <div class="login-ad">
                
                <div class="login-ad-box"></div>
            </div>

            <div class="login-form">
               
                <form class="form-login" id="form1" action="<?=base_url()?>index.php?c=login" method="post">
                    <div class="form-item">
                        <label></label>
                        <div class="form-field login-select">
                            <span class="login-btn">登录</span>
                            <a href="<?=base_url()?>index.php?c=reg" class="reg-btn">免费注册</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-item">
                        <label for="username">账户</label>
                        <div class="form-field">
                            <input type="text" name="mobile" id="username" class="form-text" placeholder="请输入您的手机号码">
                            <span class="required-dot">*</span>
                            <span class="item-tip form-alert"></span>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-item">
                        <label for="password">登录密码</label>
                        <div class="form-field">
                            <input type="password" name="pawd" id="password" class="form-text" placeholder="请输入您的密码">
                            <span class="required-dot">*</span>
                            <span class="item-tip form-alert"></span>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-item">
                        <label for="captcha">验证码</label>
                        <div class="form-field">
                            <input type="text" name="captcha" id="captcha" class="form-text form-text-captcha" placeholder="请输入验证码">
                            <span class="captcha-tip">
                                <a href="javascript:void(0);" onClick="changeCode();">
                                    <img src="<?=base_url()?>index.php?c=login&m=verify_image" alt="" id="verify_code" width="120px" height="40px" id="authcode">
                                </a>
                            </span>
                            <span class="required-dot">*</span>
                            <span class="item-tip form-alert"></span>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-item">
                        <label></label>
                        <div class="form-field save-pwd">
                            <input type="checkbox" name="save_pwd" /> 记住密码
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-item">
                        <label></label>
                        <div class="form-field">
                            <input type="submit" class="lg-btn lg-btn-primary lg-btn-middle" value="登 录" />
                        </div>
                        <div class="clear"></div>
                    </div>
                </form>
            </div>
            <div class="clear"></div>       
        </div>
        <div class="clear"></div>
    </div>
    <script>
    $(function(){

        var jsHome = '<?=base_url()?>static/js/';
        $LAB.script(jsHome+'lg.js?v=0.0.1')
            .script(jsHome+'vender/jquery.placeholder.js?v=2.0.8')
            .script(jsHome+'plugin/register.js?v=0.0.1')
            .wait(function(){
                $('input, textarea').placeholder();
                var r = new LoginVerify('form1');
            });

          
    });
	    
  
    
    </script>



    

    <!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>