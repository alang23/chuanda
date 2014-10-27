    	<div class="inside_nav clearfix">
        	<h1><a href="<?=base_url()?>" class="xima_logo"></a></h1>
            <ul>
                <li><a <?php if($nav == 'index'){ ?> class="on" <?php }?> href="<?=base_url()?>">玺马首页</a></li>
                <li><a <?php if($nav == 'aboutus'){ ?> class="on" <?php }?> href="<?=base_url()?>index.php?c=aboutus">关于玺马</a></li>
                <li><a <?php if($nav == 'team'){ ?> class="on" <?php }?> href="<?=base_url()?>index.php?c=team">主创团队</a></li>
                <li><a <?php if($nav == 'anli'){ ?> class="on" <?php }?> href="<?=base_url()?>index.php?c=workcase">作品案例</a></li>
                <li><a <?php if($nav == 'ideafood'){ ?> class="on" <?php }?> href="<?=base_url()?>index.php?c=ideafood">创意美食</a></li>
                <li><a <?php if($nav == 'news'){ ?> class="on" <?php }?> href="<?=base_url()?>index.php?c=news">新闻资讯</a></li>
                <li><a <?php if($nav == 'contactus'){ ?> class="on" <?php }?> href="<?=base_url()?>index.php?c=contactus">联系我们</a></li>
            </ul>
        </div>