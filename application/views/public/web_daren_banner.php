        <div class="daren-header">
            <div class="daren-banner">
                <a href="<?=base_url()?>index.php?c=theme&m=header" class="banner-custom" title="自定义图片"></a>
                <img src="<?=$themeinfo['pic_url']?>" alt="">
            </div>
            <div class="daren-info">
                <div class="daren-info-header">
                    <span class="h3">王大花</span>
                    <span class="icon icon-star-small"></span>
                    <span class="daren-history">2014年毕业于设计学院，2014年搭配冠军</span>
                </div>
                <div class="daren-info-article">
                    <ul>
                        <li class="daren-score-icon">
                            <p>
                                <span class="icon icon-score-star active"></span>
                                <span class="icon icon-score-star active"></span>
                                <span class="icon icon-score-star active"></span>
                                <span class="icon icon-score-star"></span>
                                <span class="icon icon-score-star"></span>
                            </p>
                            <p>综合评分：9.2分</p>
                        </li>
                        <li><h5><?=$shopinfo['operation_longer']?>小时</h5>TA的订单回复时间</li>
                        <li><h5><?=$shopinfo['reply_longer']?>小时</h5>TA的穿搭操作时间</li>
                        <li><h5><?=$shopinfo['price']?>元/次</h5>TA的穿搭价格</li>
                    </ul>
                    <div class="clear"></div>
                </div>

                <div class="daren-header-avatar">
                    <a href="<?=base_url()?>index.php?c=userinfo&m=avatar"><img src="<?=$themeinfo['photo']?>" class="avatar avatar-large" alt=""></a>
                    <p>
                        <span>10000<br>粉丝数</span>
                        <span class="separator"></span>
                        <span>999<br>购买量</span>
                    </p>
                </div>

                <div class="daren-speaker">
                    <p class="h3">
                        <span class="icon icon-speaker"></span> 
                        <span>萌妹子们看过来</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
		
				<!-- start subContent -->
		<div class="daren-home-subpage">
			
            
            <!--daren nav start-->
			<?php
				if($checkuser['isown']){
			?>
            <div class="daren-nav">
                <div class="daren-nav-title">
                    <h3>我的穿搭店铺</h3>
                    <p><a href="<?=base_url()?>index.php?c=shop&m=seting" class="lg-btn-link">进入店铺设置</a></p>
                </div>
                <div class="daren-nav-list">
                    <ul>
                        <li><a href="<?=base_url()?>index.php?c=daily">我的穿搭日记</a></li>
                        <li><a href="<?=base_url()?>index.php?c=userinfo">我的资料</a></li>
                        <li><a href="#">我的关注</a></li>
                        <li><a href="<?=base_url()?>index.php?c=underwear">我的衣柜</a></li>
                        <li><a href="<?=base_url()?>index.php?c=fans">我的粉丝秀</a></li>
                        <li><a href="<?=base_url()?>index.php?c=comment">我的评论</a></li>
                    </ul>
                </div>
            </div>
			<?php
				}else{
			?>
			
			            <div class="daren-nav">
                <div class="daren-nav-title">
                    <h3>我的穿搭店铺</h3>
                   <!-- <p><a href="<?=base_url()?>index.php?c=shop&m=seting" class="lg-btn-link">进入店铺设置</a></p>-->
                </div>
                <div class="daren-nav-list">
                    <ul>
                        <li><a href="<?=base_url()?>index.php?c=daily&userid=<?=$userid?>">TA的穿搭日记</a></li>
                        <li><a href="<?=base_url()?>index.php?c=userinfo&userid=<?=$userid?>">TA的资料</a></li>
                        <li><a href="#">我的关注</a></li>
                        <li><a href="<?=base_url()?>index.php?c=underwear&userid=<?=$userid?>">TA的衣柜</a></li>
                        <li><a href="<?=base_url()?>index.php?c=fans&userid=<?=$userid?>">TA的粉丝秀</a></li>
                        <li><a href="<?=base_url()?>index.php?c=comment&userid=<?=$userid?>">TA的评论</a></li>
                    </ul>
                </div>
            </div>
			<?php
				}
			?>
            <!--// daren nav end-->