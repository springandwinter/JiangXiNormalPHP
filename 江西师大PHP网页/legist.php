<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
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

<body background="image/ע��.jpg" alt="����"onclick="return ChangImage(E:\wamp\www\DongTaiWangYe);" >

<form id="form1" name="form1" method="post" action="legist_check.php">
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>���û�ע��</p>
  </div> 
<table border="1">
	<tr >
		<td><div align="right">�� ��  ��:</div></td>
		<td><input type="text" name="ID"></td>
		<td class="STYLEI">*������10���ַ�</td>
	</tr>
	<tr>
		<td><div align="right">�� �룺</div></td>
		<td><input type="password" name="PWD" size="21" ></td>
		<td class="STYLEI">*4-14���ַ�</td>
	</tr>
	<tr>
		<td><div align="right">��    ��</div></td>
		<td> 
		  <label>
		    <input type="radio" name="SEX" value="��" />
		    ��</label> 
		  <label>
		  <input type="radio" name="SEX" value="Ů" />
		    Ů</label>		</td>
		<td class="STYLEI">*��ѡ���Ա�</td>
	</tr> 
	<tr>
		<td><div align="right">�ֻ����룺</div></td>
		<td><input type="tel" name="PHONE" /></td>
		<td class="STYLEI">*11λ���֣���һλΪ1</td>
	</tr>
	<tr>
		<td><div align="right">��     �䣺</div></td>
		<td><input type="email" name="EMAIL" ></td>
		<td class="STYLEI">*��Ч�������ַ</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" name="GO" value="ע��">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="NO" value="ȡ��">		</td>
	</tr>
</table>
</form>
</body>
</html>
