<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form name="form1" method="post" action="<?=base_url()?>index.php?c=underwear&m=add" enctype="multipart/form-data">
<table width="395" border="1">
  <tr>
    <td width="92">类别</td>
    <td width="287"><label>
      <select name="typeid">
	  	<option value="1">上衣</option>
		<option value="2">裤子</option>
		<option value="3">裙子</option>
		<option value="4">鞋子</option>
		<option value="5">单品</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>图片</td>
    <td><label>
      <input type="file" name="upfile" />
    </label></td>
  </tr>
  <tr>
    <td><label>
      <input type="submit" name="Submit" value="提交" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
