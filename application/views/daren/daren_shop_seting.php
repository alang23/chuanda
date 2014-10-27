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
				<dd><a href="daren_home.html">我的主页</a> > </dd>
                <dd>我的店铺设置</dd>
			</dl>
			<div class="clear"></div>
		</div>


        <!--daren header start-->
<?php Widget::web_daren_banner($userid);?>
        <!--//daren header end-->


		<!-- start subContent -->
		<div class="daren-home-subpage">
			
            
            <div class="daren-setting-article">
                <form class="form-common" id="form1" action="#" method="post">
                    <div class="daren-setting-item item1">
                        <ul> 
                            <li><span>单次穿搭价格：</span> <input type="text" name="prize" class="form-text" placeholder="<?=$info['price']?>" /> 元</li>
                            <li>
                                <span>搭配时长：</span>
                                <select name="reply_time" id="">
                                    <option value="0"  <?php if($info['reply_longer'] == '0'){?> selected="selected" <?php } ?>>请选择</option>
                                    <option value="1" <?php if($info['reply_longer'] == '1'){?> selected="selected" <?php } ?>>1小时</option>
                                    <option value="2" <?php if($info['reply_longer'] == '2'){?> selected="selected" <?php } ?>>2小时</option>
                                    <option value="3" <?php if($info['reply_longer'] == '3'){?> selected="selected" <?php } ?>>3小时</option>
                                    <option value="4" <?php if($info['reply_longer'] == '4'){?> selected="selected" <?php } ?>>4小时</option>
                                    <option value="5" <?php if($info['reply_longer'] == '5'){?> selected="selected" <?php } ?>>5小时</option>
                                    <option value="6" <?php if($info['reply_longer'] == '6'){?> selected="selected" <?php } ?>>6小时</option>
                                    <option value="7" <?php if($info['reply_longer'] == '7'){?> selected="selected" <?php } ?>>7小时</option>
                                    <option value="8" <?php if($info['reply_longer'] == '8'){?> selected="selected" <?php } ?>>8小时</option>
                                    <option value="9" <?php if($info['reply_longer'] == '9'){?> selected="selected" <?php } ?>>9小时</option>
                                </select>
                            </li>
                            <li>
                                <span>确认时长：</span>
                                <select name="reply_time" id="">
                                    <option value="0" <?php if($info['operation_longer'] == '0'){?> selected="selected" <?php } ?>>请选择</option>
                                    <option value="1" <?php if($info['operation_longer'] == '1'){?> selected="selected" <?php } ?>>1小时</option>
                                    <option value="2" <?php if($info['operation_longer'] == '2'){?> selected="selected" <?php } ?>>2小时</option>
                                    <option value="3" <?php if($info['operation_longer'] == '3'){?> selected="selected" <?php } ?>>3小时</option>
                                    <option value="4" <?php if($info['operation_longer'] == '4'){?> selected="selected" <?php } ?>>4小时</option>
                                    <option value="5" <?php if($info['operation_longer'] == '5'){?> selected="selected" <?php } ?>>5小时</option>
                                    <option value="6" <?php if($info['operation_longer'] == '6'){?> selected="selected" <?php } ?>>6小时</option>
                                    <option value="7" <?php if($info['operation_longer'] == '7'){?> selected="selected" <?php } ?>>7小时</option>
                                    <option value="8" <?php if($info['operation_longer'] == '8'){?> selected="selected" <?php } ?>>8小时</option>
                                    <option value="9" <?php if($info['operation_longer'] == '9'){?> selected="selected" <?php } ?>>9小时</option>
                                </select>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <h5 class="item2">擅长风格</h5>
                    
                    <div class="daren-setting-item item3">
                        <span>女士</span>
                        <div class="setting-style-list">
                            <ul> 
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                                <li><input type="checkbox" name="styleGir" value="1" /> 甜美</li>
                            </ul>
                            
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="daren-setting-item item3">
                        <span>男士</span>
                        <div class="setting-style-list">
                            <ul> 
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>
                                <li><input type="checkbox" name="styleBoy" value="1" /> 运动</li>

                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="daren-setting-item item4">
                        <span>小喇叭：</span> <input type="text" name="" class="form-text"  /> <em>0</em>/20
                    </div>
                    <div class="daren-setting-item item5">
                        <span>闪亮过往：</span> <textarea name="" id="" ><?=$info['formerly']?></textarea> <i><em>0</em>/30</i>
                    </div>
                    <div class="daren-setting-item item6">
                        <span>是否接受试搭邀请:</span> <em><input type="radio"> 是</em> <em><input type="radio"> 否</em>
                    </div>
                    <div class="daren-setting-item item7">
                        <a href="#" class="lg-btn lg-btn-primary lg-btn-large">保 存</a> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="lg-btn lg-btn-default lg-btn-large">返 回</a>
                    </div>
                    <div class="clear"></div>

                </form>
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
	                
                    daren.shopSetting(jsHome);
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>