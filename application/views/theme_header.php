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
				<dd>我的主页 > </dd>
				<dd>自定义封面</dd>
			</dl>
			<div class="clear"></div>
		</div>



		



		<!-- start subContent -->
		<div class="avatar-subpage">
			
			
			
			<div class="diy-box">
                <form id="crop_form" method="post" enctype="multipart/form-data" action="<?=base_url()?>index.php?c=theme&m=header">
                    <div class="diy-title">
                        <span>自定义封面</span>
                    </div>
                    <div class="diy-upload">

                        <input type="file" value="上传" name="upfile" id="coverFile" />
                        <a href="#" class="diy-upload-btn"  id="coverBtn">+ 上传封面</a>
                        <span class="diy-upload-tip">请尽可能选择大图片，太小的图片可能会显得模糊。最佳尺寸960x330</span>
                    </div>
                    <div class="diy-view">
                        <img src="<?=$pic_url?>" />
                    </div>
                    <div class="diy-upload-sub">
                       <!-- <input type="submit" class="lg-btn lg-btn-default disabled" disabled="none" value="保存"></button> -->
                        <input type="submit" class="lg-btn lg-btn-primary" value="保存"></button> 
                        <a href="#" class="lg-btn lg-btn-default">取消</a>
                    </div>
                </form>
            </div>


			


			







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
	            .wait(function(){

	               $("#coverBtn").click(function(){
                        $("#coverFile").trigger("click");
                    });
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>