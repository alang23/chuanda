<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>玺马设计</title>
<meta name="keywords" content="玺马设计" />
<meta name="description" content="玺马设计 "/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>static/css/style.css" />
</head>

<body>
<div class="inside_bg" style="background:url(<?=base_url()?>static/images/inside_bg.jpg) repeat left top;">
	<div class="wrapper">
<?php Widget::navigate();?>
        
        <div class="main">
			<div class="news_content">
            	<div class="news_title">
                    <h2><?=$info['title']?></h2>
                    <p><?=date("Y-m-d",$info['createtime'])?></p>
                </div>
                <div class="news_article">
                	<?=htmlspecialchars_decode($info['content'])?>
                </div>
            </div>    
                    
            <div class="look_more">
                <a href="javascript:window.opener=null;window.open('','_self');window.close();">关闭页面</a>
            </div>
        </div>
    </div>
</div>

<?php Widget::footer();?>

<script type="text/javascript" src="<?=base_url()?>static/js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".news_show_list li:nth-child(2n)").css("margin-right",0);
    });
</script>
</body>
</html>
