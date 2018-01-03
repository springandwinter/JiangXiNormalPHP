<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
	.STYLEI{font-size:14px; color:red;
	}
div{text-align:center;
font-size:24px;
color:#0000ff;
}
table{margin:0 auto; 
}
</style>
</head>

<body background="image/注册.jpg" alt="下载"onclick="return ChangImage(E:\wamp\www\DongTaiWangYe);" >

<form id="form1" name="form1" method="post" action="legist_check.php">
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>新用户注册</p>
  </div> 
<table border="1">
	<tr >
		<td><div align="right">用 户  名:</div></td>
		<td><input type="text" name="ID"></td>
		<td class="STYLEI">*不超过10个字符</td>
	</tr>
	<tr>
		<td><div align="right">密 码：</div></td>
		<td><input type="password" name="PWD" size="21" ></td>
		<td class="STYLEI">*4-14个字符</td>
	</tr>
	<tr>
		<td><div align="right">性    别：</div></td>
		<td> 
		  <label>
		    <input type="radio" name="SEX" value="男" />
		    男</label> 
		  <label>
		  <input type="radio" name="SEX" value="女" />
		    女</label>		</td>
		<td class="STYLEI">*请选择性别</td>
	</tr> 
	<tr>
		<td><div align="right">手机号码：</div></td>
		<td><input type="tel" name="PHONE" /></td>
		<td class="STYLEI">*11位数字，第一位为1</td>
	</tr>
	<tr>
		<td><div align="right">邮     箱：</div></td>
		<td><input type="email" name="EMAIL" ></td>
		<td class="STYLEI">*有效的邮箱地址</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" name="GO" value="注册">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="NO" value="取消">		</td>
	</tr>
</table>
</form>
</body>
</html>
