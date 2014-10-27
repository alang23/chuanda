<?php Widget::head();?>
<body>
<form class="form-inline definewidth m20" >
    <a href="<?=base_url()?>index.php?d=home&c=news&m=add"><button type="button" class="btn btn-success" id="addnew">新增</button></a>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>

        <th>ID</th>      
        <th>标题</th>
        <th>缩略图</th>
        <th>简介</th>
        <th>管理操作</th>
    </tr>
    </thead>
	<?php
		foreach($list as $k => $v){
	?>
    <tr>
	 	<td><?=$v['id']?></td>   
        <td><?=$v['title']?></td>      
		<td><img src="<?=base_url()?>uploads/news/<?=$v['pic']?>" width="60px" height="60px"></td>    
		<td><?=$v['info']?></td>         
        <td width="113" valign="middle"><a href="<?=base_url()?>index.php?d=home&c=news&m=update&id=<?=$v['id']?>">编辑</a> <a href="<?=base_url()?>index.php?d=home&c=news&m=del&id=<?=$v['id']?>">删除</a></td>
    </tr>
	<?php
		}
	?>
    <tr>
	 	<td colspan="5"><?=$page?></td>   
    </tr>
	</table>

</body>
</html>
