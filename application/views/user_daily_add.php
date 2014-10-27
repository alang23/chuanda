<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>来穿搭过</title>
<?php Widget::web_header_public();?>

    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/home.css?v=0.0.1">
    <link rel="stylesheet" href="<?=base_url()?>static/js/vender/uploadify/uploadify.css">
    <script>var hostname = 'http://localhost/';</script>
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
			
			<div class="myhome-add-article">
				
				<div class="test-dress"><img src="<?=base_url()?>static/images/t3.jpg" alt=""></div>
				<div class="test-grid" id="test-grid">
				<form name="form1" method="post" action="<?=base_url()?>index.php?c=daily&m=add2">
					<ul>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid1" /></li>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid2" /></li>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid3" /></li>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid4" /></li>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid5" /></li>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid6" /></li>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid7" /></li>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid8" /></li>
						<li><span class="img-wrap"></span><input type="hidden" value="" name="grid9" /></li>
					</ul>
					</form>
				</div>
				<div class="test-chest-wrap">
					
					<div class="test-chest-nav">
						<ul>
							<li><a href="javascript:void(0);" class="chest-nav1" onClick="getunderwear(0);">全部<br/>(60)</a></li>
							<?php
								foreach($types as $tk => $tv){
							?>
							<li><a href="javascript:void(0);" class="chest-nav<?=$tk+2?>" onClick="getunderwear(<?=$tv['id']?>);"><?=$tv['attribute']?><br/>(20)</a></li>
							<!--<li><a href="javascript:void(0);" class="chest-nav3" onClick="getunderwear(2);">裤子<br/>(60)</a></li>
							<li><a href="javascript:void(0);" class="chest-nav4" onClick="getunderwear(3);">裙子<br/>(60)</a></li>
							<li><a href="javascript:void(0);" class="chest-nav5" onClick="getunderwear(4);">鞋子<br/>(60)</a></li>
							<li><a href="javascript:void(0);" class="chest-nav6" onClick="getunderwear(5);">单品<br/>(60)</a></li>
							<li><a href="javascript:void(0);" class="chest-nav7" onClick="getunderwear(6);"> 未分类<br/>(60)</a></li>-->
							<?php
								}
							?>
						</ul>
						<div class="clear"></div>
					</div>
					<div class="test-chest-list" id="test-chest-list">
						<ul id="clother">
							<li><a href="javascript:void(0);" data-id="1"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="2"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="3"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="4"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="5"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="6"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="7"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="8"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="9"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
							<li><a href="javascript:void(0);" data-id="10"><img src="<?=base_url()?>static/images/t2.jpg" /></a></li>
						</ul>


					</div>
					
				</div>
				<div class="clear"></div>
			</div>
			<p class="test-btn-next"><a href="javascript:void(0);" class="lg-btn lg-btn-primary lg-btn-large" onClick="document.form1.submit();">下一步</a></p>
			
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
				getunderwear(0);
	    });
		
		function getunderwear(id){
			var htmlstr = '';
			$.get("<?=base_url()?>index.php?c=underwear&m=clotherjson", {typeid:id}, function(data) {  
                var jsonData = eval(data);
                $.each(jsonData, function(index, objVal) { 
					 htmlstr+= '<li><a href="javascript:void(0);" data-id="'+objVal['apparelId']+'"><img src="<?=base_url()?>uploads/member/clothespress/'+objVal['imageUrl']+'" /></a></li>';				  
                }); 
		
				$("#clother").html(htmlstr); 
            });  
		}

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>