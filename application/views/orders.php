<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>来穿搭过</title>
<?php Widget::web_header_public();?>

    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/order.css?v=0.0.1">
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
                <dd>我的订单</dd>
            </dl>
            <div class="clear"></div>
        </div>

        <!-- start subContent -->
        <div class="order-subpage">
            
            
            <!--daren nav start-->
            <div class="order-nav">
                <ul>
                    <li><a href="#" class="h3">我是粉丝</a></li>
                    <li><a href="#" class="h3 active">我是达人</a></li>
                </ul>
            </div>
            <!--// daren nav end-->

            <div class="order-toolbar">
                <ul>
                    <li><a href="#" class='link-active'>待回复(6)</a><span>|</span></li>
                    <li><a href="#">待穿搭(6)</a><span>|</span></li>
                    <li><a href="#">已完成(18)</a></li>
                </ul>
            </div>

            <div class="order-article">
                
                <dl>
                    <dt>
                        <ul>
                            <li class="dd-g1">订单号</li>
                            <li class="dd-g2">剩余时间</li>
                            <li class="dd-g3">金额(元)</li>
                            <li class="dd-g4">粉丝信息</li>
                            <li class="dd-g5">操作</li>
                            <li class="dd-g6">类别</li>
                        </ul>
                    </dt>
					<?php
						foreach($list as $k => $v){
					?>
                    <dd>
                        <ul>
                            <li class="dd-g1"><?=$v['orderId']?></li>
                            <li class="dd-g2">5小时30分</li>
                            <li class="dd-g3"><?=$v['transactionAmount']?></li>
                            <li class="dd-g4">
                                <div>
                                    <p><a href="#"><img src="<?=base_url()?><?=$v['photo']?>" class="avatar avatar-default" alt=""></a><br><a href="#">王小帅</a></p>
                                </div>
                            </li>
                            <li class="dd-g5"><a href="javascript:void(0);" data-id="2" class="order-accept-btn">接受</a> | <a href="javascript:void(0);" data-id="2" class="order-refuse-btn">拒绝</a></li>
                            <li class="dd-g6">
                                <a href="javascript:void(0);" class="order-fast-btn">订单需求预览</a> | <a href="#">查看详情</a>
                                <div class="order-fast-view">
                                    <span class="view-top-caret"></span>
                                    <div class="detail-left">
                                        <img src="<?=base_url()?><?=$v['photo']?>" alt="">  
                                    </div>
                                    <div class="detail-right">
                                        <h5>穿搭需求</h5>
                                        <p>衣柜：已整理47件</p>
                                        <p>季节：春</p>
                                        <p>温度：15℃~30℃</p>
                                        <p>天气：晴</p>
                                        <p>场合：酒店</p>
                                        <p>风格：酒会</p>
                                        <p>身份：主人</p>
                                        <p>备注：简单好看舒适</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </dd>
					<?php
						}
					?>






                    

                </dl>


            </div>

            <div class="clear"></div>

            <div class="myhome-diary-pagebar">

                <ul class="pagination">
<!--                  <li><a href="#">上一页</a></li>
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
                </ul> 
            </div>
            
            



        </div>
        <!--//end subContent -->


    </div>


    <div class="dialog-refuse" id="dialog-refuse">
        <form class="form-100 " id="form1" action="#" method="post">
            <div class="refuse-pic">
                <img src="<?=base_url()?>static/images/public/refuse.jpg" alt="">
            </div>
            <div class="refuse-title">
                点击可选择安慰语
            </div>
            <div class="refuse-form">
                
                <input type="hidden" value="" id="refuseId">
                <ul>
                    <li>
                        <select name="less_yy" id="less_yy">
                            <option value="0">因衣饰量少而拒绝：</option>
                            <option value="1">sorry，你的衣服太少了，巧妇难为无米之炊啊！</option>
                            <option value="2">sorry，你的风格我实在无法驾驭，待我修炼一番吧。</option>
                            <option value="3">sorry，你的衣柜中实在没有符合要求的衣饰，不考虑再买几件？</option>
                            <option value="4">这位朋友，你你你……你确实不是来逗我的吗？</option>
                            <option value="5">亲，你的YY太少了，我是心有余而力不足啊！</option>
                            <option value="6">你确认上传完衣饰了吗？要不要再检查一下下？</option>
                            <option value="7">sorry，怪我无能为力，你的衣衣太少了。</option>
                            <option value="8">亲爱的，你的衣饰太少了，快去补货吧。</option>
                            <option value="9">衣饰太少了，再去淘几件再来吧。</option>
                            <option value="10">很遗憾，你的要求非一般，我就让单子再飞一会吧。</option>
                        </select>
                    </li>
                    <li>
                        <select name="less_time" id="less_time">
                            <option value="0">因无时间操作而拒绝：</option>
                            <option value="1">对不起，我最近比较忙，过两天敞开大门欢迎你。</option>
                            <option value="2">sorry，最近档期有点满，下次一定好好为你穿搭。</option>
                            <option value="3">sorry，太忙了，好想会点分身术啊！</option>
                            <option value="4">我变我变我变变……还是一个我，sorry没时间为你穿搭！</option>
                            <option value="5">对不起，太忙了，好希望一天能有48小时啊！</option>
                            <option value="6">最近比较忙，比较忙……很抱歉，希望下次再合作。</option>
                            <option value="7">朋友，这次真的很抱歉，太忙了没时间为你穿搭。</option>
                            <option value="8">虽说时间像海绵里的水，只要挤总会有的，但这次把我挤干，都木有时间，很抱歉。</option>
                        </select>
                    </li>
                    <li>
                        <textarea name="less_txt" id="less_txt" ></textarea>
                    </li>
                </ul>
                
            </div>
            <div class="refuse-btn">
                <input type="submit" class="lg-btn lg-btn-primary" value="发 送" /> <span id="order-refuse-tip"></span>
            </div>
        </form>
    </div>


    <script>

        $(function(){

            var jsHome = '<?=base_url()?>static/js/';
            $LAB.script(jsHome+'lg.js?v=0.0.1')
                .script(jsHome+'public/order.js?v=0.0.2')
                .wait(function(){
                    
                    order.orderInit(jsHome);
                   
                });

            
        });

    </script>

    



    <!--=====以下底部================================-->

    <!--footer start-->
<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>