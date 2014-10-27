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
                <dd>我的资料</dd>
			</dl>
			<div class="clear"></div>
		</div>


        <!--daren header start-->
<?php Widget::web_daren_banner($userid);?>
            <!--// daren nav end-->

            

            <div class="daren-infomation-article">
                
                <div class="daren-infomation-aside">
                    <p class="p1"><a href="#"><img src="<?=base_url()?><?=$userbaseinfo['photo']?>" alt="" class="avatar avatar-default"></a></p>
                    <p>注册时间：2014-01-01</p>
                    <p>最近更新：<?=$userbaseinfo['up_time']?></p>
                    <p>最后登录：<?=$userbaseinfo['last_login_time']?></p>
                    
                </div>
                <div class="daren-infomation-section edit-infomation">
                    <form class="form-common" id="form1" action="#" method="post">
                        <ul>
                            <li><span>呢 称：</span><input type="text" name="nickname" class="form-text-default" value="<?=$userbaseinfo['nick_name']?>" /></li>
                            <li><span>性 别：</span>
							<input type="radio" name="gender" value="0" <?php if($userbaseinfo['sex'] == 0){?> checked="checked" <?php } ?>/> 男 &nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="gender" value="1" <?php if($userbaseinfo['sex'] == 1){?> checked="checked" <?php } ?>/> 女</li>
                            <li><span>年 龄：</span><input type="text" name="age" class="form-text-default" value="<?=$userbaseinfo['age']?>" /></li>
                            <li>
                                <span>星 座：</span>
                                <select name="constellation" id="" class="select-default">
                                    <option value="0">请选择</option>
                                    <option value="1">双子座</option>
                                </select>
                            </li>
                            <li><span>QQ：</span><input type="text" name="age"  class="form-text-default" value="<?=$userbaseinfo['qq']?>" /></li>
                            <li><span>手 机：</span><input type="text" name="qq" class="form-text-default"  value="<?=$userbaseinfo['mobile']?>" /></li>
                            <li><span>新浪微博：</span><input type="text" name="weibo" class="form-text-default"  value="<?=$userbaseinfo['sina_weibo']?>" /></li>
                            <li><span>喜欢的品牌：</span><input type="text" name="like_brand" class="form-text-default"  value="<?=$userbaseinfo['age']?>" /></li>
                            <li><span>喜欢的颜色：</span><input type="text" name="like_color" class="form-text-default" value="<?=$userbaseinfo['age']?>" / ></li>
                            <li><span>喜欢的名人：</span><input type="text" name="like_famous" class="form-text-default"  value="<?=$userbaseinfo['age']?>" /></li>
                            <li><span>喜欢的风格：</span><input type="text" name="like_style" class="form-text-default"  value="<?=$userbaseinfo['age']?>" /></li>
                        </ul>
                        <p class="p4"><input type="submit" class="lg-btn lg-btn-primary" value='保 存' /></p>
                    </form>
                </div>
                
                <div class="clear"></div>


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
	                
                    daren.infoInit(jsHome);
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>