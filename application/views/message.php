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
				<dd>消息中心</dd>
			</dl>
			<div class="clear"></div>
		</div>

		<!-- start subContent -->
		<div class="myhome-subpage">
			
			<div class="msg-class">
				<ul>
					<li><a href="#" class="link-active link-large ">全部(20)</a> <span> | </span></li>
					<li><a href="#" class="link link-large">已读(10)</a> <span> | </span></li>
					<li><a href="#" class="link link-large">未读(10)</a></li>
				</ul>
			</div>

			<div class="clear"></div>

			<div class="msg-list" id="msg-list">
				
				<ul>
					<li>
						<span class="time-view">3分钟以前</span>
						<input type="checkbox" name="check_msg" value="1" />
						<span class="msg-con"><a href="javascript:void(0);" class="noread">您的编号为111111的订单已经通过了刘德华的认证，快去我的订单中查看吧！</a></span>
					</li>
					<li>
						<span class="time-view">2小时以前</span>
						<input type="checkbox" name="check_msg" value="2" />
						<span class="msg-con"><a href="javascript:void(0);">您的编号为111111的订单已经通过了刘德华的认证，快去我的订单中查看吧！</a></span>
					</li>
					<li>
						<span class="time-view">2014-10-17 19:35</span>
						<input type="checkbox" name="check_msg" value="3" />
						<span class="msg-con"><a href="javascript:void(0);">您的编号为111111的订单已经通过了刘德华的认证，快去我的订单中查看吧！</a></span>
					</li>
				</ul>

			</div>

			<div class="msg-pagebar">
					<p>
						<input type="checkbox" name="check_msg" value="0" id="select-all-input"/> 
						<a href="javascript:void(0);" id="select-all-btn">全选</a>
						<a href="javascript:void(0);" id="delete-select-btn">删除</a> 
						<a href="javascript:void(0);" id="set-read-btn">标记为已读</a>
						
					</p>
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
			
			


			






			<div class="clear"></div>
		</div>
		<!--//end subContent -->


	</div>

	
	<div id="msg-alert">
		<p class="p1"></p>
		<p class="p2"><a href="javascript:void(0)" class="lg-btn lg-btn-default" onClick="layer.closeAll();">确定</a></p>
	</div>

	<script>

		$(function(){



	        var jsHome = '<?=base_url()?>static/js/';
	        $LAB.script(jsHome+'lg.js?v=0.0.1')
	            .script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
	            .script(jsHome+'lib/http.js?v=0.0.1')
	            .script(jsHome+'lib/common.js?v=0.0.1')
	            .wait(function(){
	                
	               
	            	$("#msg-list li").each(function(){
	            		$(this).find('.msg-con > a').click(function(){
	            			var _this = $(this);
	            			$("#msg-alert > .p1").html(_this.text());
	            			$.layer({
	            				type:1,
	            				title:'消息中心',
	            				area:['600','200'],
	            				closeBtn:[0,true],
	            				page:{dom: "#msg-alert"}
	            			});
	            			var rs = updateMsgRead();
	            			if(rs){
	            				_this.removeClass('noread');
	            			}
	            		});
	            	});


	            	$("#select-all-btn").click(function(){
	            		checkedAll('#select-all-input','#select-all-btn','#msg-list li',false);
	            	});

	            	$("#select-all-input").change(function(){
	            		checkedAll('#select-all-input','#select-all-btn','#msg-list li',true);
	            	});

	            	$("#delete-select-btn").click(function(){

	            		layer.confirm('确定要删除所选消息?', function(){
	            			var ids = getChecked('#msg-list li','array');
								layer.alert('正在操作...,请稍后',-1,false);
								setTimeout(function(){
									var rs = deleteMsg(ids);
									if(rs){
										layer.alert('操作成功',-1,false);
										setTimeout(function(){
											location.reload();
										},800);
									}else{
										layer.alert('操作失败，请刷新页面重试',-1,false);
										setTimeout(function(){
											location.reload();
										},800);
									}
								},500);

	            		},'系统提示');

	            	});


	            	$("#set-read-btn").click(function(){

	            		var ids = getChecked('#msg-list li','array');
	            		layer.alert('正在操作...,请稍后',-1,false);
						setTimeout(function(){
							var rs = readMsg(ids);
							if(rs){
								layer.alert('操作成功',-1,false);
								setTimeout(function(){
									location.reload();
								},800);
							}else{
								layer.alert('操作失败，请刷新页面重试',-1,false);
								setTimeout(function(){
									location.reload();
								},800);
							}
						},500);

	            	});



	            });

	        
	    });

	</script>

	



	<!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>