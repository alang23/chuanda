<?php Widget::head();?>
<link rel="stylesheet" href="<?=base_url()?>static/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?=base_url()?>static/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="<?=base_url()?>static/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="<?=base_url()?>static/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="<?=base_url()?>static/kindeditor/plugins/code/prettify.js"></script>
<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="newsContent"]', {
				cssPath : '<?=base_url()?>static/kindeditor/plugins/code/prettify.css',
				uploadJson : '<?=base_url()?>static/kindeditor/php/upload_json.php',
				fileManagerJson : '<?=base_url()?>static/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				filterMode: true,//是否开启过滤模式

			});
			prettyPrint();
		});
</script>

<script>
function flush(msg,url){
	art.dialog(
		msg, 
		function () {
			
			window.location = url;
		},
		function(){
			
		}
	);
}



</script>
<body>


<form name="form1" method="post" action="<?=base_url()?>index.php?d=home&c=news&m=add" enctype="multipart/form-data">
<table width="511" class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>

        <th width="64"></th>
        <th width="332"></th>
		<th width="99"></th>
    </tr>
    </thead>


    <tr>
        <td>标题</td>       
       <td colspan="2"><label>
         <input type="text" name="title">
       </label></td>
	</tr>
    <tr>
      <td>简介</td>
      <td colspan="2"><label>
        <textarea name="info"></textarea>
		
      </label></td>
    </tr>
    <tr>
      <td>内容</td>
      <td colspan="2">
	 <!-- <?=$fcf?>-->
	  <textarea name="newsContent" style="width:100%;height:600px;visibility:hidden;"></textarea>
	  </td>
    </tr>
    <tr>
      <td>缩略图</td>
      <td colspan="2"><label>
        <input type="file" name="userfile">
      </label></td>
    </tr>
    
    
    <tr>
      <td>
        <input type="submit" name="Submit" value="提交">      </td>
      <td colspan="2">&nbsp;</td>
    </tr>
</table>
</form>
</body>
</html>
