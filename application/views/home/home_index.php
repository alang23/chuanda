
<!DOCTYPE HTML>
<html>
 <head>
  <title>穿搭后台管理</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?=base_url()?>static/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="<?=base_url()?>static/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="<?=base_url()?>static/assets/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
       <!--<img src="/chinapost/Public/assets/img/top.png">-->
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user"><?=$userinfo['username']?></span><a href="<?=base_url()?>index.php?d=home&c=login&m=logout" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        		<li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>		
				<li class="nav-item dl-selected"><div class="nav-item-inner nav-order">业务管理</div></li>      

      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <script type="text/javascript" src="<?=base_url()?>static/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>static/assets/js/bui-min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>static/assets/js/common/main-min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>static/assets/js/config-min.js"></script>
  <script>
    BUI.use('common/main',function(){
      var config = [
	  {
	  id:'1',
	  	menu:
			[
				{text:'会员管理',
					items:[
							{id:'11',text:'会员列表',href:'index.php?d=home&c=member'},
							{id:'12',text:'案例管理',href:'index.php?d=home&c=anli'},
							{id:'15',text:'创意美食',href:'index.php?d=home&c=ideafood'},
							{id:'13',text:'新闻管理',href:'index.php?d=home&c=news'},
							{id:'14',text:'修改密码',href:'index.php?d=home&c=password'},
							
						]
					
					},
					
		
			],
			
					
		},
		
		
		
					
	];
					
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
 </body>
</html>