<?php Widget::head();?>
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


<form method="post" action="<?=base_url()?>index.php?d=home&c=zhengshu&m=home_import" enctype="multipart/form-data">
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>

        <th></th>
        <th></th>
		<th></th>
    </tr>

    </thead>


    <tr>
        <td>选择文件</td>       
        <td>
          <input type="file" name="filename">
       </td>
		<td>
		  <input type="submit" name="Submit" value="提交">
		</td>
    </tr>

</table>
</form>
</body>
</html>
