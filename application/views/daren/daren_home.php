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
				<dd><a href="home.html">我的主页</a> > </dd>
                <dd>我的主页</dd>
			</dl>
			<div class="clear"></div>
		</div>


       
<?php Widget::web_daren_banner($userid);?>
      




            <div class="daren-toolbar">
                <ul>
                    <li>
                        <div class="drop-box" id="drop-box-class">
                            <a href="javascript:void(0);" id="class-drop">全 部 <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="class-drop-meau">
                                <li><a href="#">全 部 <span class="caret"></span></a></li>
                                <li><a href="#">名 人</a></li>
                                <li><a href="#">达 人</a></li>
                                <li><a href="#">自 己</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">时间 <span class="icon icon-arrow-down"></span></a></li>
                    <li><a href="#">人气 <span class="icon icon-arrow-down"></span></a></li>
                </ul>
            </div>

            <div class="daren-article">
                
                <ul>
                    <li>
                        <div class="picshow"><img src="<?=base_url()?>static/images/show/1.jpg" alt=""></div>
                        <div class="infoshow">
                            <span><a href="#"><img src="<?=base_url()?>static/images/1.jpg"  class="avatar avatar-small" alt=""></a></span>
                            <span><h5 class="h5"><a href="#">小刘赵大喜</a></h5><b class='icon icon-star-focus'></b> <a href="#">取消置顶</a></span>
                            <span class="flower"><a href="javascript:void(0);" class='btnSendFlower' title="送花"></a><br>5757</span>
                        </div>
                    </li>
                    <li>
                        <div class="picshow"><img src="<?=base_url()?>static/images/show/1.jpg" alt=""></div>
                        <div class="infoshow">
                            <span><a href="#"><img src="<?=base_url()?>static/images/1.jpg"  class="avatar avatar-small" alt=""></a></span>
                            <span><h5 class="h5"><a href="#">小刘赵大喜</a></h5><b class='icon icon-star-focus active'></b> <a href="#">置顶</a></span>
                            <span class="flower"><a href="javascript:void(0);" class='btnSendFlower' title="送花"></a><br>5757</span>
                        </div>
                    </li>
                    <li>
                        <div class="picshow"><img src="<?=base_url()?>static/images/show/1.jpg" alt=""></div>
                        <div class="infoshow">
                            <span><a href="#"><img src="<?=base_url()?>static/images/1.jpg"  class="avatar avatar-small" alt=""></a></span>
                            <span><h5 class="h5"><a href="#">小刘赵大喜</a></h5><b class='icon icon-star-focus active'></b> <a href="#">置顶</a></span>
                            <span class="flower"><a href="javascript:void(0);" class='btnSendFlower' title="送花"></a><br>5757</span>
                        </div>
                    </li>
                    <li>
                        <div class="picshow"><img src="<?=base_url()?>static/images/show/1.jpg" alt=""></div>
                        <div class="infoshow">
                            <span><a href="#"><img src="<?=base_url()?>static/images/1.jpg"  class="avatar avatar-small" alt=""></a></span>
                            <span><h5 class="h5"><a href="#">小刘赵大喜</a></h5><b class='icon icon-star-focus active'></b> <a href="#">置顶</a></span>
                            <span class="flower"><a href="javascript:void(0);" class='btnSendFlower' title="送花"></a><br>5757</span>
                        </div>
                    </li>
                    <li>
                        <div class="picshow"><img src="<?=base_url()?>static/images/show/1.jpg" alt=""></div>
                        <div class="infoshow">
                            <span><a href="#"><img src="<?=base_url()?>static/images/1.jpg"  class="avatar avatar-small" alt=""></a></span>
                            <span><h5 class="h5"><a href="#">小刘赵大喜</a></h5><b class='icon icon-star-focus active'></b> <a href="#">置顶</a></span>
                            <span class="flower"><a href="javascript:void(0);" class='btnSendFlower' title="送花"></a><br>5757</span>
                        </div>
                    </li>
                    <li>
                        <div class="picshow"><img src="<?=base_url()?>static/images/show/1.jpg" alt=""></div>
                        <div class="infoshow">
                            <span><a href="#"><img src="<?=base_url()?>static/images/1.jpg"  class="avatar avatar-small" alt=""></a></span>
                            <span><h5 class="h5"><a href="#">小刘赵大喜</a></h5><b class='icon icon-star-focus active'></b> <a href="#">置顶</a></span>
                            <span class="flower"><a href="javascript:void(0);" class='btnSendFlower' title="送花"></a><br>5757</span>
                        </div>
                    </li>
                    <li>
                        <div class="picshow"><img src="<?=base_url()?>static/images/show/1.jpg" alt=""></div>
                        <div class="infoshow">
                            <span><a href="#"><img src="<?=base_url()?>static/images/1.jpg"  class="avatar avatar-small" alt=""></a></span>
                            <span><h5 class="h5"><a href="#">小刘赵大喜</a></h5><b class='icon icon-star-focus active'></b> <a href="#">置顶</a></span>
                            <span class="flower"><a href="javascript:void(0);" class='btnSendFlower' title="送花"></a><br>5757</span>
                        </div>
                    </li>

                </ul>


            </div>


            <div class="myhome-diary-pagebar">

                    <ul class="pagination">
                      <li><a href="#">上一页</a></li>
                      <li><span  class="page-active">1</span></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><span>...</span></li>
                      <li><a href="#">下一页</a></li>
                    </ul>


                    
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
	                
                    daren.homeInit(jsHome);
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>