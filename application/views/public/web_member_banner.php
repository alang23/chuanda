		<div class="home-banner">			
			<div class="userBannerBox">
				<a href="<?=base_url()?>index.php?c=theme&m=header" class="btnEditBanner" title="自定义图片"></a>
				<img src="<?=$themeinfo['pic_url']?>" />
			</div>
			<div class="userMy">
				<div class="userInfoHead">
					<span id="home-avatar-set"><em  class="avatar avatar-large"></em><a href="<?=base_url()?>index.php?c=userinfo&m=avatar">编辑头像</a></span>
					<span id="home-avatar"><img src="<?=$themeinfo['photo']?>" class="avatar avatar-large" /></span>
					<p>王大花</p>
				</div>
				<div class="navInfo">
					<?php
						if($checkuser['isown']){
					?>
					<a href="<?=base_url()?>index.php?c=home"  class="userNavCur">我的穿搭日记</a> | 
					<a href="<?=base_url()?>index.php?c=userinfo">我的资料</a> | 
					<a href="../myAttention/myAttention.html">我的关注</a> | 
					<a href="<?=base_url()?>index.php?c=underwear">我的衣柜</a>
					<?php
						}else{

					?>
					<a href="<?=base_url()?>index.php?c=home&userid=<?=$userid?>"  class="userNavCur">TA的穿搭日记</a> | 
					<a href="<?=base_url()?>index.php?c=userinfo&userid=<?=$userid?>">TA的资料</a> | 
					<a href="../myAttention/myAttention.html">TA的关注</a> | 
					<a href="../myWardrobe/myWardrobe.html">TA的衣柜</a>
					<?php
						}
					?>

				</div>
			</div>
		</div>
		<div class="clear"></div>