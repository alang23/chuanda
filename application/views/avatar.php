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



		



		<!-- start subContent -->
		<div class="avatar-subpage">
			
			
			
			<form id="crop_form" method="post" enctype="multipart/form-data" action="<?=base_url()?>index.php?c=userinfo&m=avatar">
				<!--通过生成尺寸和旋转角度 后台获取尺寸和旋转角度再进行裁剪-->
				<input id="id_top" type="hidden" name="top" value="90">
				<input id="id_left" type="hidden" name="left" value="90">
				<input id="id_right" type="hidden" name="right" value="190">
				<input id="id_bottom" type="hidden" name="bottom" value="190">
				<input id="id_rotation" type="hidden" value="0" name="rotation">

				<p class="fileinput">
					<input type="file" value="上传" id="avatarFile" name="upfile" />
					<input type="button" class="lg-btn lg-btn-default" value="选择照片" id="avatarBtn" />
				</p>
				<p class="upload-tip">
					<span class="avatar-tip">支持jpg/png/gif格式文件，且图片文件不得大于1M，图片长宽不得小于140X140</span>
				</p>
				
				<div class="avatar-wrapper">

					<div class="portrait_left">
				
						<div id="picture" class="avatarSelectView">
							<span id="avatarSelectTip">请先上传头像</span>
							<img id="avatar" alt="请先上传头像" src="">
						</div>

						<div class="portrait_revolve" id="btn_rotate_wrap">
							<div class="revolve_left"></div>
							<a href="javascript:;" class="revol_left_txt" onClick="avatarrotateleft();">向左旋转</a>
							<a href="javascript:;" class="revol_right_txt" onClick="avatarrotateright();">向右旋转</a>
							<div class="revolve_right"></div>
						</div>
						
						<div class="setup_but" id="btn_submit_wrap">
							<button class="lg-btn lg-btn-primary" onClick="submit_avatar();">保存头像</button>
						</div>
					</div>

					<div class="portrait_right">
					
						<p class="portrait_right_txt">您上传的头像会自动生成小尺寸头像，请注意小尺寸的头像是否清晰</p>
					
						<div class="portrait_right_bottom">
							<div class="portrait1">
								<div id="img_big_preview" class="img_preview"><img id="avatar1" alt="头像预览" src="" style="width:360px;height:360px;margin-left:-117px;margin-top:-44px;" /></div>
								<p>大尺寸头像，160×160</p>
							</div>
						</div>
						<div class="portrait2">
							<div id="img_small_preview" class="img_preview"><img id="avatar2" alt="预览" src="" style="width: 98px; height: 98px; margin-left: -32px; margin-top: -12px;"></div>
							<p>中尺寸头像</p>
							<p>50×50</p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				</form>


			


			







		</div>
		<!--//end subContent -->


	</div>


	<script>

		$(function(){

			$("#home-avatar").mouseover(function(){
				$(this).siblings('#home-avatar-set').show();
			});
			$("#home-avatar-set").mouseover(function(){
				$(this).show();
			}).mouseout(function(){
				$(this).hide();
			});

	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'lg.js?v=0.0.1')
	            .script(jsHome+'vender/jquery.imgareaselect.min.js?v=0.0.1')
	            .script(jsHome+'vender/jQueryRotate.js?v=2.3')
	            .script(jsHome+'plugin/avatar.js?v=0.0.1')
	            .wait(function(){

	                avatar_init();
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>