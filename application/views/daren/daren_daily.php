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
                <dd>我的穿搭日记</dd>
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
                </ul>
            </div>

         
                
            <div class="myhome-diary-header">
                我的所有穿搭日记<span>共<?=$count?>篇</span>
                				<?php
						if($checkuser['isown']){
					?>
					<a href="<?=base_url()?>index.php?c=daily&m=add" class="lg-btn lg-btn-primary">+新建穿搭日记</a>
					<?php
						}
					?>
            </div>


				<div class="myhome-diary-article">
					<ul>
						<?php
							foreach($list as $k => $v){
						?>
						<li class="grid2">
							<div class="diary-grid-left">
								<span class="user-icon-crown"></span><!--皇冠-->
								<!--<span class="user-icon-literate"></span>--><!--达人-->
							</div>
							<div class="diary-grid-pic">
							<?php
								$picstr = $v['picinfo'];
								$picarr = explode(',',$picstr);
					
							?>
								<dl>
									<dt><img src="<?=base_url()?>uploads/member/daily/<?=$picarr[0]?>" alt=""></dt>
									<dd class="grid grid-1"><img src="<?=base_url()?>uploads/member/clothespress/<?=$picarr[1]?>" alt=""></dd>
									<dd class="grid grid-2"><img src="<?=base_url()?>uploads/member/clothespress/<?=$picarr[2]?>" alt=""></dd>
								</dl>
							</div>
							<div class="diary-grid-con">
								<h6><?=date("Y年m月d日 H:i")?></h6>
								<div class="diary-con-txt">
									<?=$v['message']?>
								</div>
								<div class="diary-con-action">
									<span class="diary-flower"><a href="javascript:void(0);" class='btnSendFlower' title="送花"></a>0</span>
									<a href="<?=base_url()?>index.php?c=daily&m=view&id=<?=$v['orderId']?>">查看穿搭详情</a> 
									<?php
										if($checkuser['isown']){
									?>
									| <a href="javascript:void(0);" class="aDiaryDelete">删除</a>
									<?php
									}
									?>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<?php
						}
						?>
						




						
					</ul>

				</div>




           


            <div class="myhome-diary-pagebar">

                    <ul class="pagination">
						<?=$page?>
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
	                
                    daren.diaryInit(jsHome);
	               
	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>