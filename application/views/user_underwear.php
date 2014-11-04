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
				<dd><a href="<?=base_url()?>">首页</a> > </dd>
				<dd><a href="<?=base_url()?>index.php?c=home">我的主页</a> > </dd>
                <dd>我的衣柜</dd>
			</dl>
			<div class="clear"></div>
		</div>



<?php Widget::web_member_banner($userid);?>



		<!-- start subContent -->
		<div class="myhome-subpage myhome-chest-subpage">
			
			
			
			<!-- start toolbar -->
			<?php
									
						if($checkuser['isown']){
					
			?>
			<div class="myhome-chest-toolbar">
				<ul>
					<li><a href="javascript:void(0);" class="lg-btn lg-btn-wire-default" id="chest-upload-btn">上传衣饰</a></li>
					<li><a href="#" class="lg-btn lg-btn-wire-default">付费拍照</a></li>
					<li><a href="#" class="lg-btn lg-btn-wire-default">批量删除</a></li>
					<li><a href="#" class="lg-btn lg-btn-wire-default">装修衣柜</a></li>
				</ul>
			</div>
			<?php
			}
			?>
			<!--//end toolbar-->

			
			<div class="myhome-chest-article">
				
				<div class="myhome-chest-nav">
					
					<ul>

						<li><a href="<?=base_url()?>index.php?c=underwear&brand=0&userid=<?=$userid?>" class="chest-nav1 <?php if($brand == 0){ ?> active <?php } ?>">全部 (60)</a></li>
						<?php
								foreach($types as $tk2 => $tv2){
							?>
						<li><a href="<?=base_url()?>index.php?c=underwear&brand=<?=$tv2['id']?>&userid=<?=$userid?>" class="chest-nav2 <?php if($brand == $tv2['id']){ ?> active <?php } ?>"><?=$tv2['attribute']?> (20)</a></li>
						<?php
						}
						?>

						<li><a href="<?=base_url()?>index.php?c=underwear&brand=0&userid=<?=$userid?>" class="chest-nav7 <?php if($brand == 99){ ?> active <?php } ?>">未分类 (60)</a></li>
					</ul>

				</div>
				<div class="myhome-chest-list" id="myhome-chest-list">
					
					<ul>
					<?php
						foreach($list as $k => $v){
					?>
						<li data-id="<?=$v['apparelId']?>">
							<img src="<?=base_url()?>uploads/member/clothespress/<?=$v['imageUrl']?>" alt="">
							<div class="chest-list-info">
                                <p>上衣</p>
                                <p>卫衣</p>  
                                <p>连帽</p>
                                <p>春 秋</p>
                                <p>★★★</p>
                                <p>900-1000元</p>                 
                            </div>
                            <span class="combo-checkbox"><input type="checkbox" name="chest_list" value="<?=$v['apparelId']?>" /></span> 
						</li>
						<?php
							}
						?>
	

					</ul>

					<div class="clear"></div>
				</div>

			</div>
			<div class="myhome-diary-pagebar">

				<ul class="pagination">
<!--				  <li><a href="#">上一页</a></li>
				  <li><span  class="page-active">1</span></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">6</a></li>
				  <li><a href="#">7</a></li>
				  <li><a href="#">8</a></li>
				  <li><span>...</span></li>
				  <li><a href="#">下一页</a></li>-->
				  <?=$page?>
				</ul>


				
			</div>
			

    	</div>
    	<!--//end subContent -->


	</div>

    
    <div class="chest-upload-box" id="chest-upload-box">
        
        <div class="pic-list">
            <div id="queue" style="background:red;display:none;"></div>
            <input id="file_upload" name="file_upload" type="file" multiple="true" />
            <ul id="uploaded_list"></ul>
            <div class="clear"></div>
            <input type="hidden" name="itemid" id="itemid" value="" />
        </div>
        
        <div class="pic-btn-wrap">
            <span>共上传 <em id="tocal-uploads-num">0</em> 张图片</span>
            <a href="javascript:void(0);" class="lg-btn lg-btn-default" onClick="layer.closeAll();">取消</a> &nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="javascript:void(0);" class="lg-btn lg-btn-primary" id="upload-submit-btn">保存</a>
            <span id="upload-submit-tip"></span>
        </div>

    </div>


    <div class="chest-detail-wrap" id="chest-detail-wrap">
        
        <div id="chest-detail-loading">加载中...</div>
        <div id="chest-detail-box">
            
            <div class="pic-show">
                <div class="pic-show-box" id="pic-show-box"></div>
            </div>
            <div class="pic-data">
                <form class="form-common " id="form1" action="#" method="post">

                    <div class="form-item">
                        <label for="">类别</label>
                        <div class="form-field">
                            <select name="parent" id="d-type">
							<?php
								foreach($types as $tk => $tv){
							?>
                                <option value="<?=$tv['id']?>"><?=$tv['attribute']?></option>
    
								<?php
								}
								?>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-item">
                        <label for="">款式</label>
                        <div class="form-field">
                            <select name="style" id="d-style">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-item">
                        <label for="">样式</label>
                        <div class="form-field">
                            <select name="class" id="d-class">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-item">
                        <label for="">季节</label>
                        <div class="form-field">
                            <input type="checkbox" value="1" name="season" /> 春 
                            <input type="checkbox" value="2" name="season" /> 夏 
                            <input type="checkbox" value="3" name="season" /> 秋 
                            <input type="checkbox" value="4" name="season" /> 冬
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-item">
                        <label for="">喜欢程度</label>
                        <div class="form-field">
                           <select name="star" id="d-star">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-item">
                        <label for="">价格</label>
                        <div class="form-field">
                            <input type="text" name="prize_min" id="d-prize_min" value="0" class="input-text-small" /> - 
                            <input type="text" name="prize_max" id="d-prize_max" value="100" class="input-text-small" />
							<input type="hidden" name="apparelId" id="apparelId" value="100"/>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-item">
                        <label for=""></label>
                        <div class="form-field">
                            <a href="javascript:void(0);" class="lg-btn lg-btn-primary" id="chest-detail-submit">保 存</a> <span id="chest-detail-submit-tip"></span>
                        </div>
                        <div class="clear"></div>
                    </div>





                </form>

            </div>

        </div>
    </div>





	<script>
        
		$(function(){

	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'public/uhome.js?v=0.0.1')
	            .wait(function(){
	               
                   p.home_my_chest(jsHome);

	            });
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>