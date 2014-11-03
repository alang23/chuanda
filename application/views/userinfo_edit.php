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
				<dd>我的主页</dd>
			</dl>
			<div class="clear"></div>
		</div>



<?php Widget::web_member_banner($userid);?>



		<!-- start subContent -->
		<div class="myinfo-subpage">
			<form class="form-info" id="form1" action="<?=base_url()?>index.php?c=userinfo&m=edit" method="post">
    			<div class="infoTitle">
    				<span class="fl">基本信息</span>
    				<a href="<?=base_url()?>index.php?c=userinfo" class="lg-btn lg-btn-default-round">取消编辑</a>
    			</div>
    			<div class="field-group">
    				<label>* 昵 称</label>
    				<input type="text" class="text-input" name="nick_name" value="<?=$userbaseinfo['nick_name']?>" />
    			</div>
    			<div class="field-group">
    				<label>* 性 别</label>
    				<input type="radio" name="sex" value="0" <?php if($userbaseinfo['sex'] == '0'){?> checked="checked" <?php } ?> /> 男  &nbsp;&nbsp; <input type="radio" name="sex" value="1" <?php if($userbaseinfo['sex'] == '1'){?> checked="checked" <?php } ?>/> 女
    			</div>	
    			<div class="field-group">
    				<label>* 年 龄</label>
    				<input type="text" class="text-input" name="age" value="<?=$userbaseinfo['age']?>" />
    			</div>	
    			<div class="field-group">
    				<label>星 座</label>
    				<select name="constellation" id="constellation">
                        <option value="1">白羊座</option>
                        <option value="2">白羊座</option>
                        <option value="3">白羊座</option>
                        <option value="4">白羊座</option>
                        <option value="5">白羊座</option>
                        <option value="6">白羊座</option>
                    </select>
    			</div>
    			<div class="field-group">
    				<label>喜欢的品牌</label>
    				<input type="text" class="text-input" name="like_brand" value="<?=$userbaseinfo['like_brand']?>" />		
    			</div>	
    			<div class="field-group">
    				<label>喜欢的颜色</label>
    				<input type="text" class="text-input" name="like_color" value="<?=$userbaseinfo['like_color']?>" />
    			</div>	
    			<div class="field-group">
    				<label>喜欢的名人</label>
    				<input type="text" class="text-input" name="like_star" value="<?=$userbaseinfo['like_star']?>" />
    			</div>	
    			<div class="field-group">
    				<label>喜欢的风格</label>
    				<input type="text" class="text-input" name="like_style" value="<?=$userbaseinfo['like_style']?>" />
    			</div>	
    			
    			<br /><br />
    			<div class="infoTitle"><span class="fl">联系信息</span></div>			
    			<div class="field-group">
    				<label>QQ</label>
    				<input type="text" class="text-input" name="qq" value="<?=$userbaseinfo['qq']?>" />
                    <span>&nbsp;&nbsp;设为 <a href="javascript:void(0);" class="link-btn">公开</a></span>
    			</div>	
    			<div class="field-group">
    				<label>新浪微博</label>
    				<input type="text" class="text-input" name="sina_weibo" value="<?=$userbaseinfo['sina_weibo']?>" />
                    <span>&nbsp;&nbsp;设为 <a href="javascript:void(0);" class="link-btn">公开</a></span>
    			</div>	
    			<div class="field-group">
    				<label>手机号</label>
    				<input type="text" class="text-input" name="mobile" value="<?=$userbaseinfo['mobile']?>" />
                    <span>&nbsp;&nbsp;设为 <a href="javascript:void(0);" class="link-btn">公开</a></span>
    			</div>	
    			<div class="field-group">
    				<label>微 信</label>
                    <input type="text" class="text-input"  name="weixin" value="<?=$userbaseinfo['weixin']?>" />
                    <span>&nbsp;&nbsp;设为 <a href="javascript:void(0);" class="link-btn">公开</a></span>	
    			</div>
                <div class="field-group">
                    <label></label>
                   <!-- <a href="#" class="lg-btn lg-btn-primary">保存</a>-->
					<input type="submit" value="保存" class="lg-btn lg-btn-primary"/>
                    
                </div>  	
    			<div class="userOtherInfo">
    				<table class="fr">
    					<tr>
    						<td width="100">注册时间</td>
    						<td>2009-01-17</td>
    					</tr>
    					<tr>
    						<td>最近更新</td>
    						<td> 2013-05-14 21:19</td>
    					</tr>
    					<tr>
    						<td>最后登录</td>
    						<td>2013-12-08 23:43</td>
    					</tr>
    				</table>			
    			</div>
    			<div class="clear"></div>
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