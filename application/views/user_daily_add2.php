<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>来穿搭过</title>
<?php Widget::web_header_public();?>

    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/home.css?v=0.0.1">
    <link rel="stylesheet" href="<?=base_url()?>static/js/vender/uploadify/uploadify.css">
    <script>var hostname = '<?=base_url()?>';</script>
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
                <dd>新建穿搭日记</dd>
			</dl>
			<div class="clear"></div>
		</div>


		<!-- start subContent -->
		<div class="myhome-subpage myhome-chest-subpage">
			<form class="form1" id="form1" action="<?=base_url()?>index.php?c=daily&m=add" method="post" enctype="multipart/form-data">
			<div class="myhome-add-article">
				
				<div class="add-step2-grid">
                    <ul>
					<?php
						foreach($list as $k => $v){
					?>
                        <li><img src="<?=base_url()?>uploads/member/clothespress/<?=$v['imageUrl']?>" /></li>
					<?php
					}
					?>

                    </ul>
                </div>
                <div class="upload-show-wrap" id="upload-show-wrap">
                    
                    <div id="upload-show-btn">
                        <div id="queue"></div>
                        <span><input id="file_upload" name="file_upload" type="file" multiple="true" /></span>
                        <input type="hidden" name="picshow" value="" id="upload_show_val" />
						<input type="hidden" name="ids" value="<?=$ids?>"  />
						<!--<input name="upfile" type="file">-->
                    </div>
                    <div id="upload-show-pic"></div>
                    
                </div>

				<div class="clear"></div>
			</div>
            <div class="add-diary-txt">
                <h5>写穿搭日记</h5>
                <textarea name="content" id="content"></textarea>
                <p><!--<a href="javascript:void(0);"  class="lg-btn lg-btn-primary">发 布</a>--><input name="" type="submit" class="lg-btn lg-btn-primary"></p>
            </div>
			</form>
    	</div>
    	<!--//end subContent -->
        

	</div>

    
    





	<script>
        
		$(function(){

	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'public/uhome.js?v=0.0.1')
	            .wait(function(){
	               
                   p.addDiary(jsHome);

	            });
	    });
		
		function frmpost()
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