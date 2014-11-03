<div class="lg-container header">
    <!--header-top start-->
    <div class="header-top"> 

        <div class="header-logo">
            <ul>
                <li><a href="#">
                    <img src="<?=base_url()?>static/images/public/logo_001.png" border="0" /></a>
                    <p>来穿搭过</p>
                </li>
                <li class="fl pl40">
                    <img src="<?=base_url()?>static/images/public/tdcode.gif" border="0" /><br />
                    <p>扫描下载APP</p>
                </li>
            </ul>
        </div>
        
        <div class="header-right">

            <div class="header-toolbar">
                <?php
                    if(!empty($this->memberinfo)){
                ?>
                <ul>
                    <li><a href="<?=base_url()?>index.php?c=home">我的主页</a></li>
                    <li><a href="<?=base_url()?>index.php?c=createshop">达人开店</a></li>
                    <li><a href="#">订单管理</a></li>
                    <li><a href="<?=base_url()?>index.php?c=message">消息中心</a></li>
                    <li>
                        <div class="drop-box-nav" id="drop-box-nav">
                            <a href="javascript:void(0);" id="nav-drop"><?=$this->memberinfo['username']?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="nav-drop-meau">
                                <li><a href="#"><?=$this->memberinfo['username']?> <span class="caret"></span></a></li>
                                <li><a href="<?=base_url()?>index.php?c=setting">账号设置</a></li>
                                <li><a href="#">来过钱包</a></li>
                                <li><a href="#">我的人模</a></li>
                                <li><a href="<?=base_url()?>index.php?c=login&m=loginout">退出</a></li>
                            </ul>
                        </div>
                    </li>
                
                </ul>
                <?php
                    }else{
                ?>
                <ul>
                   
                    <li><a href="<?=base_url()?>index.php?c=reg">注册</a></li>
                    <li><a href="<?=base_url()?>index.php?c=login">登录</a></li>
                </ul>
                <?php
                    }
                ?>

               


            </div>
            
            <div class="header-search-box">
                <div class="header-search-hot">
                    <ul>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/1.jpg" class="avatar avatar-small"/></a></li>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/2.jpg" class="avatar avatar-small" /></a></li>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/3.jpg" class="avatar avatar-small" /></a></li>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/4.jpg" class="avatar avatar-small" /></a></li>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/5.jpg" class="avatar avatar-small" /></a></li>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/6.jpg" class="avatar avatar-small" /></a></li>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/7.jpg" class="avatar avatar-small" /></a></li>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/8.jpg" class="avatar avatar-small" /></a></li>
                        <li><a href="#" title="周杰伦"><img src="<?=base_url()?>static/images/head/star/1.jpg" class="avatar avatar-small" /></a></li>
                    </ul>
                </div>

                <div class="header-search-bar">
                    <form action="">
                        <span>搜索我的偶像</span>
                        <input type="text" name="sq" class="header-search-input hp_seekinpText" id="header-search-input" value="" />
                        <input type="submit" class="header-search-submit" value="" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cl"></div>

    <!-- header-nav start  -->
    <div class="header-nav">
        <div class="header-nav-box"> 
            <ul class="header-nav-list" id="header-nav-list">
                    <li class="header-nav-home">
                        <span>|</span>
                        <a href="default.html" class="nav-current">首页</a>
                    </li>
                    <li><a href="#" class="nav-default">名人秀</a><span>|</span>
                        <ul>
                            <li><a href="#">名人秀</a></li>
                            <li><a href="#">今日聚焦</a></li>
                            <li><a href="#">名人排行榜</a></li>
                            <li><a href="#">星味穿搭</a></li>
                            <li><a href="#">名人粉丝秀</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-default">达人秀</a><span>|</span>
                        <ul>
                            <li><a href="#">达人库</a></li>
                            <li><a href="#">达人排行榜</a></li>
                            <li><a href="#">达人粉丝秀</a></li>
                            <li><a href="#">达人之路</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-default">粉丝秀</a><span>|</span>
                        <ul>
                            <li><a href="#">粉丝秀大全</a></li>
                            <li><a href="#">粉丝变型记</a></li>
                            <li><a href="#">粉丝秀排行榜</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-default">试衣间</a><span>|</span></li>
                    <li><a href="#" class="nav-default">衣柜大PK</a><span>|</span></li>
                    <li><a href="#" class="nav-default">达人开店</a><span>|</span></li>
                    <li><a href="#" class="nav-default">排行榜</a><span>|</span></li>
                    <li><a href="#" class="nav-default">尊享服务</a><span>|</span></li>
                    <li><span>|</span></li>
            </ul>
            <div id="header-people"><img src="<?=base_url()?>static/images/public/navWoman.png" alt="" class="navWoman" /></div>
        </div>
    </div>
    <!--header-nav end-->
    <div class="clear"></div>


</div>