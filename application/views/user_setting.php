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
				<dd>账号设置</dd>
			</dl>
			<div class="clear"></div>
		</div>



		



		<!-- start subContent -->
		<div class="myhome-subpage">
			
			
			<div class="myhome-setting-title">
                <span>账号设置</span>
            </div>
                
    		<!--article start-->
    		<div class="myhome-setting-article">
    			<ul class="setting-list">
    				<li id="password">
    					<dl>
    						<dt><span class="setting-icon-lock"></span><a href="#password">修改密码</a></dt>
    						<dd>
        
                                <form class="form-common " id="form1" action="<?=base_url()?>index.php?c=setting&m=changepwd" method="post">
                                   
                                    <div class="form-item">
                                        <label for="old_password">当前密码</label>
                                        <div class="form-field">
                                            <input type="password" name="old_password" id="old_password" class="form-text" placeholder="请输入您的当前密码">
                                            <span class="required-dot">*</span>
                                            <span class="item-tip form-alert"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="form-item">
                                        <label for="password">新密码</label>
                                        <div class="form-field">
                                            <input type="password" name="password" id="password" class="form-text" placeholder="请输入您的新密码">
                                            <span class="required-dot">*</span>
                                            <span class="item-tip form-alert"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="form-item">
                                        <label for="c_password">确认新密码</label>
                                        <div class="form-field">
                                            <input type="password" name="c_password" id="c_password" class="form-text" placeholder="请确认新密码">
                                            <span class="required-dot">*</span>
                                            <span class="item-tip form-alert"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>


                                    <div class="form-item">
                                        <label></label>
                                        <div class="form-field">
                                            <input type="button" class="lg-btn lg-btn-primary lg-btn-middle" id="update-pwd-btn" value="保 存" />
                                            <span id="update-pwd-tip"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </form>


                            </dd>
    					</dl>
    				</li>
    				<li id="pay">
    					<dl>
    						<dt><span class="setting-icon-pay"></span><a href="#pay">修改/找回支付密码</a></dt>
    						<dd>
                                <div class="reset-pay-step1" id="reset-pay-step1">
                                    <p><span>注册手机号码：</span><em>136****6666</em><a href="javascript:void(0);" id="send-mobile-captcha">获取验证码</a></p>  
                                    <p><span>输入验证码：</span><input type="text" name="" id="mobile-captcha" /></p>
                                    <p><span></span><a href="javascript:void(0);" class="lg-btn lg-btn-primary" id="to-reset-pay-step2">下一步</a></p>   
                                </div>
                                <div class="reset-pay-step2" id="reset-pay-step2">
                                    <form class="form-common " id="form2" action="#" method="post">
                                        
                                        
                                        <div class="form-item">
                                            <label for="old_password" style="width:180px;">请设置新的支付密码：</label>
                                            <div class="form-field">
                                                <input type="password" name="pay_password" id="pay_password" class="form-text" placeholder="请输入新的支付密码">
                                                <span class="required-dot">*</span>
                                                <span class="item-tip form-alert"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="form-item">
                                            <label for="password" style="width:180px;">请再次输入支付密码：</label>
                                            <div class="form-field">
                                                <input type="password" name="s_pay_password" id="s_pay_password" class="form-text" placeholder="请确认您的支付密码">
                                                <span class="required-dot">*</span>
                                                <span class="item-tip form-alert"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="form-item">
                                        <label style="width:180px;"></label>
                                        <div class="form-field">
                                            <input type="submit" class="lg-btn lg-btn-primary lg-btn-middle" id="pay-submit-btn" value="保 存" />
                                            <span id="update-pwd-tip"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>



                                    </form>
                                </div>
                                                 
                            </dd>
    					</dl>
    				</li>
    				<li id="privacy">
    					<dl>
    						<dt><span class="setting-icon-privacy"></span><a href="#privacy">隐私权限</a></dt>
    						<dd>
                                
                                <form class="form-common " id="" action="#" method="post">
                                    <p>
                                        <span>我的资料：</span>
                                        <select name="" id="">
                                            <option value="">全部可见</option>
                                            <option value="">我的关注可见</option>
                                            <option value="">我送过花的粉丝可见</option>
                                            <option value="">全部不可见</option>
                                        </select>
                                    </p>  
                                    <p>
                                        <span>我的衣柜：</span>
                                        <select name="" id="">
                                            <option value="">全部可见</option>
                                            <option value="">我的关注可见</option>
                                            <option value="">我送过花的粉丝可见</option>
                                            <option value="">全部不可见</option>
                                        </select>
                                    </p>
                                    <p>
                                        <span>我的穿搭日记：</span>
                                        <select name="" id="">
                                            <option value="">全部可见</option>
                                            <option value="">我的关注可见</option>
                                            <option value="">我送过花的粉丝可见</option>
                                            <option value="">全部不可见</option>
                                        </select>
                                    </p>
                                    <p>
                                        <span>我的关注：</span>
                                        <select name="" id="">
                                            <option value="">全部可见</option>
                                            <option value="">我的关注可见</option>
                                            <option value="">我送过花的粉丝可见</option>
                                            <option value="">全部不可见</option>
                                        </select>
                                    </p>
                                    <p><span></span><a href="javascript:void(0);" class="lg-btn lg-btn-primary">保 存</a></p>
                                </form>

                            </dd>
    					</dl>
    				</li>
    				<li id="account">
    					<dl>
    						<dt><span class="setting-icon-account"></span><a href="#account">子账号管理</a></dt>
    						<dd>
                                <p><span class="form-error">您暂无子账号</span></p>
                                <p><a href="javascript:void(0);" class="lg-btn lg-btn-primary lg-btn-small">创建子账号</a> &nbsp;&nbsp; <a href="#">创建子账号需知</a></p>                        
                            </dd>
    					</dl>
    				</li>
    				
    			</ul>

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
                    p.home_setting(jsHome);
                });







			

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>